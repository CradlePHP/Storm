<?php

namespace Cradle\Storm\Query\PostGreSql;

use PHPUnit\Framework\TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-07-30 at 04:38:38.
 */
class Cradle_Storm_Query_PostGreSql_Utility_Test extends TestCase
{
  /**
   * @var QueryUtility
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
    $this->object = new Utility;
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {
  }

  /**
   * @covers Cradle\Storm\Query\PostGreSql\Utility::dropTable
   */
  public function testDropTable()
  {
    $instance = $this->object->dropTable('foobar');
		$this->assertInstanceOf('Cradle\Storm\Query\PostGreSql\Utility', $instance);
  }

  /**
   * @covers Cradle\Storm\Query\PostGreSql\Utility::getQuery
   */
  public function testGetQuery()
  {
    $actual = $this->object->getQuery();
		$this->assertEquals(';', $actual);
  }

  /**
   * @covers Cradle\Storm\Query\PostGreSql\Utility::renameTable
   */
  public function testRenameTable()
  {
    $instance = $this->object->renameTable('foo', 'bar');
		$this->assertInstanceOf('Cradle\Storm\Query\PostGreSql\Utility', $instance);
  }

  /**
   * @covers Cradle\Storm\Query\PostGreSql\Utility::setSchema
   */
  public function testSetSchema()
  {
    $instance = $this->object->setSchema('foobar');
		$this->assertInstanceOf('Cradle\Storm\Query\PostGreSql\Utility', $instance);
  }

  /**
   * @covers Cradle\Storm\Query\PostGreSql\Utility::truncate
   */
  public function testTruncate()
  {
    $instance = $this->object->truncate('foobar');
		$this->assertInstanceOf('Cradle\Storm\Query\PostGreSql\Utility', $instance);
  }
}