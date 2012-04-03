<?php

namespace BolOpenApi\Model;

class Seller
{
    protected $id;
    protected $displayName;
    protected $numberOfReviews;
    protected $overallRating;
    protected $termsUrl;
    protected $logo;
    protected $url;

    /**
     * @param string $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
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
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param int $numberOfReviews
     */
    public function setNumberOfReviews($numberOfReviews)
    {
        $this->numberOfReviews = $numberOfReviews;
    }

    /**
     * @return int
     */
    public function getNumberOfReviews()
    {
        return $this->numberOfReviews;
    }

    /**
     * @param int $overallRating
     */
    public function setOverallRating($overallRating)
    {
        $this->overallRating = $overallRating;
    }

    /**
     * @return int
     */
    public function getOverallRating()
    {
        return $this->overallRating;
    }

    /**
     * @param string $termsUrl
     */
    public function setTermsUrl($termsUrl)
    {
        $this->termsUrl = $termsUrl;
    }

    /**
     * @return string
     */
    public function getTermsUrl()
    {
        return $this->termsUrl;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}