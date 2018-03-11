<?php

namespace Cradle\Storm;

use PHPUnit\Framework\TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-07-27 at 02:11:02.
 */
class Cradle_Storm_MySql_Test extends TestCase
{
    /**
     * @var MySql
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = SqlFactory::load(include(__DIR__.'/assets/mysql.php'));
        $schema = file_get_contents(__DIR__.'/assets/mysql-schema.sql');
        $this->object->query($schema);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Cradle\Storm\MySql::__construct
     */
    public function test__construct()
    {
        $actual = $this->object->__construct('foo', 'foo', 'foo');
        $this->assertNull($actual);
    }

    /**
     * @covers Cradle\Storm\MySql::connect
     */
    public function testConnect()
    {
        $instance = $this->object->connect(include(__DIR__.'/assets/mysql.php'));
        $this->assertInstanceOf('Cradle\Storm\MySql', $instance);

        $this->object->__construct('127.0.0.1', 'testing_db', 'root');
        $instance = $this->object->connect();
        $this->assertInstanceOf('Cradle\Storm\MySql', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql::getAlterQuery
     */
    public function testGetAlterQuery()
    {
        $instance = $this->object->getAlterQuery('foobar');
        $this->assertInstanceOf('Cradle\Storm\MySql\QueryAlter', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql::getColumns
     */
    public function testGetColumns()
    {
        $actual = $this->object->getColumns('address');
        $this->assertTrue(is_array($actual));

        //$actual = $this->object->getColumns('address', array(array("Field LIKE 'address_%'")));
        //$this->assertTrue(is_array($actual));
    }

    /**
     * @covers Cradle\Storm\MySql::getCreateQuery
     */
    public function testGetCreateQuery()
    {
        $instance = $this->object->getCreateQuery('foobar');
        $this->assertInstanceOf('Cradle\Storm\MySql\QueryCreate', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql::getPrimaryKey
     */
    public function testGetPrimaryKey()
    {
        $actual = $this->object->getPrimaryKey('address');
        $this->assertEquals('address_id', $actual);
    }

    /**
     * @covers Cradle\Storm\MySql::getSubSelectQuery
     */
    public function testGetSubSelectQuery()
    {
        $instance = $this->object->getSubSelectQuery(new QuerySelect);
        $this->assertInstanceOf('Cradle\Storm\MySql\QuerySubSelect', $instance);
    }

    /**
     * @covers Cradle\Storm\MySql::getTables
     */
    public function testGetTables()
    {
        $actual = $this->object->getTables();
        $this->assertTrue(is_array($actual));
    }

    /**
     * @covers Cradle\Storm\MySql::getTableSchema
     */
    public function testGetTableSchema()
    {
        $this->object->insertRow('address', array(
            'address_label' => 'Foo Bar',
            'address_street' => 'foobar',
            'address_city' => 'foobar',
            'address_country' => 'foobar',
            'address_postal' => 'foobar',
            'address_created' => date('Y-m-d H:i:s'),
            'address_updated' => date('Y-m-d H:i:s')
        ));
        $actual = $this->object->getTableSchema('address');
        $this->assertContains('CREATE TABLE `address`', $actual);
    }

    /**
     * @covers Cradle\Storm\MySql::getUtilityQuery
     */
    public function testGetUtilityQuery()
    {
        $instance = $this->object->getUtilityQuery();
        $this->assertInstanceOf('Cradle\Storm\MySql\QueryUtility', $instance);
    }

    /**
     * @covers Cradle\Storm\AbstractSql::query
     * @covers Cradle\Storm\Search::getRows
     */
    public function testQuery()
    {
        $test = $this;
        $triggered = false;
        $instance = $this->object->query('SELECT * FROM address', array(), function($row) use ($test, &$triggered) {
            $triggered = true;
            $test->assertInstanceOf('Cradle\Storm\MySql', $this);
            $test->assertEquals($row['address_label'], 'Foo Bar');
            return false;
        });

        $this->assertInstanceOf('Cradle\Storm\MySql', $instance);
        $this->assertTrue($triggered);

        $row = $this->object->search('address')->getRow();
        $this->assertEquals($row['address_label'], 'Foo Bar');

        $triggered = false;
        $instance = $this->object->search('address')->getRows(function($row) use ($test, &$triggered) {
            $triggered = true;
            $test->assertInstanceOf('Cradle\Storm\MySql', $this);
            $test->assertEquals($row['address_label'], 'Foo Bar');
            return false;
        });

        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
        $this->assertTrue($triggered);
    }

    /**
     * @covers Cradle\Storm\AbstractSql::transaction
     * @covers Cradle\Storm\Search::getTotal
     */
    public function testTransaction()
    {
        $test = $this;
        $triggered = false;

        $total = $this->object->search('address')->getTotal();

        $this->object->transaction(function() use ($test, &$triggered) {
            $triggered = true;
            $test->assertInstanceOf('Cradle\Storm\MySql', $this);

            $this->insertRow('address', array(
                'address_label' => 'Foo Bar',
                'address_street' => 'foobar',
                'address_city' => 'foobar',
                'address_country' => 'foobar',
                'address_postal' => 'foobar',
                'address_created' => date('Y-m-d H:i:s'),
                'address_updated' => date('Y-m-d H:i:s')
            ));
        });

        $this->assertTrue($triggered);
        $this->assertEquals($total + 1, $this->object->search('address')->getTotal());

        $triggered = false;
        $this->object->transaction(function() use ($test, &$triggered) {
            $triggered = true;
            $test->assertInstanceOf('Cradle\Storm\MySql', $this);

            $this->insertRow('address', array(
                'address_label' => 'Foo Bar',
                'address_street' => 'foobar',
                'address_city' => 'foobar',
                'address_country' => 'foobar',
                'address_postal' => 'foobar',
                'address_created' => date('Y-m-d H:i:s'),
                'address_updated' => date('Y-m-d H:i:s')
            ));

            return false;
        });

        $this->assertTrue($triggered);
        $this->assertEquals($total + 1, $this->object->search('address')->getTotal());
    }
}
