<?php

namespace Base;

use \Usersadresses as ChildUsersadresses;
use \UsersadressesQuery as ChildUsersadressesQuery;
use \Exception;
use \PDO;
use Map\UsersadressesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'usersAdresses' table.
 *
 *
 *
 * @method     ChildUsersadressesQuery orderByIduser($order = Criteria::ASC) Order by the idUser column
 * @method     ChildUsersadressesQuery orderByIdaddress($order = Criteria::ASC) Order by the idAddress column
 *
 * @method     ChildUsersadressesQuery groupByIduser() Group by the idUser column
 * @method     ChildUsersadressesQuery groupByIdaddress() Group by the idAddress column
 *
 * @method     ChildUsersadressesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildUsersadressesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildUsersadressesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildUsersadressesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildUsersadressesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildUsersadressesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildUsersadresses findOne(ConnectionInterface $con = null) Return the first ChildUsersadresses matching the query
 * @method     ChildUsersadresses findOneOrCreate(ConnectionInterface $con = null) Return the first ChildUsersadresses matching the query, or a new ChildUsersadresses object populated from the query conditions when no match is found
 *
 * @method     ChildUsersadresses findOneByIduser(int $idUser) Return the first ChildUsersadresses filtered by the idUser column
 * @method     ChildUsersadresses findOneByIdaddress(int $idAddress) Return the first ChildUsersadresses filtered by the idAddress column *

 * @method     ChildUsersadresses requirePk($key, ConnectionInterface $con = null) Return the ChildUsersadresses by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUsersadresses requireOne(ConnectionInterface $con = null) Return the first ChildUsersadresses matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildUsersadresses requireOneByIduser(int $idUser) Return the first ChildUsersadresses filtered by the idUser column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildUsersadresses requireOneByIdaddress(int $idAddress) Return the first ChildUsersadresses filtered by the idAddress column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildUsersadresses[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildUsersadresses objects based on current ModelCriteria
 * @method     ChildUsersadresses[]|ObjectCollection findByIduser(int $idUser) Return ChildUsersadresses objects filtered by the idUser column
 * @method     ChildUsersadresses[]|ObjectCollection findByIdaddress(int $idAddress) Return ChildUsersadresses objects filtered by the idAddress column
 * @method     ChildUsersadresses[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class UsersadressesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\UsersadressesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Usersadresses', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildUsersadressesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildUsersadressesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildUsersadressesQuery) {
            return $criteria;
        }
        $query = new ChildUsersadressesQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$idUser, $idAddress] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildUsersadresses|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(UsersadressesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = UsersadressesTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildUsersadresses A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT idUser, idAddress FROM usersAdresses WHERE idUser = :p0 AND idAddress = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildUsersadresses $obj */
            $obj = new ChildUsersadresses();
            $obj->hydrate($row);
            UsersadressesTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildUsersadresses|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return $this|ChildUsersadressesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(UsersadressesTableMap::COL_IDUSER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(UsersadressesTableMap::COL_IDADDRESS, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildUsersadressesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(UsersadressesTableMap::COL_IDUSER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(UsersadressesTableMap::COL_IDADDRESS, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the idUser column
     *
     * Example usage:
     * <code>
     * $query->filterByIduser(1234); // WHERE idUser = 1234
     * $query->filterByIduser(array(12, 34)); // WHERE idUser IN (12, 34)
     * $query->filterByIduser(array('min' => 12)); // WHERE idUser > 12
     * </code>
     *
     * @param     mixed $iduser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUsersadressesQuery The current query, for fluid interface
     */
    public function filterByIduser($iduser = null, $comparison = null)
    {
        if (is_array($iduser)) {
            $useMinMax = false;
            if (isset($iduser['min'])) {
                $this->addUsingAlias(UsersadressesTableMap::COL_IDUSER, $iduser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iduser['max'])) {
                $this->addUsingAlias(UsersadressesTableMap::COL_IDUSER, $iduser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsersadressesTableMap::COL_IDUSER, $iduser, $comparison);
    }

    /**
     * Filter the query on the idAddress column
     *
     * Example usage:
     * <code>
     * $query->filterByIdaddress(1234); // WHERE idAddress = 1234
     * $query->filterByIdaddress(array(12, 34)); // WHERE idAddress IN (12, 34)
     * $query->filterByIdaddress(array('min' => 12)); // WHERE idAddress > 12
     * </code>
     *
     * @param     mixed $idaddress The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildUsersadressesQuery The current query, for fluid interface
     */
    public function filterByIdaddress($idaddress = null, $comparison = null)
    {
        if (is_array($idaddress)) {
            $useMinMax = false;
            if (isset($idaddress['min'])) {
                $this->addUsingAlias(UsersadressesTableMap::COL_IDADDRESS, $idaddress['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idaddress['max'])) {
                $this->addUsingAlias(UsersadressesTableMap::COL_IDADDRESS, $idaddress['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsersadressesTableMap::COL_IDADDRESS, $idaddress, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildUsersadresses $usersadresses Object to remove from the list of results
     *
     * @return $this|ChildUsersadressesQuery The current query, for fluid interface
     */
    public function prune($usersadresses = null)
    {
        if ($usersadresses) {
            $this->addCond('pruneCond0', $this->getAliasedColName(UsersadressesTableMap::COL_IDUSER), $usersadresses->getIduser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(UsersadressesTableMap::COL_IDADDRESS), $usersadresses->getIdaddress(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the usersAdresses table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(UsersadressesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            UsersadressesTableMap::clearInstancePool();
            UsersadressesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(UsersadressesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(UsersadressesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            UsersadressesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            UsersadressesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // UsersadressesQuery
