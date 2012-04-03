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

class Game extends Product
{
    /**
     * @var string
     */
    protected $manufacturer;

    /**
     * @var string
     */
    protected $formatDescription;

    /**
     * @var string
     */
    protected $formatCode;

    /**
     * @var string
     */
    protected $platformCode;

    /**
     * @var string
     */
    protected $platformDescription;

    /**
     * @var string
     */
    protected $targetGroup;

    /**
     * @var string
     */
    protected $onlineOption;

    /**
     * @var string
     */
    protected $genre;

    /**
     * @var string
     */
    protected $systemRequirements;

    /**
     * @param string $formatCode
     */
    public function setFormatCode($formatCode)
    {
        $this->formatCode = $formatCode;
    }

    /**
     * @return string
     */
    public function getFormatCode()
    {
        return $this->formatCode;
    }

    /**
     * @param string $formatDescription
     */
    public function setFormatDescription($formatDescription)
    {
        $this->formatDescription = $formatDescription;
    }

    /**
     * @return string
     */
    public function getFormatDescription()
    {
        return $this->formatDescription;
    }

    /**
     * @param string $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
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
     * @param string $onlineOption
     */
    public function setOnlineOption($onlineOption)
    {
        $this->onlineOption = $onlineOption;
    }

    /**
     * @return string
     */
    public function getOnlineOption()
    {
        return $this->onlineOption;
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
     * @param string $systemRequirements
     */
    public function setSystemRequirements($systemRequirements)
    {
        $this->systemRequirements = $systemRequirements;
    }

    /**
     * @return string
     */
    public function getSystemRequirements()
    {
        return $this->systemRequirements;
    }

    /**
     * @param string $targetGroup
     */
    public function setTargetGroup($targetGroup)
    {
        $this->targetGroup = $targetGroup;
    }

    /**
     * @return string
     */
    public function getTargetGroup()
    {
        return $this->targetGroup;
    }
}