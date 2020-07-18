<?php

namespace Cradle\Storm\Mapper;

use StdClass;
use PHPUnit\Framework\TestCase;

use Cradle\Storm\SqlException;
use Cradle\Storm\Engine\AbstractEngine;
use Cradle\Storm\Engine\EngineInterface;

use Cradle\Resolver\ResolverHandler;
use Cradle\Event\EventHandler;
use Cradle\Profiler\InspectorHandler;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-07-27 at 02:11:02.
 */
class Cradle_Storm_Mapper_Remove_Test extends TestCase
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
    $this->object = new Search(new AbstractEngineStub);
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::__construct
   */
  public function test__construct()
  {
    $actual = $this->object->__construct(new AbstractEngineStub);

    $this->assertNull($actual);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::__call
   */
  public function test__call()
  {
    $instance = $this->object->filterByFoo('bar', '_');
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
    $instance = $this->object->filterByFoo();
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
    $instance = $this->object->filterByFoo([1, 2, 3]);
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);

    $instance = $this->object->sortByFoo('ASC', '_');
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
    $instance = $this->object->sortByFoo();
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);

    $trigger = false;
    try {
      $this->object->foobar();
    } catch(SqlException $e) {
      $trigger = true;
    }

    $this->assertTrue($trigger);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::addFilter
   */
  public function testAddFilter()
  {
    $instance = $this->object->addFilter('foo=1');
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);

    $instance = $this->object->addFilter('foo=%s', 1);
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::innerJoinOn
   */
  public function testInnerJoinOn()
  {
    $instance = $this->object->innerJoinOn('bar', 'bar_id=foo_id');
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::innerJoinUsing
   */
  public function testInnerJoinUsing()
  {
    $instance = $this->object->innerJoinUsing('bar', 'bar_id=foo_id');
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::leftJoinOn
   */
  public function testLeftJoinOn()
  {
    $instance = $this->object->leftJoinOn('bar', 'bar_id=foo_id');
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::leftJoinUsing
   */
  public function testLeftJoinUsing()
  {
    $instance = $this->object->leftJoinUsing('bar', 'bar_id=foo_id');
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::outerJoinOn
   */
  public function testOuterJoinOn()
  {
    $instance = $this->object->outerJoinOn('bar', 'bar_id=foo_id');
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::outerJoinUsing
   */
  public function testOuterJoinUsing()
  {
    $instance = $this->object->outerJoinUsing('bar', 'bar_id=foo_id');
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::rightJoinOn
   */
  public function testRightJoinOn()
  {
    $instance = $this->object->rightJoinOn('bar', 'bar_id=foo_id');
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::rightJoinUsing
   */
  public function testRightJoinUsing()
  {
    $instance = $this->object->rightJoinUsing('bar', 'bar_id=foo_id');
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::setTable
   */
  public function testSetTable()
  {
    $instance = $this->object->setTable('foo');
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::getEventHandler
   */
  public function testGetEventHandler()
  {
    $instance = $this->object->getEventHandler();
    $this->assertInstanceOf('Cradle\Event\EventHandler', $instance);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::on
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

    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
    $this->assertTrue($trigger->success);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::setEventHandler
   */
  public function testSetEventHandler()
  {
    $instance = $this->object->setEventHandler(new EventHandler);
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::trigger
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

    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
    $this->assertTrue($trigger->success);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::i
   */
  public function testI()
  {
    $instance1 = Search::i(new AbstractEngineStub);
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance1);

    $instance2 = Search::i(new AbstractEngineStub);
    $this->assertTrue($instance1 !== $instance2);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::loop
   */
  public function testLoop()
  {
    $self = $this;
    $this->object->loop(function($i) use ($self) {
      $self->assertInstanceOf('Cradle\Storm\Mapper\Remove', $this);

      if ($i == 2) {
        return false;
      }
    });
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::when
   */
  public function testWhen()
  {
    $self = $this;
    $test = 'Good';
    $this->object->when(function() use ($self) {
      $self->assertInstanceOf('Cradle\Storm\Mapper\Remove', $this);
      return false;
    }, function() use ($self, &$test) {
      $self->assertInstanceOf('Cradle\Storm\Mapper\Remove', $this);
      $test = 'Bad';
    });
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::getInspectorHandler
   */
  public function testGetInspectorHandler()
  {
    $instance = $this->object->getInspectorHandler();
    $this->assertInstanceOf('Cradle\Profiler\InspectorHandler', $instance);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::inspect
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
   * @covers Cradle\Storm\Mapper\Remove::setInspectorHandler
   */
  public function testSetInspectorHandler()
  {
    $instance = $this->object->setInspectorHandler(new InspectorHandler);
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::addLogger
   */
  public function testAddLogger()
  {
    $instance = $this->object->addLogger(function() {});
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $instance);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::log
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
   * @covers Cradle\Storm\Mapper\Remove::loadState
   */
  public function testLoadState()
  {
    $state1 = new Search(new AbstractEngineStub);
    $state2 = new Search(new AbstractEngineStub);

    $state1->saveState('state1');
    $state2->saveState('state2');

    $this->assertTrue($state2 === $state1->loadState('state2'));
    $this->assertTrue($state1 === $state2->loadState('state1'));
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::saveState
   */
  public function testSaveState()
  {
    $state1 = new Search(new AbstractEngineStub);
    $state2 = new Search(new AbstractEngineStub);

    $state1->saveState('state1');
    $state2->saveState('state2');

    $this->assertTrue($state2 === $state1->loadState('state2'));
    $this->assertTrue($state1 === $state2->loadState('state1'));
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::__callResolver
   */
  public function test__callResolver()
  {
    $actual = $this->object->addResolver(ResolverCallStub::class, function() {});
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $actual);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::addResolver
   */
  public function testAddResolver()
  {
    $actual = $this->object->addResolver(ResolverCallStub::class, function() {});
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $actual);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::getResolverHandler
   */
  public function testGetResolverHandler()
  {
    $actual = $this->object->getResolverHandler();
    $this->assertInstanceOf('Cradle\Resolver\ResolverHandler', $actual);
  }

  /**
   * @covers Cradle\Storm\Mapper\Remove::resolve
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
   * @covers Cradle\Storm\Mapper\Remove::resolveShared
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
   * @covers Cradle\Storm\Mapper\Remove::resolveStatic
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
   * @covers Cradle\Storm\Mapper\Remove::setResolverHandler
   */
  public function testSetResolverHandler()
  {
    $actual = $this->object->setResolverHandler(new ResolverHandler);
    $this->assertInstanceOf('Cradle\Storm\Mapper\Remove', $actual);
  }
}

if(!class_exists('Cradle\Storm\Mapper\AbstractEngineStub')) {
  class AbstractEngineStub extends AbstractEngine implements EngineInterface
  {
    public function connect($options = []): EngineInterface
    {
      $this->connection = 'foobar';
      return $this;
    }

    public function getLastInsertedId(?string $column = null): int
    {
      return 123;
    }

    public function query($query, array $binds = [], ?callable $fetch = null)
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

if(!class_exists('Cradle\Storm\Mapper\ResolverCallStub')) {
  class ResolverCallStub
  {
    public function foo($string)
    {
      return $string . 'foo';
    }
  }
}

if(!class_exists('Cradle\Storm\Mapper\ResolverAddStub')) {
  class ResolverAddStub
  {
    public function foo($string)
    {
      return $string . 'foo';
    }
  }
}

if(!class_exists('Cradle\Storm\Mapper\ResolverSharedStub')) {
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

if(!class_exists('Cradle\Storm\Mapper\ResolverStaticStub')) {
  class ResolverStaticStub
  {
    public static function foo($string)
    {
      return $string . 'foo';
    }
  }
}