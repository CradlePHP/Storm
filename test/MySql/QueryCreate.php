<?php

namespace Cradle\Storm\MySql;

use PHPUnit\Framework\TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-07-27 at 02:11:03.
 */
class Cradle_Storm_MySql_QueryCreate_Test extends TestCase
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
        $this->object = new QueryCreate('foobar');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Cradle\Storm\MySql\QueryCreate::__construct
     */
    public function test__construct()
    {
        $actual = $this->object->__construct('foobar');
		
		$this->assertNull($actual);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryCreate::addField
     */
    public function testAddField()
    {
        $instance = $this->object->addField('foobar', array());
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryCreate', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryCreate::addKey
     */
    public function testAddKey()
    {
        $instance = $this->object->addKey('foobar', array());
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryCreate', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryCreate::addPrimaryKey
     */
    public function testAddPrimaryKey()
    {
        $instance = $this->object->addPrimaryKey('foobar');
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryCreate', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryCreate::addUniqueKey
     */
    public function testAddUniqueKey()
    {
        $instance = $this->object->addUniqueKey('foobar', array());
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryCreate', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryCreate::getQuery
     */
    public function testGetQuery()
    {
		$this->object->addField('foobar', array(
			'type'		=> 'varchar',
			'default'	=> 'something',
			'null'		=> true,
			'attribute'	=> 'unsigned',
			'length'	=> 255
		));
		$this->object->addKey('foobar', array('foobar'));
		$this->object->addPrimaryKey('foobar');
		$this->object->addUniqueKey('foobar', array('foobar'));
		$this->object->setComments('foobar');
        $actual = $this->object->getQuery();
		$this->assertEquals('CREATE TABLE `foobar` (`foobar` varchar(255) unsigned DEFAULT NULL, PRIMARY KEY (`foobar`), UNIQUE KEY `foobar` (`foobar`), KEY `foobar` (`foobar`));', $actual);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryCreate::setComments
     */
    public function testSetComments()
    {
        $instance = $this->object->setComments('foobar');
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryCreate', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryCreate::setFields
     */
    public function testSetFields()
    {
        $instance = $this->object->setFields(array('foobar'));
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryCreate', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryCreate::setKeys
     */
    public function testSetKeys()
    {
        $instance = $this->object->setKeys(array('foobar'));
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryCreate', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryCreate::setName
     */
    public function testSetName()
    {
        $instance = $this->object->setName('foobar');
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryCreate', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryCreate::setPrimaryKeys
     */
    public function testSetPrimaryKeys()
    {
        $instance = $this->object->setPrimaryKeys(array('foobar'));
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryCreate', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryCreate::setUniqueKeys
     */
    public function testSetUniqueKeys()
    {
        $instance = $this->object->setUniqueKeys(array('foobar'));
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryCreate', $instance);
    }
}
