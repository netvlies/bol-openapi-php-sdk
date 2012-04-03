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

class Images
{
    protected $extraSmall;
    protected $small;
    protected $medium;
    protected $large;
    protected $extraLarge;

    public function __construct(\SimpleXMLElement $xmlElement)
    {
        $this->fromXml($xmlElement);
    }

    /**
     * @param $extraLarge
     */
    public function setExtraLarge($extraLarge)
    {
        $this->extraLarge = $extraLarge;
    }

    /**
     * @return string
     */
    public function getExtraLarge()
    {
        return $this->extraLarge;
    }

    /**
     * @param $extraSmall
     */
    public function setExtraSmall($extraSmall)
    {
        $this->extraSmall = $extraSmall;
    }

    /**
     * @return string
     */
    public function getExtraSmall()
    {
        return $this->extraSmall;
    }

    /**
     * @param $large
     */
    public function setLarge($large)
    {
        $this->large = $large;
    }

    /**
     * @return string
     */
    public function getLarge()
    {
        return $this->large;
    }

    /**
     * @param $medium
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;
    }

    /**
     * @return string
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * @param $small
     */
    public function setSmall($small)
    {
        $this->small = $small;
    }

    /**
     * @return string
     */
    public function getSmall()
    {
        return $this->small;
    }

    /**
     * @param \SimpleXMLElement $xmlElement
     */
    public function fromXml(\SimpleXMLElement $xmlElement)
    {
        $this->setExtraSmall((string) $xmlElement->ExtraSmall);
        $this->setSmall((string) $xmlElement->Small);
        $this->setMedium((string) $xmlElement->Medium);
        $this->setLarge((string) $xmlElement->Large);
        $this->setExtraLarge((string) $xmlElement->ExtraLarge);
    }
}