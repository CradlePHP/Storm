<?php //-->
/**
 * This file is part of the Cradle PHP Library.
 * (c) 2016-2018 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */

namespace Cradle\Storm\Query\PostGreSql;

use Cradle\Storm\Query\Delete as QueryDelete;

/**
 * Generates delete query string syntax
 *
 * @vendor   Cradle
 * @package  Storm
 * @author   Christian Blanquera <cblanquera@openovate.com>
 * @standard PSR-2
 */
class Delete extends QueryDelete
{
  /**
   * @var array $table Table name
   */
  protected $table = null;

  /**
   * @var array $where List of filters
   */
  protected $where = [];

  /**
   * Construct: set table name, if given
   *
   * @param ?string $table Table name
   */
  public function __construct(?string $table = null)
  {
    if (is_string($table)) {
      $this->setTable($table);
    }
  }

  /**
   * Returns the string version of the query
   *
   * @return string
   */
  public function getQuery(): string
  {
    return sprintf(
      'DELETE FROM "%s" WHERE %s;',
      $this->table,
      implode(' AND ', $this->where)
    );
  }
}
