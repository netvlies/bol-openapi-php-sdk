<?php
/*
 * This file is part of the BolOpenApi PHP SDK.
 *
 * (c) Netvlies Internetdiensten
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BolOpenApi;

use BolOpenApi\Exception as BolException;
use BolOpenApi\Factory\ResponseFactory;
use BolOpenApi\Response\ListResultsResponse;
use BolOpenApi\Response\ProductResponse;
use BolOpenApi\Response\SearchResultsResponse;
use Buzz\Browser;

class Client
{
    private $browser;
    private $accessKey;
   	private $secretAccessKey;
    private $sessionId;

    /**
     * Constructor: inject settings and dependencies
     * @param $accessKey
     * @param $secretAccessKey
     * @param \Buzz\Browser $browser
     */
    public function __construct($accessKey, $secretAccessKey, Browser $browser)
    {
        $this->accessKey = $accessKey;
        $this->secretAccessKey = $secretAccessKey;
        $this->browser = $browser;
    }

    /**
     * @param string $sessionId
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    public function ping()
    {
        $path = '/openapi/services/rest/catalog/v3/ping';
        $response = $this->call($path);
        return $response;
    }

    /**
     * @param $term
     * @param array|null $options
     * @return Response\SearchResultsResponse
     */
    public function searchResults($term, array $options = null)
    {
        $path = '/openapi/services/rest/catalog/v3/searchresults';
        $defaulOptions = array(
            'categoryIdAndRefinements'  => null,
            'offset'                    => 0,
            'nrProducts'                => 10,
            'sortingMethod'             => 'price',
            'sortingAscending'          => true,
            'includeProducts'           => true,
            'includeCategories'         => true,
            'includeRefinements'        => true
        );
        $query_parameters = array_merge($this->mergeOptions($defaulOptions, $options), array(
            'term' => $term
        ));
        $uri = $path . '?' . http_build_query($query_parameters);

        $obj = new ResponseFactory();
        return $obj->createSearchResultsResponse($this->call($uri));
    }

    /**
     * @param string $type
     * @param string $categoryIdAndRefinements
     * @param array|null $options
     * @return Response\ListResultResponse
     */
    public function listResults($type, $categoryIdAndRefinements, array $options = null)
    {
        $path = '/openapi/services/rest/catalog/v3/listresults/' . $type . '/' . $categoryIdAndRefinements;
        $defaulOptions = array(
            'offset'                => null,
            'nrProducts'            => 10,
            'sortingMethod'         => null,
            'sortingAscending'      => true,
            'includeProducts'       => false,
            'includeCategories'     => true,
            'includeRefinements'    => true
        );
        $options = $this->mergeOptions($defaulOptions, $options);

        $uri = $path . '?' . http_build_query($options);

        $obj = new ResponseFactory();
        return $obj->createListResultsResponse($this->call($uri));
    }

    /**
     * @param $productId
     * @return \BolOpenApi\Response\ProductResponse
     * @throws \InvalidArgumentException
     */
    public function products($productId)
    {
        if (is_float($productId)) {
            throw new \InvalidArgumentException('Given $productId as float, possible integer overflow. Try passing $productId as string')  ;
        }

        $uri = '/openapi/services/rest/catalog/v3/products/' . $productId;

        $obj = new ResponseFactory();
        return $obj->createProductResponse($this->call($uri));
    }

    /**
     * Prepare headers, compose url and make a call
     * @param $url
     * @return \SimpleXMLElement
     * @throws \Exception
     */
    protected function call($url)
    {
        $scheme = 'https://';
        $host = 'openapi.bol.com';
        $content = '';
        $today = gmdate('D, d F Y H:i:s \G\M\T');
        $contentType =	'application/xml';

        $headers = array(
            'Content-type: ' . $contentType,
            'Host: ' . $host,
            'Content-length: ' . strlen($content),
            'X-OpenAPI-Authorization: ' . $this->getSignature($today, 'GET', $url, $contentType),
            'X-OpenAPI-Date: ' . $today,
        );
        if(!is_null($this->sessionId)) {
            $headers[] = 'X-OpenAPI-Session-ID: ' . $this->sessionId;
        }

        $response = $this->browser->get($scheme.$host.$url, $headers);
        if ($response->getStatusCode() === 503) {
            throw new BolException('Service Temporarily Unavailable', 503);
        }
        try{
            $xmlElement = new \SimpleXMLElement($response->getContent());
        } catch (\Exception $e) {
            throw new BolException('Error parsing the xml as SimpleXMLElement', null, $e);
        }
        if ($response->getStatusCode() !== 200) {
            throw new BolException($xmlElement->Status . ': ' . $xmlElement->Message, $response->getStatusCode());
        }
        if (!in_array($xmlElement->getName(), array(
            'ListResultResponse',
            'SearchResultsResponse',
            'ProductResponse'
        ))) {
            throw new BolException('Invalid Xml result');
        }

        return $xmlElement;
    }

    /**
     * Format a signature for the X-OpenAPI-Authorization header
     * @param string $date
     * @param string $httpMethod
     * @param string $url
     * @param string $contentType
     * @return string formatted signature
     */
    protected function getSignature($date, $httpMethod, $url, $contentType)
    {
        $parsedUrl = parse_url($url);

   		$signature = $httpMethod . "\n\n";
   		$signature .= $contentType . "\n";
   		$signature .= $date."\n";
   		$signature .= "x-openapi-date:" . $date . "\n";
   		if(!is_null($this->sessionId)) {
   			$signature .= "x-openapi-session-id:" . $this->sessionId . "\n";
   		}
   		$signature .= $parsedUrl['path']."\n";

        if (isset($parsedUrl['query'])) {
            parse_str($parsedUrl['query'], $parsedQuery);
            ksort($parsedQuery);
            $queryParamsCount = count($parsedQuery);
            $i = 0;
            foreach ($parsedQuery as $key => $value) {
                $signature .= '&' . $key . '=' . $value;
                if (++$i < $queryParamsCount) {
                    $signature .= "\n";
                }
            }
        }

   		return $this->accessKey . ':' . base64_encode(hash_hmac('SHA256', $signature, $this->secretAccessKey, true));
   	}

    /**
     * Merges user options with default options
     * Also casts boolean options to string ('true', 'false')
     * @param array $defaulOptions
     * @param array $options
     * @return array merged options
     */
    protected function mergeOptions(array $defaulOptions, array $options = null)
    {
        if (is_null($options)) {
            $options = $defaulOptions;
        }

        foreach ($defaulOptions as $key => $value) {
            if (!isset($options[$key])) {
                $options[$key] = $value;
            }
            if (is_bool($options[$key])) {
                $options[$key] = ($options[$key]) ? 'true' : 'false';
            }
        }

        return $options;
    }
}