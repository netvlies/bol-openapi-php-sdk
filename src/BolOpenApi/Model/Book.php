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

class Book extends Product
{
    /**
     * @var string 
     */
    protected $bindingCode;

    /**
     * @var string
     */
    protected $bindingDescription;

    /**
     * @var string
     */
    protected $languageCode;

    /**
     * @var string
     */
    protected $languageDescription;

    /**
     * @var \BolOpenApi\Model\Entity[]
     */
    protected $authors;

    /**
     * @var int
     */
    protected $pageCount;

    /**
     * @var int
     */
    protected $fileSize;

    /**
     * @var string
     */
    protected $compatibility;

    /**
     * @var string
     */
    protected $copyright;

    /**
     * @var string
     */
    protected $printingRestrictions;

    /**
     * @param \BolOpenApi\Model\Entity
     */
    public function addAuthor(\BolOpenApi\Model\Entity $author)
    {
        $this->authors[] = $author;
    }

    /**
     * @param array $authors
     */
    public function setAuthors(array $authors)
    {
        $this->authors = $authors;
    }

    /**
     * @return \BolOpenApi\Model\Entity[]
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * @param string $bindingCode
     */
    public function setBindingCode($bindingCode)
    {
        $this->bindingCode = $bindingCode;
    }

    /**
     * @return string
     */
    public function getBindingCode()
    {
        return $this->bindingCode;
    }

    /**
     * @param string $bindingDescription
     */
    public function setBindingDescription($bindingDescription)
    {
        $this->bindingDescription = $bindingDescription;
    }

    /**
     * @return string
     */
    public function getBindingDescription()
    {
        return $this->bindingDescription;
    }

    /**
     * @param string $compatibility
     */
    public function setCompatibility($compatibility)
    {
        $this->compatibility = $compatibility;
    }

    /**
     * @return string
     */
    public function getCompatibility()
    {
        return $this->compatibility;
    }

    /**
     * @param string $copyright
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
    }

    /**
     * @return string
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * @param int $fileSize
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param string $languageCode
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * @param string $languageDescription
     */
    public function setLanguageDescription($languageDescription)
    {
        $this->languageDescription = $languageDescription;
    }

    /**
     * @return string
     */
    public function getLanguageDescription()
    {
        return $this->languageDescription;
    }

    /**
     * @param int $pageCount
     */
    public function setPageCount($pageCount)
    {
        $this->pageCount = $pageCount;
    }

    /**
     * @return int
     */
    public function getPageCount()
    {
        return $this->pageCount;
    }

    /**
     * @param string $printingRestrictions
     */
    public function setPrintingRestrictions($printingRestrictions)
    {
        $this->printingRestrictions = $printingRestrictions;
    }

    /**
     * @return string
     */
    public function getPrintingRestrictions()
    {
        return $this->printingRestrictions;
    }
}