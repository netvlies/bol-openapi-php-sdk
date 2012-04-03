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

use BolOpenApi\Model\Category;
use BolOpenApi\Model\OriginalRequest;
use BolOpenApi\Model\Product;
use BolOpenApi\Model\RefinementGroup;

abstract class AbstractCollectionResponse extends AbstractResponse
{
    protected $products;
    protected $totalResultSize;
    protected $categories;
    protected $refinementGroups;
    protected $originalRequest;

    /**
     * @param \BolOpenApi\Model\Category $category
     */
    public function addCategory(Category $category)
    {
        $this->categories[] = $category;
    }

    /**
     * @param array $categories
     */
    public function setCategories(array $categories)
    {
        $this->categories = $categories;
    }

    /**
     * @return \BolOpenApi\Model\Category[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param \BolOpenApi\Model\OriginalRequest $originalRequest
     */
    public function setOriginalRequest(OriginalRequest $originalRequest)
    {
        $this->originalRequest = $originalRequest;
    }

    /**
     * @return \BolOpenApi\Model\OriginalRequest|null
     */
    public function getOriginalRequest()
    {
        return $this->originalRequest;
    }

    /**
     * @param \BolOpenApi\Model\Product $product
     */
    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    /**
     * @param array $products
     */
    public function setProducts(array $products)
    {
        $this->products = $products;
    }

    /**
     * @return \BolOpenApi\Model\Product[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param \BolOpenApi\Model\RefinementGroup $refinementGroup
     */
    public function addRefinementGroup(RefinementGroup $refinementGroup)
    {
        $this->refinementGroups[] = $refinementGroup;
    }

    /**
     * @param $refinementGroups
     */
    public function setRefinementGroups(array $refinementGroups)
    {
        $this->refinementGroups = $refinementGroups;
    }

    /**
     * @return \BolOpenApi\Model\RefinementGroup[]
     */
    public function getRefinementGroups()
    {
        return $this->refinementGroups;
    }


    /**
     * @param int $totalResultSize
     */
    public function setTotalResultSize($totalResultSize)
    {
        $this->totalResultSize = $totalResultSize;
    }

    /**
     * @return int
     */
    public function getTotalResultSize()
    {
        return $this->totalResultSize;
    }
}