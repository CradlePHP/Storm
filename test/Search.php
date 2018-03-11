<?php

namespace Cradle\Storm;

use StdClass;
use PHPUnit\Framework\TestCase;

use Cradle\Resolver\ResolverHandler;
use Cradle\Event\EventHandler;
use Cradle\Profiler\InspectorHandler;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-07-27 at 02:11:02.
 */
class Cradle_Storm_Search_Test extends TestCase
{
    /**
     * @var Search
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Search(new AbstractSqlStub);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Cradle\Storm\Search::__construct
     */
    public function test__construct()
    {
        $actual = $this->object->__construct(new AbstractSqlStub);

        $this->assertNull($actual);
    }

    /**
     * @covers Cradle\Storm\Search::__call
     */
    public function test__call()
    {
        $instance = $this->object->filterByFoo('bar', '_');
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
        $instance = $this->object->filterByFoo();
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
        $instance = $this->object->filterByFoo([1, 2, 3]);
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);

        $instance = $this->object->sortByFoo('ASC', '_');
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
        $instance = $this->object->sortByFoo();
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);

        $trigger = false;
        try {
            $this->object->foobar();
        } catch(SqlException $e) {
            $trigger = true;
        }

        $this->assertTrue($trigger);
    }

    /**
     * @covers Cradle\Storm\Search::addFilter
     */
    public function testAddFilter()
    {
        $instance = $this->object->addFilter('foo=1');
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);

        $instance = $this->object->addFilter('foo=%s', 1);
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::addSort
     */
    public function testAddSort()
    {
        $instance = $this->object->addSort('bar', 'ASC');
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::getCollection
     */
    public function testGetCollection()
    {
        $instance = $this->object->getCollection();
        $this->assertInstanceOf('Cradle\Storm\Collection', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::getModel
     */
    public function testGetModel()
    {
        $instance = $this->object->getModel();
        $this->assertInstanceOf('Cradle\Storm\Model', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::getRow
     */
    public function testGetRow()
    {
        $actual = $this->object->getRow();
        $this->assertEquals('SELECT * FROM    ;', $actual['query']);

        $actual = $this->object->getRow('foobar');
        $this->assertNull($actual['query']);
    }

    /**
     * @covers Cradle\Storm\Search::getRows
     */
    public function testGetRows()
    {
        $this->object->groupBy('foo');
        $this->object->setRange(4);
        $this->object->addSort('bar', 'ASC');
        $actual = $this->object->getRows();
        $this->assertEquals('SELECT * FROM  GROUP BY foo ORDER BY bar ASC LIMIT 0,4;', $actual[0]['query']);
    }

    /**
     * @covers Cradle\Storm\Search::getTotal
     */
    public function testGetTotal()
    {
        $actual = $this->object->getTotal();
        $this->assertEquals(123, $actual);
    }

    /**
     * @covers Cradle\Storm\Search::groupBy
     */
    public function testGroupBy()
    {
        $instance = $this->object->groupBy('foo');
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::having
     */
    public function testHaving()
    {
        $instance = $this->object->having('foo');
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::innerJoinOn
     */
    public function testInnerJoinOn()
    {
        $instance = $this->object->innerJoinOn('bar', 'bar_id=foo_id');
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::innerJoinUsing
     */
    public function testInnerJoinUsing()
    {
        $instance = $this->object->innerJoinUsing('bar', 'bar_id=foo_id');
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::leftJoinOn
     */
    public function testLeftJoinOn()
    {
        $instance = $this->object->leftJoinOn('bar', 'bar_id=foo_id');
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::leftJoinUsing
     */
    public function testLeftJoinUsing()
    {
        $instance = $this->object->leftJoinUsing('bar', 'bar_id=foo_id');
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::outerJoinOn
     */
    public function testOuterJoinOn()
    {
        $instance = $this->object->outerJoinOn('bar', 'bar_id=foo_id');
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::outerJoinUsing
     */
    public function testOuterJoinUsing()
    {
        $instance = $this->object->outerJoinUsing('bar', 'bar_id=foo_id');
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::rightJoinOn
     */
    public function testRightJoinOn()
    {
        $instance = $this->object->rightJoinOn('bar', 'bar_id=foo_id');
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::rightJoinUsing
     */
    public function testRightJoinUsing()
    {
        $instance = $this->object->rightJoinUsing('bar', 'bar_id=foo_id');
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::setColumns
     */
    public function testSetColumns()
    {
        $instance = $this->object->setColumns('foo', 'bar');
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::setPage
     */
    public function testSetPage()
    {
        $instance = $this->object->setPage(-4);
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::setRange
     */
    public function testSetRange()
    {
        $instance = $this->object->setRange(-4);
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::setStart
     */
    public function testSetStart()
    {
        $instance = $this->object->setStart(4);
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::setTable
     */
    public function testSetTable()
    {
        $instance = $this->object->setTable('foo');
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::getEventHandler
     */
    public function testGetEventHandler()
    {
        $instance = $this->object->getEventHandler();
        $this->assertInstanceOf('Cradle\Event\EventHandler', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::on
     */
    public function testOn()
    {
        $trigger = new StdClass();
        $trigger->success = null;

        $callback = function() use ($trigger) {
            $trigger->success = true;
        };

        $instance = $this
            ->object
            ->on('foobar', $callback)
            ->trigger('foobar');

        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
        $this->assertTrue($trigger->success);
    }

    /**
     * @covers Cradle\Storm\Search::setEventHandler
     */
    public function testSetEventHandler()
    {
        $instance = $this->object->setEventHandler(new EventHandler);
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::trigger
     */
    public function testTrigger()
    {
        $trigger = new StdClass();
        $trigger->success = null;

        $callback = function() use ($trigger) {
            $trigger->success = true;
        };

        $instance = $this
            ->object
            ->on('foobar', $callback)
            ->trigger('foobar');

        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
        $this->assertTrue($trigger->success);
    }

    /**
     * @covers Cradle\Storm\Search::i
     */
    public function testI()
    {
        $instance1 = Search::i(new AbstractSqlStub);
        $this->assertInstanceOf('Cradle\Storm\Search', $instance1);

        $instance2 = Search::i(new AbstractSqlStub);
        $this->assertTrue($instance1 !== $instance2);
    }

    /**
     * @covers Cradle\Storm\Search::loop
     */
    public function testLoop()
    {
        $self = $this;
        $this->object->loop(function($i) use ($self) {
            $self->assertInstanceOf('Cradle\Storm\Search', $this);

            if ($i == 2) {
                return false;
            }
        });
    }

    /**
     * @covers Cradle\Storm\Search::when
     */
    public function testWhen()
    {
        $self = $this;
        $test = 'Good';
        $this->object->when(function() use ($self) {
            $self->assertInstanceOf('Cradle\Storm\Search', $this);
            return false;
        }, function() use ($self, &$test) {
            $self->assertInstanceOf('Cradle\Storm\Search', $this);
            $test = 'Bad';
        });
    }

    /**
     * @covers Cradle\Storm\Search::getInspectorHandler
     */
    public function testGetInspectorHandler()
    {
        $instance = $this->object->getInspectorHandler();
        $this->assertInstanceOf('Cradle\Profiler\InspectorHandler', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::inspect
     */
    public function testInspect()
    {
        ob_start();
        $this->object->inspect('foobar');
        $contents = ob_get_contents();
        ob_end_clean();

        $this->assertEquals(
            '<pre>INSPECTING Variable:</pre><pre>foobar</pre>',
            $contents
        );
    }

    /**
     * @covers Cradle\Storm\Search::setInspectorHandler
     */
    public function testSetInspectorHandler()
    {
        $instance = $this->object->setInspectorHandler(new InspectorHandler);
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::addLogger
     */
    public function testAddLogger()
    {
        $instance = $this->object->addLogger(function() {});
        $this->assertInstanceOf('Cradle\Storm\Search', $instance);
    }

    /**
     * @covers Cradle\Storm\Search::log
     */
    public function testLog()
    {
        $trigger = new StdClass();
        $trigger->success = null;
        $this->object->addLogger(function($trigger) {
            $trigger->success = true;
        })
        ->log($trigger);


        $this->assertTrue($trigger->success);
    }

    /**
     * @covers Cradle\Storm\Search::loadState
     */
    public function testLoadState()
    {
        $state1 = new Search(new AbstractSqlStub);
        $state2 = new Search(new AbstractSqlStub);

        $state1->saveState('state1');
        $state2->saveState('state2');

        $this->assertTrue($state2 === $state1->loadState('state2'));
        $this->assertTrue($state1 === $state2->loadState('state1'));
    }

    /**
     * @covers Cradle\Storm\Search::saveState
     */
    public function testSaveState()
    {
        $state1 = new Search(new AbstractSqlStub);
        $state2 = new Search(new AbstractSqlStub);

        $state1->saveState('state1');
        $state2->saveState('state2');

        $this->assertTrue($state2 === $state1->loadState('state2'));
        $this->assertTrue($state1 === $state2->loadState('state1'));
    }

    /**
     * @covers Cradle\Storm\Search::__callResolver
     */
    public function test__callResolver()
    {
        $actual = $this->object->addResolver(ResolverCallStub::class, function() {});
        $this->assertInstanceOf('Cradle\Storm\Search', $actual);
    }

    /**
     * @covers Cradle\Storm\Search::addResolver
     */
    public function testAddResolver()
    {
        $actual = $this->object->addResolver(ResolverCallStub::class, function() {});
        $this->assertInstanceOf('Cradle\Storm\Search', $actual);
    }

    /**
     * @covers Cradle\Storm\Search::getResolverHandler
     */
    public function testGetResolverHandler()
    {
        $actual = $this->object->getResolverHandler();
        $this->assertInstanceOf('Cradle\Resolver\ResolverHandler', $actual);
    }

    /**
     * @covers Cradle\Storm\Search::resolve
     */
    public function testResolve()
    {
        $actual = $this->object->addResolver(
            ResolverCallStub::class,
            function() {
                return new ResolverAddStub();
            }
        )
        ->resolve(ResolverCallStub::class)
        ->foo('bar');

        $this->assertEquals('barfoo', $actual);
    }

    /**
     * @covers Cradle\Storm\Search::resolveShared
     */
    public function testResolveShared()
    {
        $actual = $this
            ->object
            ->resolveShared(ResolverSharedStub::class)
            ->reset()
            ->foo('bar');

        $this->assertEquals('barfoo', $actual);

        $actual = $this
            ->object
            ->resolveShared(ResolverSharedStub::class)
            ->foo('bar');

        $this->assertEquals('barbar', $actual);
    }

    /**
     * @covers Cradle\Storm\Search::resolveStatic
     */
    public function testResolveStatic()
    {
        $actual = $this
            ->object
            ->resolveStatic(
                ResolverStaticStub::class,
                'foo',
                'bar'
            );

        $this->assertEquals('barfoo', $actual);
    }

    /**
     * @covers Cradle\Storm\Search::setResolverHandler
     */
    public function testSetResolverHandler()
    {
        $actual = $this->object->setResolverHandler(new ResolverHandler);
        $this->assertInstanceOf('Cradle\Storm\Search', $actual);
    }
}

if(!class_exists('Cradle\Storm\AbstractSqlStub')) {
    class AbstractSqlStub extends AbstractSql implements SqlInterface
    {
        public function connect($options = [])
        {
            $this->connection = 'foobar';
            return $this;
        }

        public function getLastInsertedId($column = null)
        {
            return 123;
        }

        public function query($query, array $binds = [])
        {
            return array(array(
                'total' => 123,
                'query' => (string) $query,
                'binds' => $binds
            ));
        }

        public function getColumns()
        {
            return array(
                array(
                    'Field' => 'foobar_id',
                    'Type' => 'int',
                    'Key' => 'PRI',
                    'Default' => null,
                    'Null' => 1
                ),
                array(
                    'Field' => 'foobar_title',
                    'Type' => 'vachar',
                    'Key' => null,
                    'Default' => null,
                    'Null' => 1
                ),
                array(
                    'Field' => 'foobar_date',
                    'Type' => 'datetime',
                    'Key' => null,
                    'Default' => null,
                    'Null' => 1
                )
            );
        }
    }
}

if(!class_exists('Cradle\Storm\ResolverCallStub')) {
    class ResolverCallStub
    {
        public function foo($string)
        {
            return $string . 'foo';
        }
    }
}

if(!class_exists('Cradle\Storm\ResolverAddStub')) {
    class ResolverAddStub
    {
        public function foo($string)
        {
            return $string . 'foo';
        }
    }
}

if(!class_exists('Cradle\Storm\ResolverSharedStub')) {
    class ResolverSharedStub
    {
        public $name = 'foo';

        public function foo($string)
        {
            $name = $this->name;
            $this->name = $string;
            return $string . $name;
        }

        public function reset()
        {
            $this->name = 'foo';
            return $this;
        }
    }
}

if(!class_exists('Cradle\Storm\ResolverStaticStub')) {
    class ResolverStaticStub
    {
        public static function foo($string)
        {
            return $string . 'foo';
        }
    }
}