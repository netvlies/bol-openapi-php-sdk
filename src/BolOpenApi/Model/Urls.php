<?php
/*
 * This file is part of the BolOpenApi PHP SDK.
 *
 * (c) Netvlies Internetdiensten
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BolOpenApi\Model;

class Urls
{
    protected $main;

    public function __construct(\SimpleXMLElement $xmlElement)
    {
        $this->fromXml($xmlElement);
    }

    /**
     * @param string $main
     */
    public function setMain($main)
    {
        $this->main = $main;
    }

    /**
     * @return string
     */
    public function getMain()
    {
        return $this->main;
    }

    /**
     * @param \SimpleXMLElement $xmlElement
     */
    public function fromXml(\SimpleXMLElement $xmlElement)
    {
        $this->setMain((string) $xmlElement->Main);
    }
}