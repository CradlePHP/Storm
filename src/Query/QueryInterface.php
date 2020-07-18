<?php //-->
/**
 * This file is part of the Cradle PHP Library.
 * (c) 2016-2018 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */

namespace Cradle\Storm\Query;

/**
 * Generates select query string syntax
 *
 * @vendor   Cradle
 * @package  Storm
 * @author   Christian Blanquera <cblanquera@openovate.com>
 * @standard PSR-2
 */
interface QueryInterface
{
  /**
   * Transform class to string using getQuery
   *
   * @return string
   */
  public function __toString(): string;

  /**
   * Returns the string version of the query
   *
   * @return string
   */
  public function getQuery(): string;

  /**
   * Set the table name in which you want to delete from
   *
   * @param string $table The table name
   *
   * @return QueryInterface
   */
  public function setTable(string $table): QueryInterface;
}