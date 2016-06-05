<?php

namespace Zortje\Rules;

/**
 * Interface RuleInterface
 *
 * @package Zortje\Rules
 */
interface RuleInterface
{

    /**
     * Check rule and returns result collection
     *
     * @param Subject $ruleSubject
     *
     * @return ResultCollection
     */
    public function check(Subject $ruleSubject): ResultCollection;
}
