<?php

namespace Zortje\Rules;

use Zortje\Rules\Common\Collection;

/**
 * Class ResultCollection
 *
 * @package Zortje\Rules
 */
class ResultCollection extends Collection
{

    /**
     * @var Result[]
     */
    protected $collection = [];

    /**
     * Add RuleResult to collection
     *
     * @param Result $result
     */
    public function add(Result $result)
    {
        $this->collection[] = $result;
    }

    /**
     * Merge into this collection
     *
     * @param ResultCollection $resultCollection
     */
    public function merge(ResultCollection $resultCollection)
    {
        foreach ($resultCollection as $result) {
            $this->add($result);
        }
    }
}
