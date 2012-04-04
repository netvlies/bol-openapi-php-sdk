<?php

/*
 * This file is part of the BolOpenApi PHP SDK.
 *
 * (c) Netvlies Internetdiensten
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BolOpenApi\Enum;

class OfferStateType
{
    /**
     * New products, as opposed to 2nd hand.
     */
    const IS_NEW = 'nieuw';

    /**
     * like new, for 2nd hand offers
     */
    const LIKE_NEW = 'als nieuw';

    /**
     * good quality, for 2nd hand offers
     */
    const GOOD = 'goed';

    /**
     * reasonable quality, for 2nd hand offers
     */
    const REASONABLE = 'redelijk';

    /**
     * low quality, for 2nd hand offers
     */
    const LOW = 'matig';
}