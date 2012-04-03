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

use Netvlies\Bundle\BolOpenApi\Bundle\CategoryRefinement;

// @todo categoryRefinement aren't mappend
class Category
{
    protected $id;
    protected $name;
    protected $categoryRefinements;
    protected $productCount;

    /**
     * @param \Netvlies\Bundle\BolOpenApi\Bundle\CategoryRefinement $categoryRefinement
     */
    public function addCategoryRefinements(CategoryRefinement $categoryRefinement)
    {
        $this->categoryRefinements[] = $categoryRefinement;
    }

    /**
     * @param array $categoryRefinements
     */
    public function setCategoryRefinements($categoryRefinements)
    {
        $this->categoryRefinements = $categoryRefinements;
    }

    /**
     * @return \Netvlies\Bundle\BolOpenApi\Bundle\CategoryRefinement[]
     */
    public function getCategoryRefinements()
    {
        return $this->categoryRefinements;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $productCount
     */
    public function setProductCount($productCount)
    {
        $this->productCount = $productCount;
    }

    /**
     * @return int
     */
    public function getProductCount()
    {
        return $this->productCount;
    }
}