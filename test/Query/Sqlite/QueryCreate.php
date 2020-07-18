<?php

namespace Cradle\Storm\Query\Sqlite;

use PHPUnit\Framework\TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-07-27 at 02:11:03.
 */
class Cradle_Storm_Sqlite_QueryCreate_Test extends TestCase
{
  /**
   * @var QueryCreate
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
    $this->object = new Create('foobar');
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {
  }

  /**
   * @covers Cradle\Storm\Query\Sqlite\QueryCreate::__construct
   */
  public function test__construct()
  {
    $actual = $this->object->__construct('foobar');

    $this->assertNull($actual);
  }

  /**
   * @covers Cradle\Storm\Query\Sqlite\QueryCreate::addField
   */
  public function testAddField()
  {
    $instance = $this->object->addField('foobar', array());
    $this->assertInstanceOf('Cradle\Storm\Query\Sqlite\QueryCreate', $instance);
  }

  /**
   * @covers Cradle\Storm\Query\Sqlite\QueryCreate::addForeignKey
   */
  public function testAddForeignKey()
  {
    $instance = $this->object->addForeignKey('foobar', 'foo', 'bar');
    $this->assertInstanceOf('Cradle\Storm\Query\Sqlite\QueryCreate', $instance);
  }

  /**
   * @covers Cradle\Storm\Query\Sqlite\QueryCreate::addUniqueKey
   * @todo   Implement testAddUniqueKey().
   */
  public function testAddUniqueKey()
  {
    $instance = $this->object->addUniqueKey('foobar', array());
    $this->assertInstanceOf('Cradle\Storm\Query\Sqlite\QueryCreate', $instance);
  }

  /**
   * @covers Cradle\Storm\Query\Sqlite\QueryCreate::getQuery
   */
  public function testGetQuery()
  {
    $this->object->addField('foobar', array(
      'type'    => 'varchar',
      'default'  => 'something',
      'null'    => true,
      'attribute'  => 'unsigned',
      'length'  => 255
    ));
    $this->object->addForeignKey('foobar', 'foo', 'bar');
    $this->object->addUniqueKey('foobar', array('foobar'));
    $this->object->setComments('foobar');
    $actual = $this->object->getQuery();
    $this->assertEquals('CREATE TABLE "foobar" ("foobar" varchar(255) '
    . 'unsigned DEFAULT NULL, UNIQUE "foobar" ("foobar"), FOREIGN KEY '
    . '"foobar" REFERENCES foo(bar));', $actual);
  }

  /**
   * @covers Cradle\Storm\Query\Sqlite\QueryCreate::setComments
   */
  public function testSetComments()
  {
    $instance = $this->object->setComments('foobar');
    $this->assertInstanceOf('Cradle\Storm\Query\Sqlite\QueryCreate', $instance);
  }

  /**
   * @covers Cradle\Storm\Query\Sqlite\QueryCreate::setFields
   */
  public function testSetFields()
  {
    $instance = $this->object->setFields(array('foobar'));
    $this->assertInstanceOf('Cradle\Storm\Query\Sqlite\QueryCreate', $instance);
  }

  /**
   * @covers Cradle\Storm\Query\Sqlite\QueryCreate::setForiegnKeys
   */
  public function testSetForiegnKeys()
  {
    $instance = $this->object->setForiegnKeys(array('foobar'));
    $this->assertInstanceOf('Cradle\Storm\Query\Sqlite\QueryCreate', $instance);
  }

  /**
   * @covers Cradle\Storm\Query\Sqlite\QueryCreate::setName
   */
  public function testSetName()
  {
    $instance = $this->object->setName('foobar');
    $this->assertInstanceOf('Cradle\Storm\Query\Sqlite\QueryCreate', $instance);
  }

  /**
   * @covers Cradle\Storm\Query\Sqlite\QueryCreate::setUniqueKeys
   */
  public function testSetUniqueKeys()
  {
    $instance = $this->object->setUniqueKeys(array('foobar'));
    $this->assertInstanceOf('Cradle\Storm\Query\Sqlite\QueryCreate', $instance);
  }
}
