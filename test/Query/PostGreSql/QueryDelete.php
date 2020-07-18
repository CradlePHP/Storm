<?php

namespace Cradle\Storm\Query\PostGreSql;

use PHPUnit\Framework\TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-07-30 at 04:38:38.
 */
class Cradle_Storm_PostGreSql_QueryDelete_Test extends TestCase
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
    $this->object = new Delete('foobar');
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {
  }

  /**
   * @covers Cradle\Storm\Query\PostGreSql\QueryDelete::__construct
   */
  public function test__construct()
  {
    $this->object->__construct('foobar');
		$actual = $this->object->getQuery();
		$this->assertEquals('DELETE FROM "foobar" WHERE ;', $actual);
  }

  /**
   * @covers Cradle\Storm\Query\PostGreSql\QueryDelete::getQuery
   */
  public function testGetQuery()
  {
    $actual = $this->object->getQuery();
		$this->assertEquals('DELETE FROM "foobar" WHERE ;', $actual);
  }
}
