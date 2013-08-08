<?php
/*
 * This file is part of the BolOpenApi PHP SDK.
 *
 * (c) Netvlies Internetdiensten
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BolOpenApi\Factory;

use BolOpenApi\Model\Book;
use BolOpenApi\Model\Category;
use BolOpenApi\Model\Computer;
use BolOpenApi\Model\Dvd;
use BolOpenApi\Model\ElectronicDevice;
use BolOpenApi\Model\Entity;
use BolOpenApi\Model\Images;
use BolOpenApi\Model\Game;
use BolOpenApi\Model\Music;
use BolOpenApi\Model\Offer;
use BolOpenApi\Model\Offers;
use BolOpenApi\Model\OfferTotals;
use BolOpenApi\Model\OriginalRequest;
use BolOpenApi\Model\Product;
use BolOpenApi\Model\Refinement;
use BolOpenApi\Model\RefinementGroup;
use BolOpenApi\Model\Seller;
use BolOpenApi\Model\Toy;
use BolOpenApi\Model\Urls;

class ModelFactory
{
    /**
     * @param \SimpleXMLElement $xmlElement
     * @return \BolOpenApi\Factory\Game|\BolOpenApi\Model\Book|\BolOpenApi\Model\Computer|\BolOpenApi\Model\Dvd|\BolOpenApi\Model\ElectronicDevice|\BolOpenApi\Model\Music|\BolOpenApi\Model\Product|\BolOpenApi\Model\Toy
     */
    public function createProduct(\SimpleXMLElement $xmlElement)
    {
        //@todo promotions
        //@todo refactor switch, see ProductType enumerations
        switch($xmlElement->Type) {
            case 'book':
                $product = new Book();
                if (isset($xmlElement->Authors)) {
                    foreach ($xmlElement->Authors->children() as $child) {
                        $product->addAuthor($this->createEntity($child));
                    }
                }
                $product->setBindingCode((string) $xmlElement->BindingCode);
                $product->setBindingDescription((string) $xmlElement->BindingDescription);
                $product->setCompatibility((string) $xmlElement->Compatibility);
                $product->setCopyright((string) $xmlElement->Copyright);
                $product->setFileSize((string) $xmlElement->FileSize);
                $product->setLanguageCode((string) $xmlElement->LanguageCode);
                $product->setLanguageDescription((string) $xmlElement->LanguageDescription);
                $product->setPageCount((string) $xmlElement->PageCount);
                $product->setPrintingRestrictions((string) $xmlElement->PrintingRestrictions);
                break;

            case 'music':
                $product = new Music();
                $product->setNumberOfPieces((string) $xmlElement->NumberOfPieces);
                if (isset($xmlElement->Artists)) {
                    foreach ($xmlElement->Artists->children() as $child) {
                        $product->addArtist($this->createEntity($child));
                    }
                }
                $product->setFormatCode((string) $xmlElement->FormatCode);
                $product->setFormatDescription((string) $xmlElement->FormatDescription);
                $product->setImport((string) $xmlElement->Import);
                break;

            case 'computer':
                $product = new Computer();
                $product->setColor((string) $xmlElement->Color);
                $product->setDisplayDiameter((string) $xmlElement->DisplayDiameter);
                $product->setInternalMemory((string) $xmlElement->InternalMemory);
                $product->setManufacturer((string) $xmlElement->Manufacturer);
                $product->setManufacturerProductNumber((string) $xmlElement->ManufacturerProductNumber);
                $product->setOperatingSystem((string) $xmlElement->OperatingSystem);
                $product->setPlatformCode((string) $xmlElement->PlatformCode);
                $product->setPlatformDescription((string) $xmlElement->PlatformDescription);
                $product->setProcessor((string) $xmlElement->Processor);
                $product->setStorageCapacity((string) $xmlElement->StorageCapacity);
                break;

            case 'dvd':
                $product = new Dvd();
                if (isset($xmlElement->Actors)) {
                    foreach ($xmlElement->Actors->children() as $child) {
                        $product->addActor($this->createEntity($child));
                    }
                }
                $product->setBluRay((string) $xmlElement->BluRay);
                if (isset($xmlElement->Directors)) {
                    foreach ($xmlElement->Directors->children() as $child) {
                        $product->addDirector($this->createEntity($child));
                    }
                }
                $product->setFormatCode((string) $xmlElement->FormatCode);
                $product->setFormatDescription((string) $xmlElement->FormatDescription);
                $product->setNumberOfPieces((string) $xmlElement->NumberOfPieces);
                $product->setRecommendedMinAge((string) $xmlElement->RecommendedMinAge);
                break;

            case 'electronics':
                $product = new ElectronicDevice();
                $product->setAnalogTuner((string) $xmlElement->AnalogTuner);
                $product->setAudioFormats((string) $xmlElement->AudioFormats);
                $product->setBandwidth((string) $xmlElement->Bandwidth);
                $product->setBlueRay((string) $xmlElement->BlueRay);
                $product->setBluetooth((string) $xmlElement->Bluetooth);
                $product->setCamera((string) $xmlElement->Camera);
                $product->setColor((string) $xmlElement->Color);
                $product->setDigitalZoom((string) $xmlElement->DigitalZoom);
                $product->setDisplayDiameter((string) $xmlElement->DisplayDiameter);
                $product->setDisplayFullHd((string) $xmlElement->DisplayFullHd);
                $product->setDisplayResolution((string) $xmlElement->DisplayResolution);
                $product->setDts((string) $xmlElement->DTS);
                $product->setHdmiPorts((string) $xmlElement->HdmiPorts);
                $product->setLightSensitivityStandard((string) $xmlElement->LightSensitivityStandard);
                $product->setManufacturer((string) $xmlElement->Manufacturer);
                $product->setManufacturerProductNumber((string) $xmlElement->ManufacturerProductNumer);
                $product->setMaxPixels((string) $xmlElement->MaxPixels);
                $product->setMaxResolution((string) $xmlElement->MaxResolution);
                $product->setMaxWeight((string) $xmlElement->MaxWeight);
                $product->setMemoryCardTypes((string) $xmlElement->MemoryCardTypes);
                $product->setOperatingSystem((string) $xmlElement->OperatingSystem);
                $product->setOpticalZoom((string) $xmlElement->OpticalZoom);
                $product->setPorts((string) $xmlElement->Ports);
                $product->setProvider((string) $xmlElement->Provider);
                $product->setScreenTechnology((string) $xmlElement->ScreenTechnology);
                $product->setStorageCapacity((string) $xmlElement->StorageCapacity);
                $product->setStorageType((string) $xmlElement->StorageType);
                $product->setUmts((string) $xmlElement->Umts);
                $product->setWifi((string) $xmlElement->Wifi);
                $product->setWireLength((string) $xmlElement->WireLength);
                break;

            case 'toy':
                $product = new Toy();
                $product->setBrand((string) $xmlElement->Brand);
                $product->setColor((string) $xmlElement->Color);
                $product->setGenre((string) $xmlElement->Genre);
                $product->setMaxNrPlayers((string) $xmlElement->MaxNrPlayers);
                $product->setMinNrPlayers((string) $xmlElement->MinNrPlayers);
                $product->setNumberOfPieces((string) $xmlElement->NumberOfPieces);
                $product->setRecommendedMaxAge((string) $xmlElement->RecommendedMaxAge);
                $product->setRecommendedMinAge((string) $xmlElement->RecommendedMinAge);
                break;

            case 'game':
                $product = new Game();
                $product->setFormatCode((string) $xmlElement->FormatCode);
                $product->setFormatDescription((string) $xmlElement->FormatDescription);
                $product->setGenre((string) $xmlElement->Genre);
                $product->setManufacturer((string) $xmlElement->Manufacturer);
                $product->setOnlineOption((string) $xmlElement->OnlineOption);
                $product->setPlatformCode((string) $xmlElement->PlatformCode);
                $product->setPlatformDescription((string) $xmlElement->PlatformDescription);
                $product->setSystemRequirements((string) $xmlElement->SystemRequirements);
                $product->setTargetGroup((string) $xmlElement->TargetGroup);
                break;

            default:
                $product = new Product();
        }

        $product->setId((string) $xmlElement->Id);
        $product->setTitle((string) $xmlElement->Title);
        $product->setSubtitle((string) $xmlElement->Subtitle);
        $product->setType((string) $xmlElement->Type);
        $product->setPublisher((string) $xmlElement->Publisher);
        $product->setShortDescription((string) $xmlElement->ShortDescription);
        $product->setLongDescription((string) $xmlElement->LongDescription);
        $product->setReleaseDate((string) $xmlElement->ReleaseDate);
        $product->setEan((string) $xmlElement->Ean);
        $product->setRating((string) $xmlElement->Rating);
        $product->setEdition((string) $xmlElement->Edition);

        $product->setOffers($this->createOffers($xmlElement->Offers));

        $urls = new Urls($xmlElement->Urls);
        $product->setUrls($urls);

        $images = new Images($xmlElement->Images);
        $product->setImages($images);

        return $product;
    }

    /**
     * @param \SimpleXMLElement $xmlElement
     * @return \BolOpenApi\Model\Offers
     */
    public function createOffers(\SimpleXMLElement $xmlElement)
    {
        $offers = new Offers();

        if (!isset($xmlElement) || $xmlElement->count() <= 0) {
            return $offers;
        }

        foreach ($xmlElement->children() as $child) {
            if ($child->getName() == 'Offer') {
                $offers->addOffer($this->createOffer($child));
            }
            if ($child->getName() == 'OfferTotals') {
                $offers->setOfferTotals($this->createOfferTotals($child));
            }
        }

        return $offers;
    }

    /**
     * @param \SimpleXMLElement $xmlElement
     * @return \BolOpenApi\Model\Offer
     */
    public function createOffer(\SimpleXMLElement $xmlElement)
    {
        $offer = new Offer();
        $offer->setId((string) $xmlElement->Id);
        $offer->setFirstEdition((string) $xmlElement->FirstEdition);
        $offer->setSpecialEdition((string) $xmlElement->SpecialEdition);
        $offer->setState((string) $xmlElement->State);
        $offer->setPrice((string) $xmlElement->Price);
        $offer->setListPrice((string) $xmlElement->ListPrice);
        $offer->setAvailabilityCode((string) $xmlElement->AvailabilityCode);
        $offer->setAvailabilityDescription((string) $xmlElement->AvailabilityDescription);
        $offer->setComment((string) $xmlElement->Comment);
        $offer->setSecondHand((string) $xmlElement->SecondHand);
        $offer->setSeller($this->createSeller($xmlElement->Seller));

        return $offer;
    }

    /**
     * @param \SimpleXMLElement $xmlElement
     * @return \BolOpenApi\Model\OfferTotals
     */
    public function createOfferTotals(\SimpleXMLElement $xmlElement)
    {
        $offerTotals = new OfferTotals();
        $offerTotals->setBolCom((string) $xmlElement->{"Bol.com"});
        $offerTotals->setPlaza((string) $xmlElement->Plaza);
        $offerTotals->setSecondHand((string) $xmlElement->SecondHand);

        return $offerTotals;
    }

    /**
     * @param \SimpleXMLElement $xmlElement
     * @return \BolOpenApi\Model\Category
     */
    public function createCategory(\SimpleXMLElement $xmlElement)
    {
        $category = new Category();
        $category->setId((string) $xmlElement->Id);
        $category->setName((string) $xmlElement->Name);
        $category->setProductCount((string) $xmlElement->ProductCount);

        return $category;
    }

    /**
     * @param \SimpleXMLElement $xmlElement
     * @return \BolOpenApi\Model\Seller
     */
    public function createSeller(\SimpleXMLElement $xmlElement)
    {
        $seller = new Seller();
        $seller->setId((string) $xmlElement->Id);
        $seller->setDisplayName((string) $xmlElement->DisplayName);
        $seller->setNumberOfReviews((string) $xmlElement->NumberOfReviews);
        $seller->setLogo((string) $xmlElement->Logo);
        $seller->setOverallRating((string) $xmlElement->OverallRating);
        $seller->setTermsUrl((string) $xmlElement->TermsUrl);
        $seller->setUrl((string) $xmlElement->Url);

        return $seller;
    }


    /**
     * @param \SimpleXMLElement $xmlElement
     * @return \BolOpenApi\Model\RefinementGroup
     */
    public function createRefinementGroup(\SimpleXMLElement $xmlElement)
    {
        $refinementGroup = new RefinementGroup();
        foreach ($xmlElement->children() as $child) {
            if($child->getName() == 'Id') {
                $refinementGroup->setId((string) $xmlElement->Id);
            } elseif($child->getName() == 'Name') {
                $refinementGroup->setName((string) $xmlElement->Name);
            } elseif($child->getName() == 'Refinement') {
                $refinementGroup->addRefinement($this->createRefinement($child));
            }
        }

        return $refinementGroup;
    }

    /**
     * @param \SimpleXMLElement $xmlElement
     * @return \BolOpenApi\Model\Refinement
     */
    public function createRefinement(\SimpleXMLElement $xmlElement)
    {
        $refinement = new Refinement();
        $refinement->setId((string) $xmlElement->Id);
        $refinement->setName((string) $xmlElement->Name);
        $refinement->setProductCount((string) $xmlElement->ProductCount);

        return $refinement;
    }

    /**
     * @param \SimpleXMLElement $xmlElement
     * @return \BolOpenApi\Model\OriginalRequest
     */
    public function createOriginalRequest(\SimpleXMLElement $xmlElement)
    {
        $request = new OriginalRequest();
        foreach ($xmlElement->children() as $child) {
            if($child->getName() == 'Category') {
                $request->setCategory($this->createCategory($child));
            } elseif($child->getName() == 'RefinementGroup') {
                $request->addRefinementGroups($this->createRefinementGroup($child));
            }
        }

        return $request;
    }

    /**
     * @param \SimpleXMLElement $xmlElement
     * @return \BolOpenApi\Model\Entity
     */
    public function createEntity(\SimpleXMLElement $xmlElement)
    {
        $entity = new Entity();
        $entity->setId((string) $xmlElement->Id);
        $entity->setName((string) $xmlElement->Name);

        return $entity;
    }
 }
