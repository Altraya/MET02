<?php

namespace Base;

use \Commandline as ChildCommandline;
use \CommandlineQuery as ChildCommandlineQuery;
use \Exception;
use Map\CommandlineTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'commandLine' table.
 *
 *
 *
 * @method     ChildCommandlineQuery orderByIdcommand($order = Criteria::ASC) Order by the idCommand column
 * @method     ChildCommandlineQuery orderByIdarticle($order = Criteria::ASC) Order by the idArticle column
 * @method     ChildCommandlineQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 *
 * @method     ChildCommandlineQuery groupByIdcommand() Group by the idCommand column
 * @method     ChildCommandlineQuery groupByIdarticle() Group by the idArticle column
 * @method     ChildCommandlineQuery groupByQuantity() Group by the quantity column
 *
 * @method     ChildCommandlineQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCommandlineQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCommandlineQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCommandlineQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCommandlineQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCommandlineQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCommandline findOne(ConnectionInterface $con = null) Return the first ChildCommandline matching the query
 * @method     ChildCommandline findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCommandline matching the query, or a new ChildCommandline object populated from the query conditions when no match is found
 *
 * @method     ChildCommandline findOneByIdcommand(int $idCommand) Return the first ChildCommandline filtered by the idCommand column
 * @method     ChildCommandline findOneByIdarticle(int $idArticle) Return the first ChildCommandline filtered by the idArticle column
 * @method     ChildCommandline findOneByQuantity(int $quantity) Return the first ChildCommandline filtered by the quantity column *

 * @method     ChildCommandline requirePk($key, ConnectionInterface $con = null) Return the ChildCommandline by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCommandline requireOne(ConnectionInterface $con = null) Return the first ChildCommandline matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCommandline requireOneByIdcommand(int $idCommand) Return the first ChildCommandline filtered by the idCommand column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCommandline requireOneByIdarticle(int $idArticle) Return the first ChildCommandline filtered by the idArticle column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCommandline requireOneByQuantity(int $quantity) Return the first ChildCommandline filtered by the quantity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCommandline[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCommandline objects based on current ModelCriteria
 * @method     ChildCommandline[]|ObjectCollection findByIdcommand(int $idCommand) Return ChildCommandline objects filtered by the idCommand column
 * @method     ChildCommandline[]|ObjectCollection findByIdarticle(int $idArticle) Return ChildCommandline objects filtered by the idArticle column
 * @method     ChildCommandline[]|ObjectCollection findByQuantity(int $quantity) Return ChildCommandline objects filtered by the quantity column
 * @method     ChildCommandline[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CommandlineQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CommandlineQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Commandline', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCommandlineQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCommandlineQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCommandlineQuery) {
            return $criteria;
        }
        $query = new ChildCommandlineQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCommandline|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The Commandline object has no primary key');
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        throw new LogicException('The Commandline object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCommandlineQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The Commandline object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCommandlineQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The Commandline object has no primary key');
    }

    /**
     * Filter the query on the idCommand column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcommand(1234); // WHERE idCommand = 1234
     * $query->filterByIdcommand(array(12, 34)); // WHERE idCommand IN (12, 34)
     * $query->filterByIdcommand(array('min' => 12)); // WHERE idCommand > 12
     * </code>
     *
     * @param     mixed $idcommand The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCommandlineQuery The current query, for fluid interface
     */
    public function filterByIdcommand($idcommand = null, $comparison = null)
    {
        if (is_array($idcommand)) {
            $useMinMax = false;
            if (isset($idcommand['min'])) {
                $this->addUsingAlias(CommandlineTableMap::COL_IDCOMMAND, $idcommand['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcommand['max'])) {
                $this->addUsingAlias(CommandlineTableMap::COL_IDCOMMAND, $idcommand['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommandlineTableMap::COL_IDCOMMAND, $idcommand, $comparison);
    }

    /**
     * Filter the query on the idArticle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdarticle(1234); // WHERE idArticle = 1234
     * $query->filterByIdarticle(array(12, 34)); // WHERE idArticle IN (12, 34)
     * $query->filterByIdarticle(array('min' => 12)); // WHERE idArticle > 12
     * </code>
     *
     * @param     mixed $idarticle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCommandlineQuery The current query, for fluid interface
     */
    public function filterByIdarticle($idarticle = null, $comparison = null)
    {
        if (is_array($idarticle)) {
            $useMinMax = false;
            if (isset($idarticle['min'])) {
                $this->addUsingAlias(CommandlineTableMap::COL_IDARTICLE, $idarticle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idarticle['max'])) {
                $this->addUsingAlias(CommandlineTableMap::COL_IDARTICLE, $idarticle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommandlineTableMap::COL_IDARTICLE, $idarticle, $comparison);
    }

    /**
     * Filter the query on the quantity column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantity(1234); // WHERE quantity = 1234
     * $query->filterByQuantity(array(12, 34)); // WHERE quantity IN (12, 34)
     * $query->filterByQuantity(array('min' => 12)); // WHERE quantity > 12
     * </code>
     *
     * @param     mixed $quantity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCommandlineQuery The current query, for fluid interface
     */
    public function filterByQuantity($quantity = null, $comparison = null)
    {
        if (is_array($quantity)) {
            $useMinMax = false;
            if (isset($quantity['min'])) {
                $this->addUsingAlias(CommandlineTableMap::COL_QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantity['max'])) {
                $this->addUsingAlias(CommandlineTableMap::COL_QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommandlineTableMap::COL_QUANTITY, $quantity, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCommandline $commandline Object to remove from the list of results
     *
     * @return $this|ChildCommandlineQuery The current query, for fluid interface
     */
    public function prune($commandline = null)
    {
        if ($commandline) {
            throw new LogicException('Commandline object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the commandLine table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CommandlineTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommandlineTableMap::clearInstancePool();
            CommandlineTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CommandlineTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CommandlineTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CommandlineTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CommandlineTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CommandlineQuery
