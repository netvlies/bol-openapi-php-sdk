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

class ElectronicDevice extends Product
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
    protected $provider;

    /**
     * @var string
     */
    protected $maxPixels;

    /**
     * @var string
     */
    protected $opticalZoom;

    /**
     * @var string
     */
    protected $digitalZoom;

    /**
     * @var string
     */
    protected $memoryCardTypes;

    /**
     * @var string
     */
    protected $storageType;

    /**
     * @var string
     */
    protected $storageCapacity;

    /**
     * @var string
     */
    protected $maxResolution;

    /**
     * @var string
     */
    protected $lightSensitivityStandard;

    /**
     * @var string
     */
    protected $operatingSystem;

    /**
     * @var string
     */
    protected $wifi;

    /**
     * @var string
     */
    protected $displayResolution;

    /**
     * @var string
     */
    protected $blueRay;

    /**
     * @var boolean
     */
    protected $dts;

    /**
     * @var string
     */
    protected $ports;

    /**
     * @var int
     */
    protected $hdmiPorts;

    /**
     * @var string
     */
    protected $audioFormats;

    /**
     * @var string
     */
    protected $screenTechnology;

    /**
     * @var string
     */
    protected $displayDiameter;

    /**
     * @var string
     */
    protected $analogTuner;

    /**
     * @var string
     */
    protected $wireLength;

    /**
     * @var string
     */
    protected $maxWeight;

    /**
     * @var string
     */
    protected $bandwidth;

    /**
     * @var string
     */
    protected $camera;

    /**
     * @var string
     */
    protected $bluetooth;

    /**
     * @var string
     */
    protected $umts;

    /**
     * @var string
     */
    protected $displayFullHd;

    /**
     * @param string $analogTuner
     */
    public function setAnalogTuner($analogTuner)
    {
        $this->analogTuner = $analogTuner;
    }

    /**
     * @return string
     */
    public function getAnalogTuner()
    {
        return $this->analogTuner;
    }

    /**
     * @param string $audioFormats
     */
    public function setAudioFormats($audioFormats)
    {
        $this->audioFormats = $audioFormats;
    }

    /**
     * @return string
     */
    public function getAudioFormats()
    {
        return $this->audioFormats;
    }

    /**
     * @param string $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->bandwidth = $bandwidth;
    }

    /**
     * @return string
     */
    public function getBandwidth()
    {
        return $this->bandwidth;
    }

    /**
     * @param string $blueRay
     */
    public function setBlueRay($blueRay)
    {
        $this->blueRay = $blueRay;
    }

    /**
     * @return string
     */
    public function getBlueRay()
    {
        return $this->blueRay;
    }

    /**
     * @param string $bluetooth
     */
    public function setBluetooth($bluetooth)
    {
        $this->bluetooth = $bluetooth;
    }

    /**
     * @return string
     */
    public function getBluetooth()
    {
        return $this->bluetooth;
    }

    /**
     * @param string $camera
     */
    public function setCamera($camera)
    {
        $this->camera = $camera;
    }

    /**
     * @return string
     */
    public function getCamera()
    {
        return $this->camera;
    }

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
     * @param string $digitalZoom
     */
    public function setDigitalZoom($digitalZoom)
    {
        $this->digitalZoom = $digitalZoom;
    }

    /**
     * @return string
     */
    public function getDigitalZoom()
    {
        return $this->digitalZoom;
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
     * @param string $displayFullHd
     */
    public function setDisplayFullHd($displayFullHd)
    {
        $this->displayFullHd = $displayFullHd;
    }

    /**
     * @return string
     */
    public function getDisplayFullHd()
    {
        return $this->displayFullHd;
    }

    /**
     * @param string $displayResolution
     */
    public function setDisplayResolution($displayResolution)
    {
        $this->displayResolution = $displayResolution;
    }

    /**
     * @return string
     */
    public function getDisplayResolution()
    {
        return $this->displayResolution;
    }

    /**
     * @param boolean $dts
     */
    public function setDts($dts)
    {
        $this->dts = $dts;
    }

    /**
     * @return boolean
     */
    public function getDts()
    {
        return $this->dts;
    }

    /**
     * @param int $hdmiPorts
     */
    public function setHdmiPorts($hdmiPorts)
    {
        $this->hdmiPorts = $hdmiPorts;
    }

    /**
     * @return int
     */
    public function getHdmiPorts()
    {
        return $this->hdmiPorts;
    }

    /**
     * @param string $lightSensitivityStandard
     */
    public function setLightSensitivityStandard($lightSensitivityStandard)
    {
        $this->lightSensitivityStandard = $lightSensitivityStandard;
    }

    /**
     * @return string
     */
    public function getLightSensitivityStandard()
    {
        return $this->lightSensitivityStandard;
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
     * @param string $manufacturerProductNumber
     */
    public function setManufacturerProductNumber($manufacturerProductNumber)
    {
        $this->manufacturerProductNumber = $manufacturerProductNumber;
    }

    /**
     * @return string
     */
    public function getManufacturerProductNumber()
    {
        return $this->manufacturerProductNumber;
    }

    /**
     * @param string $maxPixels
     */
    public function setMaxPixels($maxPixels)
    {
        $this->maxPixels = $maxPixels;
    }

    /**
     * @return string
     */
    public function getMaxPixels()
    {
        return $this->maxPixels;
    }

    /**
     * @param string $maxResolution
     */
    public function setMaxResolution($maxResolution)
    {
        $this->maxResolution = $maxResolution;
    }

    /**
     * @return string
     */
    public function getMaxResolution()
    {
        return $this->maxResolution;
    }

    /**
     * @param string $maxWeight
     */
    public function setMaxWeight($maxWeight)
    {
        $this->maxWeight = $maxWeight;
    }

    /**
     * @return string
     */
    public function getMaxWeight()
    {
        return $this->maxWeight;
    }

    /**
     * @param string $memoryCardTypes
     */
    public function setMemoryCardTypes($memoryCardTypes)
    {
        $this->memoryCardTypes = $memoryCardTypes;
    }

    /**
     * @return string
     */
    public function getMemoryCardTypes()
    {
        return $this->memoryCardTypes;
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
     * @param string $opticalZoom
     */
    public function setOpticalZoom($opticalZoom)
    {
        $this->opticalZoom = $opticalZoom;
    }

    /**
     * @return string
     */
    public function getOpticalZoom()
    {
        return $this->opticalZoom;
    }

    /**
     * @param string $ports
     */
    public function setPorts($ports)
    {
        $this->ports = $ports;
    }

    /**
     * @return string
     */
    public function getPorts()
    {
        return $this->ports;
    }

    /**
     * @param string $provider
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
    }

    /**
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param string $screenTechnology
     */
    public function setScreenTechnology($screenTechnology)
    {
        $this->screenTechnology = $screenTechnology;
    }

    /**
     * @return string
     */
    public function getScreenTechnology()
    {
        return $this->screenTechnology;
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

    /**
     * @param string $storageType
     */
    public function setStorageType($storageType)
    {
        $this->storageType = $storageType;
    }

    /**
     * @return string
     */
    public function getStorageType()
    {
        return $this->storageType;
    }

    /**
     * @param string $umts
     */
    public function setUmts($umts)
    {
        $this->umts = $umts;
    }

    /**
     * @return string
     */
    public function getUmts()
    {
        return $this->umts;
    }

    /**
     * @param string $wifi
     */
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;
    }

    /**
     * @return string
     */
    public function getWifi()
    {
        return $this->wifi;
    }

    /**
     * @param string $wireLength
     */
    public function setWireLength($wireLength)
    {
        $this->wireLength = $wireLength;
    }

    /**
     * @return string
     */
    public function getWireLength()
    {
        return $this->wireLength;
    }
}