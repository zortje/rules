<?php

namespace Zortje\Rules\Tests;

use Faker\Factory;
use Zortje\Rules\Subject;

/**
 * Class SubjectTest
 *
 * @package            Zortje\Rules\Tests
 *
 * @coversDefaultClass Zortje\Rules\Subject
 */
class SubjectTest extends \PHPUnit_Framework_TestCase
{

    private $faker;

    public function setUp()
    {
        $this->faker = Factory::create();
    }

    /**
     * @covers ::__construct
     * @covers ::getContextDescription
     */
    public function testConstruct()
    {
        $contextDescription = $this->faker->sentence;

        $subject = new Subject($contextDescription);

        $reflector = new \ReflectionClass($subject);

        $property = $reflector->getProperty('contextDescription');
        $property->setAccessible(true);

        $this->assertSame($contextDescription, $property->getValue($subject));

        $this->assertSame($contextDescription, $subject->getContextDescription());
    }

    /**
     * @covers ::setDom
     * @covers ::getDom
     */
    public function testSetDom()
    {
        $subject = new Subject('');

        $dom = new \DOMDocument();

        $subject->setDom($dom);

        $reflector = new \ReflectionClass($subject);

        $domProperty = $reflector->getProperty('dom');
        $domProperty->setAccessible(true);

        $this->assertSame($dom, $domProperty->getValue($subject));

        $this->assertSame($dom, $subject->getDom());
    }
}
