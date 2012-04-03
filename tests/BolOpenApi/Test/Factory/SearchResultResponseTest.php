<?php
/*
 * This file is part of the BolOpenApi PHP SDK.
 *
 * (c) Netvlies Internetdiensten
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BolOpenApi\Tests\Model;

use BolOpenApi\Factory\ResponseFactory;

class SearchResultsResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \BolOpenApi\Response\SearchResultsResponse
     */
    private $searchResultsResponse;

    public function setUp()
    {
        $simpleXmlElement = new \SimpleXMLElement(__DIR__.'/../../../../fixtures/search_results_response.xml', 0 , true);
        $factory = new ResponseFactory();
        $this->searchResultsResponse = $factory->createSearchResultsResponse($simpleXmlElement);
    }

    public function testIsSearchResultsResponse()
    {
        $this->assertTrue($this->searchResultsResponse instanceof \BolOpenApi\Response\SearchResultsResponse);
    }

    public function testIsValid()
    {
        $categories = $this->searchResultsResponse->getCategories();
        $products = $this->searchResultsResponse->getProducts();
        $refinementGroups = $this->searchResultsResponse->getRefinementGroups();

        $this->assertTrue(count($categories) === 3);
        $this->assertTrue(array_shift($categories) instanceof \BolOpenApi\Model\Category);
        $this->assertTrue($this->searchResultsResponse->getOriginalRequest() instanceof \BolOpenApi\Model\OriginalRequest);
        $this->assertTrue(count($products) === 5);
        $this->assertTrue(array_shift($products) instanceof \BolOpenApi\Model\Product);
        $this->assertTrue(count($refinementGroups) === 4);
        $this->assertTrue(array_shift($refinementGroups) instanceof \BolOpenApi\Model\RefinementGroup);
        $this->assertEquals($this->searchResultsResponse->getTotalResultSize(), 113);
        $this->assertEquals($this->searchResultsResponse->getSessionId(), '0DD6ACF0-780A-4F05-84A7-076F5C689BC2');
    }
}