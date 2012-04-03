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

class Music extends Product
{
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
    protected $import;

    /**
     * @var string
     */
    protected $NumberOfPieces;

    /**
     * @var \BolOpenApi\Model\Entity[]
     */
    protected $artists;

    /**
     * @param string $NumberOfPieces
     */
    public function setNumberOfPieces($NumberOfPieces)
    {
        $this->NumberOfPieces = $NumberOfPieces;
    }

    /**
     * @return string
     */
    public function getNumberOfPieces()
    {
        return $this->NumberOfPieces;
    }

    /**
     * @param \BolOpenApi\Model\Entity
     */
    public function addArtist(\BolOpenApi\Model\Entity $artist)
    {
        $this->artists[] = $artist;
    }

    /**
     * @param array $artists
     */
    public function setArtists(array $artists)
    {
        $this->artists = $artists;
    }

    /**
     * @return \BolOpenApi\Model\Entity[]
     */
    public function getArtists()
    {
        return $this->artists;
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
     * @param string $import
     */
    public function setImport($import)
    {
        $this->import = $import;
    }

    /**
     * @return string
     */
    public function getImport()
    {
        return $this->import;
    }
}