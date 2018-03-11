<?php

namespace Cradle\Storm\MySql;

use PHPUnit\Framework\TestCase;

use Cradle\Storm\QuerySelect;
/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-07-27 at 02:11:03.
 */
class Cradle_Storm_MySql_QuerySubSelect_Test extends TestCase
{
    /**
     * @var QuerySubSelect
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new QuerySubSelect(new QuerySelect);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Cradle\Storm\MySql\QuerySubSelect::__construct
     */
    public function test__construct()
    {
        $actual = $this->object->__construct(new QuerySelect);
		$this->assertNull($actual);
    }

    /**
     * @covers Cradle\Storm\MySql\QuerySubSelect::getQuery
     */
    public function testGetQuery()
    {
        $actual = $this->object->getQuery();
		$this->assertEquals('(SELECT * FROM    )', $actual);
    }

    /**
     * @covers Cradle\Storm\MySql\QuerySubSelect::setParentQuery
     */
    public function testSetParentQuery()
    {
        $instance = $this->object->setParentQuery(new QuerySelect);
		$this->assertInstanceOf('Cradle\Storm\MySql\QuerySubSelect', $instance);
    }
}
