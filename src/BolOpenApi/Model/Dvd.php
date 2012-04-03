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

class Dvd extends Product
{
    /**
     * @var \BolOpenApi\Model\Entity[]
     */
    protected $actors;

    /**
     * @var \BolOpenApi\Model\Entity[]
     */
    protected $directors;

    /**
     * @var string
     */
    protected $formatDescription;

    /**
     * @var string
     */
    protected $formatCode;

    /**
     * @var int
     */
    protected $recommendedMinAge;

    /**
     * @var string
     */
    protected $numberOfPieces;

    /**
     * @var boolean
     */
    protected $bluRay;

    /**
     * @param \BolOpenApi\Model\Entity
     */
    public function addActor(\BolOpenApi\Model\Entity $actor)
    {
        $this->actors[] = $actor;
    }

    /**
     * @param array $actors
     */
    public function setActors(array $actors)
    {
        $this->actors = $actors;
    }

    /**
     * @return \BolOpenApi\Model\Entity[]
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param boolean $bluRay
     */
    public function setBluRay($bluRay)
    {
        $this->bluRay = $bluRay;
    }

    /**
     * @return boolean
     */
    public function getBluRay()
    {
        return $this->bluRay;
    }

    /**
     * @param \BolOpenApi\Model\Entity
     */
    public function addDirector(\BolOpenApi\Model\Entity $director)
    {
        $this->directors[] = $director;
    }

    /**
     * @param array $directors
     */
    public function setDirectors(array $directors)
    {
        $this->directors = $directors;
    }

    /**
     * @return \BolOpenApi\Model\Entity[]
     */
    public function getDirectors()
    {
        return $this->directors;
    }

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
     * @param string $numberOfPieces
     */
    public function setNumberOfPieces($numberOfPieces)
    {
        $this->numberOfPieces = $numberOfPieces;
    }

    /**
     * @return string
     */
    public function getNumberOfPieces()
    {
        return $this->numberOfPieces;
    }

    /**
     * @param int $recommendedMinAge
     */
    public function setRecommendedMinAge($recommendedMinAge)
    {
        $this->recommendedMinAge = $recommendedMinAge;
    }

    /**
     * @return int
     */
    public function getRecommendedMinAge()
    {
        return $this->recommendedMinAge;
    }
}