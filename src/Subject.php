<?php

namespace Zortje\Rules;

/**
 * Class Subject
 *
 * @package Zortje\Rules
 */
class Subject
{

    /**
     * @var string
     */
    protected $contextDescription;

    /**
     * @var \DOMDocument
     */
    protected $dom;

    /**
     * RuleSubject constructor.
     *
     * @param string $contextDescription
     */
    public function __construct(string $contextDescription)
    {
        $this->contextDescription = $contextDescription;
    }

    /**
     * Get subject context description
     *
     * @return string Subject context description
     */
    public function getContextDescription(): string
    {
        return $this->contextDescription;
    }

    /**
     * Set DOM in subject
     *
     * @param \DOMDocument $dom
     */
    public function setDom(\DOMDocument $dom)
    {
        $this->dom = $dom;
    }

    /**
     * Get subject DOM
     *
     * @return \DOMDocument
     */
    public function getDom(): \DOMDocument
    {
        return $this->dom;
    }
}
