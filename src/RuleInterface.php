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
     * @param Subject $subject
     *
     * @return ResultCollection
     */
    public function check(Subject $subject): ResultCollection;
}
