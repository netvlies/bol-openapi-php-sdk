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

class ProductListType
{
    /**
     * Top selling products
     */
    const TOPLIST_DEFAULT = 'toplist_default';

    /**
     * Top selling products overall
     */
    const TOPLIST_OVERALL = 'toplist_overall';

    /**
     * Top selling products last week
     */
    const TOPLIST_LAST_WEEK = 'toplist_last_week';

    /**
     * Top selling products two months
     */
    const TOPLIST_LAST_TWO_MONTHS = 'toplist_last_two_months';

    /**
     * New products
     */
    const IS_NEW = 'new';

    /**
     * Pre-orderable products
     */
    const PREORDER = 'preorder';
}