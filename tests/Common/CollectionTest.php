<?php

namespace Zortje\Rules\Tests\Common;

use Zortje\Rules\Common\Collection;

/**
 * Class CollectionTest
 *
 * @package            Zortje\Rules\Tests\Common
 *
 * @coversDefaultClass Zortje\Rules\Common\Collection
 */
class CollectionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Collection
     */
    private $collection;

    public function setUp()
    {
        $this->collection = new Collection();

        $reflector = new \ReflectionClass($this->collection);

        $collectionProperty = $reflector->getProperty('collection');
        $collectionProperty->setAccessible(true);

        $collectionProperty->setValue($this->collection, ['foo', 'bar']);
    }

    /**
     * @covers ::current
     * @covers ::next
     * @covers ::rewind
     */
    public function testCurrent()
    {
        $this->assertSame('foo', $this->collection->current());

        $this->collection->next();
        $this->assertSame('bar', $this->collection->current());

        $this->collection->rewind();
        $this->assertSame('foo', $this->collection->current());
    }

    /**
     * @covers ::key
     * @covers ::next
     * @covers ::rewind
     */
    public function testKey()
    {
        $this->assertSame(0, $this->collection->key());

        $this->collection->next();
        $this->assertSame(1, $this->collection->key());

        $this->collection->rewind();
        $this->assertSame(0, $this->collection->key());
    }

    /**
     * @covers ::valid
     */
    public function testValid()
    {
        $this->collection->next();
        $this->assertTrue($this->collection->valid());

        $this->collection->next();
        $this->assertFalse($this->collection->valid());
    }

    /**
     * @covers ::count
     */
    public function testCount()
    {
        $this->assertSame(2, $this->collection->count());
    }
}
