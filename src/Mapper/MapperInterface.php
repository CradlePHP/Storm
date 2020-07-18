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

/**
 * AbstractFilter
 *
 * @vendor   Cradle
 * @package  Storm
 * @author   Christian Blanquera <cblanquera@openovate.com>
 * @standard PSR-2
 */
interface MapperInterface
{
  /**
   * Builds query based on the data given
   *
   * @return string
   */
  public function getQuery(): QueryInterface;

  /**
   * Queries the database
   *
   * @param ?callable $fetch Whether to fetch all the rows
   *
   * @return array|MapperInterface
   */
  public function query(?callable $fetch = null);

  /**
   * Sets Table Name
   *
   * @param *string $table Table class name
   *
   * @return MapperInterface
   */
  public function setTable(string $table): MapperInterface;
}