<?php

namespace Cradle\Storm\MySql;

use PHPUnit\Framework\TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-07-27 at 02:11:03.
 */
class Cradle_Storm_MySql_QueryAlter_Test extends TestCase
{
    /**
     * @var QueryAlter
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new QueryAlter('foobar');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Cradle\Storm\MySql\QueryAlter::__construct
     */
    public function test__construct()
    {
        $actual = $this->object->__construct('foobar');
		
		$this->assertNull($actual);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryAlter::addField
     */
    public function testAddField()
    {
        $instance = $this->object->addField('foobar', array());
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryAlter', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryAlter::addKey
     */
    public function testAddKey()
    {
        $instance = $this->object->addKey('foobar');
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryAlter', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryAlter::addPrimaryKey
     */
    public function testAddPrimaryKey()
    {
        $instance = $this->object->addPrimaryKey('foobar');
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryAlter', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryAlter::addUniqueKey
     */
    public function testAddUniqueKey()
    {
        $instance = $this->object->addUniqueKey('foobar', array());
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryAlter', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryAlter::changeField
     */
    public function testChangeField()
    {
        $instance = $this->object->changeField('foobar', array());
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryAlter', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryAlter::getQuery
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

		$this->object->changeField('foobar', array(
			'type'		=> 'varchar',
			'default'	=> 'something',
			'null'		=> true,
			'attribute'	=> 'unsigned',
			'length'	=> 255
		));

		$this->object->addPrimaryKey('foobar');
		$this->object->addUniqueKey('foobar', array());
		$this->object->addKey('foobar');
		$this->object->removeField('foobar');
		$this->object->removeKey('foobar');
		$this->object->addPrimaryKey('foobar');
		$this->object->removeUniqueKey('foobar');
        $actual = $this->object->getQuery();
		$this->assertEquals('ALTER TABLE `foobar` DROP `foobar`, 
ADD `foobar` varchar(255) unsigned DEFAULT NULL, 
CHANGE `foobar`  `foobar` varchar(255) unsigned DEFAULT NULL, 
DROP INDEX `foobar`, 
ADD INDEX (`foobar`), 
DROP INDEX `foobar`, 
ADD UNIQUE (`foobar`), 
ADD PRIMARY KEY (`foobar`, `foobar`);', $actual);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryAlter::removeField
     */
    public function testRemoveField()
    {
        $instance = $this->object->removeField('foobar');
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryAlter', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryAlter::removeKey
     */
    public function testRemoveKey()
    {
        $instance = $this->object->removeKey('foobar');
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryAlter', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryAlter::removePrimaryKey
     */
    public function testRemovePrimaryKey()
    {
        $instance = $this->object->removePrimaryKey('foobar');
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryAlter', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryAlter::removeUniqueKey
     */
    public function testRemoveUniqueKey()
    {
        $instance = $this->object->removeUniqueKey('foobar');
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryAlter', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql\QueryAlter::setName
     */
    public function testSetName()
    {
        $instance = $this->object->setName('foobar');
		$this->assertInstanceOf('Cradle\Storm\MySql\QueryAlter', $instance);
    }
}
