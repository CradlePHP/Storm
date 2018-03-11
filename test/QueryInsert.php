<?php 

namespace Cradle\Storm;

use PHPUnit\Framework\TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-07-27 at 02:11:02.
 */
class Cradle_Storm_QueryInsert_Test extends TestCase
{
    /**
     * @var QueryInsert
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new QueryInsert('foobar');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Cradle\Storm\QueryInsert::getQuery
     */
    public function testGetQuery()
    {
        $actual = $this->object->getQuery();
		$this->assertEquals('INSERT INTO foobar () VALUES ;', $actual);
    }

    /**
     * @covers Cradle\Storm\QueryInsert::set
     */
    public function testSet()
    {
        $instance = $this->object->set('foo', 'bar');
		$this->assertInstanceOf('Cradle\Storm\QueryInsert', $instance);
    }

    /**
     * @covers Cradle\Storm\QueryInsert::setTable
     */
    public function testSetTable()
    {
        $instance = $this->object->setTable('foobar');
		$this->assertInstanceOf('Cradle\Storm\QueryInsert', $instance);
    }
}
