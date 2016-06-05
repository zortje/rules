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
     * @param Result $ruleResult
     */
    public function add(Result $ruleResult)
    {
        $this->collection[] = $ruleResult;
    }

    /**
     * Merge into this collection
     *
     * @param ResultCollection $ruleResultCollection
     */
    public function merge(ResultCollection $ruleResultCollection)
    {
        foreach ($ruleResultCollection as $ruleResult) {
            $this->add($ruleResult);
        }
    }
}
