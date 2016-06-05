<?php

namespace Zortje\Rules\Tests;

use Faker\Factory;
use Zortje\Rules\Result;

/**
 * Class ResultTest
 *
 * @package            Zortje\Rules\Tests
 *
 * @coversDefaultClass Zortje\Rules\Result
 */
class ResultTest extends \PHPUnit_Framework_TestCase
{

    private $faker;

    public function setUp()
    {
        $this->faker = Factory::create();
    }

    /**
     * @covers ::__construct
     * @covers ::getContext
     * @covers ::getDescription
     */
    public function testConstruct()
    {
        $context     = $this->faker->sentence;
        $description = $this->faker->sentence;

        $result = new Result($context, $description);

        $reflector = new \ReflectionClass($result);

        $contextProperty = $reflector->getProperty('context');
        $contextProperty->setAccessible(true);

        $descriptionProperty = $reflector->getProperty('description');
        $descriptionProperty->setAccessible(true);

        $this->assertSame($context, $contextProperty->getValue($result));
        $this->assertSame($description, $descriptionProperty->getValue($result));

        $this->assertSame($context, $result->getContext());
        $this->assertSame($description, $result->getDescription());
    }
}
