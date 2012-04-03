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

class Computer extends Product
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @var string
     */
    protected $manufacturerProductNumber;

    /**
     * @var string
     */
    protected $manufacturer;

    /**
     * @var string
     */
    protected $processor;

    /**
     * @var string
     */
    protected $internalMemory;

    /**
     * @var string
     */
    protected $storageCapacity;

    /**
     * @var string
     */
    protected $operatingSystem;

    /**
     * @var string
     */
    protected $displayDiameter;

    /**
     * @var string
     */
    protected $platformCode;

    /**
     * @var string
     */
    protected $platformDescription;

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $displayDiameter
     */
    public function setDisplayDiameter($displayDiameter)
    {
        $this->displayDiameter = $displayDiameter;
    }

    /**
     * @return string
     */
    public function getDisplayDiameter()
    {
        return $this->displayDiameter;
    }

    /**
     * @param string $internalMemory
     */
    public function setInternalMemory($internalMemory)
    {
        $this->internalMemory = $internalMemory;
    }

    /**
     * @return string
     */
    public function getInternalMemory()
    {
        return $this->internalMemory;
    }

    /**
     * @param string $manufacturer
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param string $manufacturerProductNumer
     */
    public function setManufacturerProductNumber($manufacturerProductNumer)
    {
        $this->manufacturerProductNumber = $manufacturerProductNumer;
    }

    /**
     * @return string
     */
    public function getManufacturerProductNumber()
    {
        return $this->manufacturerProductNumber;
    }

    /**
     * @param string $operatingSystem
     */
    public function setOperatingSystem($operatingSystem)
    {
        $this->operatingSystem = $operatingSystem;
    }

    /**
     * @return string
     */
    public function getOperatingSystem()
    {
        return $this->operatingSystem;
    }

    /**
     * @param string $platformCode
     */
    public function setPlatformCode($platformCode)
    {
        $this->platformCode = $platformCode;
    }

    /**
     * @return string
     */
    public function getPlatformCode()
    {
        return $this->platformCode;
    }

    /**
     * @param string $platformDescription
     */
    public function setPlatformDescription($platformDescription)
    {
        $this->platformDescription = $platformDescription;
    }

    /**
     * @return string
     */
    public function getPlatformDescription()
    {
        return $this->platformDescription;
    }

    /**
     * @param string $processor
     */
    public function setProcessor($processor)
    {
        $this->processor = $processor;
    }

    /**
     * @return string
     */
    public function getProcessor()
    {
        return $this->processor;
    }

    /**
     * @param string $storageCapacity
     */
    public function setStorageCapacity($storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * @return string
     */
    public function getStorageCapacity()
    {
        return $this->storageCapacity;
    }
}