<?php

/*
 * This file is part of the BolOpenApi PHP SDK.
 *
 * (c) Netvlies Internetdiensten
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BolOpenApi\Test;

use BolOpenApi\Client;
use Buzz\Browser;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
      * @var \BolOpenApi\Client
      */
    private $bolApi;

    public function setUp()
    {
        // bol.com sample data, do not use in your own application. Request your own keys: https://developers.bolCom.com/inloggen/?action=register
        $this->bolApi = new Client('B19C17EF61514343B1780F0C520E260B', 'EADBE4CDF75C8F5C6E69246806BB6255B23F4C0206EEFE370A6AE92BBDD42C3E11627F23825935DEBC65F25A1B782F20E6B735C020A9B5CDA81A398BAB80C3D3A91CE3CDEECFCA28A867C0CA45F78201FE8B5C45BC88F37A7737AC2CEC105B3A6A44DD54CD22FF0BC5C29E140ADD4A41F6CED232C9BDF02C744BEE863CAE74FE', new \Buzz\Browser());
    }

    public function testPing()
    {
        $response = $this->bolApi->ping();
        $this->assertEquals($response->getStatusCode(), 200);
    }

    /**
     * @depends testPing
     * @expectedException           InvalidArgumentException
     * @expectedExceptionMessage    integer overflow
     */
    public function testProductsIntegerOverflow()
    {
        $this->bolApi->products(10000000000000000000000000000000000);
    }

    /**
     * @depends testPing
     * @expectedException           BolOpenApi\Exception
     * @expectedExceptionMessage    InvalidAccessKeyId
     * @expectedExceptionCode       403
     */
    public function testApiWithInvalidKeys()
    {
        $invalidBolApi = new Client('a', 'b', new Browser());
        $invalidBolApi->products('1');
    }

    /**
     * @depends testPing
     * @expectedException           BolOpenApi\Exception
     * @expectedExceptionMessage    UnknownProduct
     * @expectedExceptionCode       404
     */
    public function testInvalidProduct()
    {
        $this->bolApi->products('1');
    }

    /**
     * @depends testPing
     */
    public function testValidProduct()
    {
        $productResponse = $this->bolApi->products('1001004011586273');
        $this->assertTrue($productResponse instanceof \BolOpenApi\Response\ProductResponse);
    }

    /**
     * @depends testPing
     * @expectedException           BolOpenApi\Exception
     * @expectedExceptionMessage    SearchResultsEmpty
     * @expectedExceptionCode       404
     */
    public function testInvalidSearchResults()
    {
        $this->bolApi->searchResults('nsjkabfisdaufbsdiuabfsdi8fhsiduahf98sdayfisdhafhsdail');
    }

    /**
     * @depends testPing
     */
    public function testValidSearchResults()
    {
     $searchResults = $this->bolApi->searchResults('php');
     $this->assertTrue($searchResults instanceof \BolOpenApi\Response\SearchResultsResponse);
    }

    /**
     * @depends testPing
     * @expectedException           BolOpenApi\Exception
     * @expectedExceptionMessage    InvalidRequest
     * @expectedExceptionCode       400
     */
    public function testInvalidListResults()
    {
        $this->bolApi->listResults('nsjkabfisdaufbsdiuabfsdi8fhsiduahf98sdayfisdhafhsdail', '789456123aaaaaaa');
    }

    /**
     * @depends testPing
     * @expectedException           BolOpenApi\Exception
     * @expectedExceptionMessage    Error parsing the xml as SimpleXMLElement
     */
    public function testInvalidXmlListResults()
    {
        $this->bolApi->listResults('', '');
    }

    /**
     * @depends testPing
     */
    public function testValidListResults()
    {
        $listResults = $this->bolApi->listResults('toplist_default', '10462');
        $this->assertTrue($listResults instanceof \BolOpenApi\Response\ListResultsResponse);
    }
}