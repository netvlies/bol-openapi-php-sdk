<?php
/*
 * This file is part of the BolOpenApi PHP SDK.
 *
 * (c) Netvlies Internetdiensten
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BolOpenApi\Factory;

use BolOpenApi\Exception;
use BolOpenApi\Response\AbstractCollectionResponse;
use BolOpenApi\Response\ListResultsResponse;
use BolOpenApi\Response\ProductResponse;
use BolOpenApi\Response\SearchResultsResponse;

class ResponseFactory
{
    /**
     * @var \BolOpenApi\Factory\ModelFactory
     */
    protected $modelFactory;

    public function __construct()
    {
        $this->modelFactory = new ModelFactory();
    }

    /**
     * @param \SimpleXMLElement $xmlElement
     * @return \BolOpenApi\Response\ListResultsResponse
     * @throws \BolOpenApi\Exception
     */
    public function createListResultsResponse(\SimpleXMLElement $xmlElement)
    {
        if ($xmlElement->getName() != 'ListResultResponse') {
            throw new Exception('Invalid XML element, expected ListResultResponse but got "'.$xmlElement->getName().'"');
        }

        $listResultsResponse = new ListResultsResponse();
        $this->mapAbstractCollectionResponse($listResultsResponse, $xmlElement);

        return $listResultsResponse;
    }

    /**
     * @param \SimpleXMLElement $xmlElement
     * @return \BolOpenApi\Response\SearchResultsResponse
     * @throws \BolOpenApi\Exception
     */
    public function createSearchResultsResponse(\SimpleXMLElement $xmlElement)
    {
        if ($xmlElement->getName() != 'SearchResultsResponse') {
            throw new Exception('Invalid XML element, expected SearchResultsResponse but got "'.$xmlElement->getName().'"');
        }

        $searchResultsResponse = new SearchResultsResponse();
        $this->mapAbstractCollectionResponse($searchResultsResponse, $xmlElement);

        return $searchResultsResponse;
    }

    /**
     * @param \SimpleXMLElement $xmlElement
     * @return \BolOpenApi\Response\ProductResponse
     * @throws \BolOpenApi\Exception
     */
    public function createProductResponse(\SimpleXMLElement $xmlElement)
    {
        if ($xmlElement->getName() != 'ProductResponse') {
            throw new Exception('Invalid XML element, expected ProductResponse but got "'.$xmlElement->getName().'"');
        }

        $productResponse = new ProductResponse();
        $productResponse->setSessionId((string) $xmlElement->SessionId);
        $productResponse->setProduct($this->modelFactory->createProduct($xmlElement->Product));

        return $productResponse;
    }

    /**
     * @param \BolOpenApi\Response\AbstractCollectionResponse $abstractCollectionResponse
     * @param \SimpleXMLElement $xmlElement
     */
    protected function mapAbstractCollectionResponse(AbstractCollectionResponse $abstractCollectionResponse, \SimpleXMLElement $xmlElement)
    {
        foreach ($xmlElement->children() as $child) {
            if($child->getName() == 'Product') {
                $abstractCollectionResponse->addProduct($this->modelFactory->createProduct($child));
            } elseif($child->getName() == 'Category') {
                $abstractCollectionResponse->addCategory($this->modelFactory->createCategory($child));
            } elseif($child->getName() == 'RefinementGroup') {
                $abstractCollectionResponse->addRefinementGroup($this->modelFactory->createRefinementGroup($child));
            } elseif($child->getName() == 'OriginalRequest') {
                $abstractCollectionResponse->setOriginalRequest($this->modelFactory->createOriginalRequest($child));
            } elseif($child->getName() == 'SessionId') {
                $abstractCollectionResponse->setSessionId((string) $xmlElement->SessionId);
            } elseif($child->getName() == 'TotalResultSize') {
                $abstractCollectionResponse->setTotalResultSize((string) $xmlElement->TotalResultSize);
            }
        }
    }
}