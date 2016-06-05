<?php

namespace Zortje\Rules\Common;

/**
 * Class Collection
 *
 * @package Zortje\Rules\Common
 */
class Collection implements \Iterator, \Countable
{

    protected $collection = [];

    /**
     * Return the current item
     *
     * @return false|mixed Item
     */
    public function current()
    {
        return current($this->collection);
    }

    /**
     * Return the key of the current item
     *
     * @return mixed scalar on success, or null on failure.
     */
    public function key()
    {
        return key($this->collection);
    }

    /**
     * Move forward to next item
     */
    public function next()
    {
        next($this->collection);
    }

    /**
     * Rewind the collection to the first item
     */
    public function rewind()
    {
        if (is_array($this->collection) === true) {
            reset($this->collection);
        }
    }

    /**
     * Checks if current position is valid
     *
     * @return bool Returns true on success or false on failure.
     */
    public function valid(): bool
    {
        $key = key($this->collection);

        return $key !== null && $key !== false;
    }

    /**
     * Count elements of items in collection
     *
     * @return int Count
     */
    public function count(): int
    {
        return count($this->collection);
    }
}
