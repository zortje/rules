<?php

namespace Zortje\Rules;

/**
 * Class Result
 *
 * @package Zortje\Rules
 */
class Result
{

    /**
     * @var string
     */
    protected $context;

    /**
     * @var string
     */
    protected $description;

    /**
     * RuleResult constructor.
     *
     * @param string $context
     * @param string $description
     */
    public function __construct(string $context, string $description)
    {
        $this->context     = $context;
        $this->description = $description;
    }

    /**
     * Get result context
     *
     * @return string Result context
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Get result description
     *
     * @return string Result description
     */
    public function getDescription()
    {
        return $this->description;
    }
}
