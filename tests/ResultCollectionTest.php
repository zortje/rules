<?php

namespace Zortje\Rules\Tests;

use Zortje\Rules\Result;
use Zortje\Rules\ResultCollection;

/**
 * Class ResultCollectionTest
 *
 * @package            Zortje\Rules\Tests
 *
 * @coversDefaultClass Zortje\Rules\ResultCollection
 */
class ResultCollectionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers ::add
     */
    public function testAdd()
    {
        /**
         * @var Result $result
         */
        $result = new Result('', '');

        $resultCollection = new ResultCollection();

        $this->assertSame(0, $resultCollection->count());

        $resultCollection->add($result);

        $this->assertSame(1, $resultCollection->count());
    }

    /**
     * @covers ::check
     */
    public function testCheck()
    {
        $this->markTestIncomplete(); // @todo
    }
}
