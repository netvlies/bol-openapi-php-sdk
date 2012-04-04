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

class ProductType
{
    /**
     * All books, including Dutch books, foreign books, ebooks
     */
    const BOOK = 'book';

    /**
     * All music, including CDs, LPs
     */
    const MUSIC = 'music';

    /**
     * All movies on DVD and Bluray
     */
    const DVD = 'dvd';

    /**
     * All toys, including Puzzles, board games, dolls, etc.
     */
    const TOY = 'toy';

    /**
     * Computer games
     */
    const GAME = 'game';

    /**
     * Computer related products, e.g., notebooks, desktops, sreens, printers
     */
    const COMPUTER = 'computer';

    /**
     * Electronical devices, e.g., photography, televisions, navigation, household appliances
     */
    const ELECTRONICS = 'electronics';
}