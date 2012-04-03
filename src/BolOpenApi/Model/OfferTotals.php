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

class OfferTotals
{
    protected $bolCom;
    protected $secondHand;
    protected $plaza;

    /**
     * @param int $bol
     */
    public function setBolCom($bol)
    {
        $this->bolCom = $bol;
    }

    /**
     * @return int
     */
    public function getBolCom()
    {
        return $this->bolCom;
    }

    /**
     * @param int $plaza
     */
    public function setPlaza($plaza)
    {
        $this->plaza = $plaza;
    }

    /**
     * @return int
     */
    public function getPlaza()
    {
        return $this->plaza;
    }

    /**
     * @param int $secondHand
     */
    public function setSecondHand($secondHand)
    {
        $this->secondHand = $secondHand;
    }

    /**
     * @return int
     */
    public function getSecondHand()
    {
        return $this->secondHand;
    }
}