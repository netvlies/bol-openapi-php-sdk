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

use BolOpenApi\Model\Images;
use BolOpenApi\Model\Offers;
use BolOpenApi\Model\Urls;

// @todo implement attributes
class Product
{
    protected $id;
    protected $title;
    protected $subtitle;
    protected $type;
    protected $publisher;
    protected $shortDescription;
    protected $longDescription;
    protected $releaseDate;
    protected $ean;
    protected $rating;
    protected $edition;
    protected $offers;
    protected $urls;
    protected $images;
    protected $attributes;
    protected $promotions;

    /**
     * @param $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param string $ean
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
    }

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param string $edition
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;
    }

    /**
     * @return string
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param \BolOpenApi\Model\Images $images
     */
    public function setImages(Images $images)
    {
        $this->images = $images;
    }

    /**
     * @return \BolOpenApi\Model\Images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param string $longDescription
     */
    public function setLongDescription($longDescription)
    {
        $this->longDescription = $longDescription;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * @param \BolOpenApi\Model\Offers $offers
     */
    public function setOffers(Offers $offers)
    {
        $this->offers = $offers;
    }

    /**
     * @return \BolOpenApi\Model\Offers
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param $promotions
     */
    public function setPromotions($promotions)
    {
        $this->promotions = $promotions;
    }

    /**
     * @return mixed
     */
    public function getPromotions()
    {
        return $this->promotions;
    }

    /**
     * @param string $publisher
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * @return string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param int $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return int Average product rating, scale of 0 – 50, representing 0 to 5 stars
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param string $releaseDate
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return string
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param string $shortDescription
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * @param string $subtitle
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \BolOpenApi\Model\Urls $urls
     */
    public function setUrls(Urls $urls)
    {
        $this->urls = $urls;
    }

    /**
     * @return \BolOpenApi\Model\Urls
     */
    public function getUrls()
    {
        return $this->urls;
    }
}