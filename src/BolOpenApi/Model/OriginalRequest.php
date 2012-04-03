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

use BolOpenApi\Model\Category;
use BolOpenApi\Model\RefinementGroup;

class OriginalRequest
{
    protected $category;
    protected $refinementGroups;

    /**
     * @param \BolOpenApi\Model\Category $category
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    /**
     * @return \BolOpenApi\Model\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param \BolOpenApi\Model\RefinementGroup $refinementGroup
     */
    public function addRefinementGroups(RefinementGroup $refinementGroup)
    {
        $this->refinementGroups[] = $refinementGroup;
    }

    /**
     * @param \BolOpenApi\Model\RefinementGroup $refinementGroups
     */
    public function setRefinementGroups($refinementGroups)
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
}