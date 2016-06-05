<?php

namespace Zortje\Rules\Tests;

use Zortje\Rules\RuleCollection;
use Zortje\Rules\RuleInterface;

/**
 * Class RuleCollectionTest
 *
 * @package            Zortje\Rules\Tests
 *
 * @coversDefaultClass Zortje\Rules\RuleCollection
 */
class RuleCollectionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers ::add
     */
    public function testAdd()
    {
        /**
         * @var RuleInterface $rule
         */
        $rule = $this->getMock(RuleInterface::class);

        $ruleCollection = new RuleCollection();

        $this->assertSame(0, $ruleCollection->count());

        $ruleCollection->add($rule);

        $this->assertSame(1, $ruleCollection->count());
    }

    /**
     * @covers ::check
     */
    public function testCheck()
    {
        $this->markTestIncomplete(); // @todo
    }
}
