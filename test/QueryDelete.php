<?php 

namespace Cradle\Storm;

use PHPUnit\Framework\TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-07-27 at 02:11:02.
 */
class Cradle_Storm_QueryDelete_Test extends TestCase
{
    /**
     * @var QueryDelete
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new QueryDelete('foobar');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Cradle\Storm\QueryDelete::getQuery
     */
    public function testGetQuery()
    {
        $actual = $this->object->getQuery();
		$this->assertEquals('DELETE FROM foobar WHERE ;', $actual);
    }

    /**
     * @covers Cradle\Storm\QueryDelete::setTable
     */
    public function testSetTable()
    {
        $instance = $this->object->setTable('foobar');
		$this->assertInstanceOf('Cradle\Storm\QueryDelete', $instance);
    }

    /**
     * @covers Cradle\Storm\QueryDelete::where
     */
    public function testWhere()
    {
        $instance = $this->object->where('foo=bar');
		$this->assertInstanceOf('Cradle\Storm\QueryDelete', $instance);
    }
}
