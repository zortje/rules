<?php

namespace Zortje\Rules;

use Zortje\Rules\Common\Collection;

/**
 * Class RuleCollection
 *
 * @package Zortje\Rules
 */
class RuleCollection extends Collection
{

    /**
     * @var RuleInterface[]
     */
    protected $collection = [];

    /**
     * Add Rule to collection
     *
     * @param RuleInterface $rule
     */
    public function add(RuleInterface $rule)
    {
        $this->collection[] = $rule;
    }

    /**
     * Check all rules in collection
     *
     * @param Subject $subject
     *
     * @return ResultCollection
     */
    public function check(Subject $subject): ResultCollection
    {
        $resultCollection = new ResultCollection();

        foreach ($this->collection as $rule) {
            $resultCollection->merge($rule->check($subject));
        }

        return $resultCollection;
    }
}
