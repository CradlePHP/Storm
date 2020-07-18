<?php //-->
/**
 * This file is part of the Cradle PHP Library.
 * (c) 2016-2018 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */

namespace Cradle\Storm\Query\PostGreSql;

use Cradle\Storm\Query\QueryInterface;
use Cradle\Storm\Query\AbstractQuery;

/**
 * Generates utility query strings
 *
 * @vendor   Cradle
 * @package  Storm
 * @author   Christian Blanquera <cblanquera@openovate.com>
 * @standard PSR-2
 */
class Utility extends AbstractQuery implements QueryInterface
{
  /**
   * @var ?string $query The query string
   */
  protected $query = null;

  /**
   * Query for dropping a table
   *
   * @param *string $table The name of the table
   *
   * @return QueryInterface
   */
  public function dropTable(string $table): QueryInterface
  {
    $this->query = sprintf('DROP TABLE "%s"', $table);
    return $this;
  }

  /**
   * Returns the string version of the query
   *
   * @return string
   */
  public function getQuery(): string
  {
    return sprintf('%s;', $this->query);
  }

  /**
   * Query for renaming a table
   *
   * @param *string $table The name of the table
   * @param *string $name  The new name of the table
   *
   * @return QueryInterface
   */
  public function renameTable(string $table, string $name): QueryInterface
  {
    $this->query = sprintf('RENAME TABLE "%s" TO "%s"', $table, $name);
    return $this;
  }

  /**
   * Specify the schema
   *
   * @param *string $schema The schema name
   *
   * @return QueryInterface
   */
  public function setSchema(string $schema): QueryInterface
  {
    $this->query = sprintf('SET search_path TO %s', $schema);
    return $this;
  }

  /**
   * Query for truncating a table
   *
   * @param *string $table The name of the table
   *
   * @return QueryInterface
   */
  public function truncate(string $table): QueryInterface
  {
    $this->query = sprintf('TRUNCATE "%s"', $table);
    return $this;
  }
}
