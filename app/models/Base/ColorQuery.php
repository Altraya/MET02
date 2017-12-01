<?php

namespace Base;

use \Color as ChildColor;
use \ColorQuery as ChildColorQuery;
use \Exception;
use \PDO;
use Map\ColorTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'color' table.
 *
 *
 *
 * @method     ChildColorQuery orderByIdcolor($order = Criteria::ASC) Order by the idColor column
 * @method     ChildColorQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method     ChildColorQuery groupByIdcolor() Group by the idColor column
 * @method     ChildColorQuery groupByName() Group by the name column
 *
 * @method     ChildColorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildColorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildColorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildColorQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildColorQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildColorQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildColor findOne(ConnectionInterface $con = null) Return the first ChildColor matching the query
 * @method     ChildColor findOneOrCreate(ConnectionInterface $con = null) Return the first ChildColor matching the query, or a new ChildColor object populated from the query conditions when no match is found
 *
 * @method     ChildColor findOneByIdcolor(int $idColor) Return the first ChildColor filtered by the idColor column
 * @method     ChildColor findOneByName(string $name) Return the first ChildColor filtered by the name column *

 * @method     ChildColor requirePk($key, ConnectionInterface $con = null) Return the ChildColor by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildColor requireOne(ConnectionInterface $con = null) Return the first ChildColor matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildColor requireOneByIdcolor(int $idColor) Return the first ChildColor filtered by the idColor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildColor requireOneByName(string $name) Return the first ChildColor filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildColor[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildColor objects based on current ModelCriteria
 * @method     ChildColor[]|ObjectCollection findByIdcolor(int $idColor) Return ChildColor objects filtered by the idColor column
 * @method     ChildColor[]|ObjectCollection findByName(string $name) Return ChildColor objects filtered by the name column
 * @method     ChildColor[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ColorQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ColorQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Color', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildColorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildColorQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildColorQuery) {
            return $criteria;
        }
        $query = new ChildColorQuery();
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
     * @return ChildColor|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ColorTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ColorTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildColor A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT idColor, name FROM color WHERE idColor = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildColor $obj */
            $obj = new ChildColor();
            $obj->hydrate($row);
            ColorTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildColor|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildColorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ColorTableMap::COL_IDCOLOR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildColorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ColorTableMap::COL_IDCOLOR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idColor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcolor(1234); // WHERE idColor = 1234
     * $query->filterByIdcolor(array(12, 34)); // WHERE idColor IN (12, 34)
     * $query->filterByIdcolor(array('min' => 12)); // WHERE idColor > 12
     * </code>
     *
     * @param     mixed $idcolor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildColorQuery The current query, for fluid interface
     */
    public function filterByIdcolor($idcolor = null, $comparison = null)
    {
        if (is_array($idcolor)) {
            $useMinMax = false;
            if (isset($idcolor['min'])) {
                $this->addUsingAlias(ColorTableMap::COL_IDCOLOR, $idcolor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcolor['max'])) {
                $this->addUsingAlias(ColorTableMap::COL_IDCOLOR, $idcolor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ColorTableMap::COL_IDCOLOR, $idcolor, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildColorQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ColorTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildColor $color Object to remove from the list of results
     *
     * @return $this|ChildColorQuery The current query, for fluid interface
     */
    public function prune($color = null)
    {
        if ($color) {
            $this->addUsingAlias(ColorTableMap::COL_IDCOLOR, $color->getIdcolor(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the color table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ColorTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ColorTableMap::clearInstancePool();
            ColorTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ColorTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ColorTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ColorTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ColorTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ColorQuery
