<?php //-->
/**
 * This file is part of the Storm PHP Project.
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */

namespace Cradle\Storm\Mapper;

use Cradle\Storm\Query\QueryInterface;

use Cradle\Event\EventTrait;

use Cradle\Helper\InstanceTrait;
use Cradle\Helper\LoopTrait;
use Cradle\Helper\ConditionalTrait;

use Cradle\Profiler\InspectorTrait;
use Cradle\Profiler\LoggerTrait;

use Cradle\Resolver\StateTrait;
use Cradle\Resolver\ResolverException;

/**
 * Sql Search
 *
 * @vendor   Cradle
 * @package  Storm
 * @standard PSR-2
 */
class Insert extends AbstractMapper implements MapperInterface
{
  use EventTrait,
    InstanceTrait,
    LoopTrait,
    ConditionalTrait,
    InspectorTrait,
    LoggerTrait,
    StateTrait;

  /**
   * @var array $rows List of rows to be inserted
   */
  protected $rows = [];

  /**
   * Builds query based on the data given
   *
   * @return string
   */
  public function getQuery(): QueryInterface
  {
    $query = $this->database->getInsertQuery()->setTable($this->table);

    $rows = $this->rows;
    ksort($rows);
    $rows = array_values($rows);

    foreach ($rows as $index => $row) {
      foreach ($row as $key => $setting) {
        $value = $setting['value'];
        if ($setting['bind']) {
          $value = $this->database->bind($value);
        }

        $query->set($key, $value, $index);
      }
    }

    return $query;
  }

  /**
   * Key/Value setter
   *
   * @param *string $key    column name
   * @param *string $value
   * @param bool    $bind   Whether to bind the value
   * @param int     $index  row index
   *
   * @return MapperInterface
   */
  public function set(
    string $key,
    string $value,
    bool $bind = true,
    int $index = 0
  ): MapperInterface
  {
    $this->rows[$index][$key] = [
      'value' => $value,
      'bind' => $bind
    ];

    return $this;
  }
}
