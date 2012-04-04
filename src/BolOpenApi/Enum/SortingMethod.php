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

class SortingMethod
{
    /**
     * Sort on sales ranking
     */
    const SALES_RANKING = 'sales_ranking';

    /**
     * Sort on price
     */
    const PRICE = 'price';

    /**
     * Sort on title
     */
    const TITLE = 'title';

    /**
     * Sort on publishing date
     */
    const PUBLISHING_DATE = 'publishing_date';

    /**
     * Sort on rating
     */
    const CUSTOMER_RATING = 'customer_rating';
}