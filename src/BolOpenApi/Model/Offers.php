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

use BolOpenApi\Model\Offer;
use BolOpenApi\Model\OfferTotals;

class Offers
{
    protected $offers;
    protected $offerTotals;

    /**
     * @param \BolOpenApi\Model\Offer $offer
     */
    public function addOffer(Offer $offer)
    {
        $this->offers[] = $offer;
    }

    /**
     * @param array $offers
     */
    public function setOffers(array $offers)
    {
        $this->offers = $offers;
    }

    /**
     * @return \BolOpenApi\Model\Offer[]
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \BolOpenApi\Model\OfferTotals $offerTotals
     */
    public function setOfferTotals(OfferTotals $offerTotals)
    {
        $this->offerTotals = $offerTotals;
    }

    /**
     * @return \BolOpenApi\Model\OfferTotals
     */
    public function getOfferTotals()
    {
        return $this->offerTotals;
    }
}