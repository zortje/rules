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
     * @param Subject $ruleSubject
     *
     * @return ResultCollection
     */
    public function check(Subject $ruleSubject): ResultCollection
    {
        $ruleResultCollection = new ResultCollection();

        foreach ($this->collection as $rule) {
            $ruleResultCollection->merge($rule->check($ruleSubject));
        }

        return $ruleResultCollection;
    }
}
