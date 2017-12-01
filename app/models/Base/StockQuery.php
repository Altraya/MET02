<?php

namespace Base;

use \Stock as ChildStock;
use \StockQuery as ChildStockQuery;
use \Exception;
use Map\StockTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'stock' table.
 *
 *
 *
 * @method     ChildStockQuery orderByIdshop($order = Criteria::ASC) Order by the idShop column
 * @method     ChildStockQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 * @method     ChildStockQuery orderByIdarticle($order = Criteria::ASC) Order by the idArticle column
 *
 * @method     ChildStockQuery groupByIdshop() Group by the idShop column
 * @method     ChildStockQuery groupByQuantity() Group by the quantity column
 * @method     ChildStockQuery groupByIdarticle() Group by the idArticle column
 *
 * @method     ChildStockQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildStockQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildStockQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildStockQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildStockQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildStockQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildStock findOne(ConnectionInterface $con = null) Return the first ChildStock matching the query
 * @method     ChildStock findOneOrCreate(ConnectionInterface $con = null) Return the first ChildStock matching the query, or a new ChildStock object populated from the query conditions when no match is found
 *
 * @method     ChildStock findOneByIdshop(int $idShop) Return the first ChildStock filtered by the idShop column
 * @method     ChildStock findOneByQuantity(int $quantity) Return the first ChildStock filtered by the quantity column
 * @method     ChildStock findOneByIdarticle(int $idArticle) Return the first ChildStock filtered by the idArticle column *

 * @method     ChildStock requirePk($key, ConnectionInterface $con = null) Return the ChildStock by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStock requireOne(ConnectionInterface $con = null) Return the first ChildStock matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildStock requireOneByIdshop(int $idShop) Return the first ChildStock filtered by the idShop column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStock requireOneByQuantity(int $quantity) Return the first ChildStock filtered by the quantity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildStock requireOneByIdarticle(int $idArticle) Return the first ChildStock filtered by the idArticle column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildStock[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildStock objects based on current ModelCriteria
 * @method     ChildStock[]|ObjectCollection findByIdshop(int $idShop) Return ChildStock objects filtered by the idShop column
 * @method     ChildStock[]|ObjectCollection findByQuantity(int $quantity) Return ChildStock objects filtered by the quantity column
 * @method     ChildStock[]|ObjectCollection findByIdarticle(int $idArticle) Return ChildStock objects filtered by the idArticle column
 * @method     ChildStock[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class StockQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\StockQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Stock', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildStockQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildStockQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildStockQuery) {
            return $criteria;
        }
        $query = new ChildStockQuery();
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
     * @return ChildStock|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The Stock object has no primary key');
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
        throw new LogicException('The Stock object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildStockQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The Stock object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildStockQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The Stock object has no primary key');
    }

    /**
     * Filter the query on the idShop column
     *
     * Example usage:
     * <code>
     * $query->filterByIdshop(1234); // WHERE idShop = 1234
     * $query->filterByIdshop(array(12, 34)); // WHERE idShop IN (12, 34)
     * $query->filterByIdshop(array('min' => 12)); // WHERE idShop > 12
     * </code>
     *
     * @param     mixed $idshop The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildStockQuery The current query, for fluid interface
     */
    public function filterByIdshop($idshop = null, $comparison = null)
    {
        if (is_array($idshop)) {
            $useMinMax = false;
            if (isset($idshop['min'])) {
                $this->addUsingAlias(StockTableMap::COL_IDSHOP, $idshop['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idshop['max'])) {
                $this->addUsingAlias(StockTableMap::COL_IDSHOP, $idshop['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StockTableMap::COL_IDSHOP, $idshop, $comparison);
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
     * @return $this|ChildStockQuery The current query, for fluid interface
     */
    public function filterByQuantity($quantity = null, $comparison = null)
    {
        if (is_array($quantity)) {
            $useMinMax = false;
            if (isset($quantity['min'])) {
                $this->addUsingAlias(StockTableMap::COL_QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantity['max'])) {
                $this->addUsingAlias(StockTableMap::COL_QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StockTableMap::COL_QUANTITY, $quantity, $comparison);
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
     * @return $this|ChildStockQuery The current query, for fluid interface
     */
    public function filterByIdarticle($idarticle = null, $comparison = null)
    {
        if (is_array($idarticle)) {
            $useMinMax = false;
            if (isset($idarticle['min'])) {
                $this->addUsingAlias(StockTableMap::COL_IDARTICLE, $idarticle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idarticle['max'])) {
                $this->addUsingAlias(StockTableMap::COL_IDARTICLE, $idarticle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StockTableMap::COL_IDARTICLE, $idarticle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildStock $stock Object to remove from the list of results
     *
     * @return $this|ChildStockQuery The current query, for fluid interface
     */
    public function prune($stock = null)
    {
        if ($stock) {
            throw new LogicException('Stock object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the stock table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(StockTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            StockTableMap::clearInstancePool();
            StockTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(StockTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(StockTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            StockTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            StockTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // StockQuery
