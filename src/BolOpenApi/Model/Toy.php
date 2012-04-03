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

class Toy extends Product
{
    /**
     * @var string
     */
    protected $brand;

    /**
     * @var int
     */
    protected $recommendedMinAge;

    /**
     * @var int
     */
    protected $recommendedMaxAge;

    /**
     * @var int
     */
    protected $minNrPlayers;

    /**
     * @var int
     */
    protected $maxNrPlayers;

    /**
     * @var string
     */
    protected $color;

    /**
     * @var string
     */
    protected $genre;

    /**
     * @var int
     */
    protected $numberOfPieces;

    /**
     * @param string $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
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
     * @param int $maxNrPlayers
     */
    public function setMaxNrPlayers($maxNrPlayers)
    {
        $this->maxNrPlayers = $maxNrPlayers;
    }

    /**
     * @return int
     */
    public function getMaxNrPlayers()
    {
        return $this->maxNrPlayers;
    }

    /**
     * @param int $minNrPlayers
     */
    public function setMinNrPlayers($minNrPlayers)
    {
        $this->minNrPlayers = $minNrPlayers;
    }

    /**
     * @return int
     */
    public function getMinNrPlayers()
    {
        return $this->minNrPlayers;
    }

    /**
     * @param int $numberOfPieces
     */
    public function setNumberOfPieces($numberOfPieces)
    {
        $this->numberOfPieces = $numberOfPieces;
    }

    /**
     * @return int
     */
    public function getNumberOfPieces()
    {
        return $this->numberOfPieces;
    }

    /**
     * @param int $recommendedMaxAge
     */
    public function setRecommendedMaxAge($recommendedMaxAge)
    {
        $this->recommendedMaxAge = $recommendedMaxAge;
    }

    /**
     * @return int
     */
    public function getRecommendedMaxAge()
    {
        return $this->recommendedMaxAge;
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