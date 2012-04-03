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

use BolOpenApi\Model\Refinement;

class RefinementGroup
{
    protected $id;
    protected $name;
    protected $refinements;

    /**
     * @param int $id
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
     * @param string $name
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
     * @param \BolOpenApi\Model\Refinement $refinement
     */
    public function addRefinement(Refinement $refinement)
    {
        $this->refinements[] = $refinement;
    }

    /**
     * @param $refinements
     */
    public function setRefinements($refinements)
    {
        $this->refinements = $refinements;
    }

    /**
     * @return \BolOpenApi\Model\Refinement[]
     */
    public function getRefinements()
    {
        return $this->refinements;
    }
}