<?php
/*
 * This file is part of the BolOpenApi PHP SDK.
 *
 * (c) Netvlies Internetdiensten
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BolOpenApi\Response;

use BolOpenApi\Model\Product;

class ProductResponse extends AbstractResponse
{
    protected $product;

    /**
     * @param \BolOpenApi\Model\Product $product
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @return \BolOpenApi\Model\Product
     */
    public function getProduct()
    {
        return $this->product;
    }
}