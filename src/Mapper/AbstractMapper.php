<?php //-->
/**
 * This file is part of the Cradle PHP Library.
 * (c) 2016-2018 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */

namespace Cradle\Storm\Mapper;

use Cradle\Storm\Query\QueryInterface;
use Cradle\Storm\Engine\EngineInterface;

/**
 * AbstractFilter
 *
 * @vendor   Cradle
 * @package  Storm
 * @author   Christian Blanquera <cblanquera@openovate.com>
 * @standard PSR-2
 */
abstract class AbstractMapper
{
  /**
  * @var EngineInterface $database = null Database object
  */
  protected $database = null;

  /**
   * @var ?string $table Table name
   */
  protected $table = null;

  /**
   * Construct: Store database
   *
   * @param *EngineInterface $database Database object
   */
  public function __construct(EngineInterface $database)
  {
    $this->database = $database;
  }

  /**
   * Builds query based on the data given
   *
   * @return string
   */
  abstract public function getQuery(): QueryInterface;

  /**
   * Queries the database
   *
   * @param ?callable $fetch Whether to fetch all the rows
   *
   * @return array|MapperInterface
   */
  public function query(?callable $fetch = null)
  {
    $query = $this->getQuery();

    $rows = $this->database->query($query, $this->database->getBinds(), $fetch);

    if (!$callback) {
      return $rows;
    }

    return $this;
  }

  /**
   * Sets Table Name
   *
   * @param *string $table Table class name
   *
   * @return AbstractFilter
   */
  public function setTable(string $table): MapperInterface
  {
    $this->table = $table;
    return $this;
  }
}