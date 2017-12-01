<?php

namespace Base;

use \Address as ChildAddress;
use \AddressQuery as ChildAddressQuery;
use \Exception;
use \PDO;
use Map\AddressTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'address' table.
 *
 *
 *
 * @method     ChildAddressQuery orderByIdadress($order = Criteria::ASC) Order by the idAdress column
 * @method     ChildAddressQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method     ChildAddressQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     ChildAddressQuery orderByPostalcode($order = Criteria::ASC) Order by the postalcode column
 *
 * @method     ChildAddressQuery groupByIdadress() Group by the idAdress column
 * @method     ChildAddressQuery groupByAddress() Group by the address column
 * @method     ChildAddressQuery groupByCity() Group by the city column
 * @method     ChildAddressQuery groupByPostalcode() Group by the postalcode column
 *
 * @method     ChildAddressQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildAddressQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildAddressQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildAddressQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildAddressQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildAddressQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildAddress findOne(ConnectionInterface $con = null) Return the first ChildAddress matching the query
 * @method     ChildAddress findOneOrCreate(ConnectionInterface $con = null) Return the first ChildAddress matching the query, or a new ChildAddress object populated from the query conditions when no match is found
 *
 * @method     ChildAddress findOneByIdadress(int $idAdress) Return the first ChildAddress filtered by the idAdress column
 * @method     ChildAddress findOneByAddress(string $address) Return the first ChildAddress filtered by the address column
 * @method     ChildAddress findOneByCity(string $city) Return the first ChildAddress filtered by the city column
 * @method     ChildAddress findOneByPostalcode(int $postalcode) Return the first ChildAddress filtered by the postalcode column *

 * @method     ChildAddress requirePk($key, ConnectionInterface $con = null) Return the ChildAddress by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildAddress requireOne(ConnectionInterface $con = null) Return the first ChildAddress matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildAddress requireOneByIdadress(int $idAdress) Return the first ChildAddress filtered by the idAdress column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildAddress requireOneByAddress(string $address) Return the first ChildAddress filtered by the address column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildAddress requireOneByCity(string $city) Return the first ChildAddress filtered by the city column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildAddress requireOneByPostalcode(int $postalcode) Return the first ChildAddress filtered by the postalcode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildAddress[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildAddress objects based on current ModelCriteria
 * @method     ChildAddress[]|ObjectCollection findByIdadress(int $idAdress) Return ChildAddress objects filtered by the idAdress column
 * @method     ChildAddress[]|ObjectCollection findByAddress(string $address) Return ChildAddress objects filtered by the address column
 * @method     ChildAddress[]|ObjectCollection findByCity(string $city) Return ChildAddress objects filtered by the city column
 * @method     ChildAddress[]|ObjectCollection findByPostalcode(int $postalcode) Return ChildAddress objects filtered by the postalcode column
 * @method     ChildAddress[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class AddressQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\AddressQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Address', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildAddressQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildAddressQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildAddressQuery) {
            return $criteria;
        }
        $query = new ChildAddressQuery();
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
     * @return ChildAddress|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(AddressTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = AddressTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildAddress A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT idAdress, address, city, postalcode FROM address WHERE idAdress = :p0';
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
            /** @var ChildAddress $obj */
            $obj = new ChildAddress();
            $obj->hydrate($row);
            AddressTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildAddress|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildAddressQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AddressTableMap::COL_IDADRESS, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildAddressQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AddressTableMap::COL_IDADRESS, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idAdress column
     *
     * Example usage:
     * <code>
     * $query->filterByIdadress(1234); // WHERE idAdress = 1234
     * $query->filterByIdadress(array(12, 34)); // WHERE idAdress IN (12, 34)
     * $query->filterByIdadress(array('min' => 12)); // WHERE idAdress > 12
     * </code>
     *
     * @param     mixed $idadress The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildAddressQuery The current query, for fluid interface
     */
    public function filterByIdadress($idadress = null, $comparison = null)
    {
        if (is_array($idadress)) {
            $useMinMax = false;
            if (isset($idadress['min'])) {
                $this->addUsingAlias(AddressTableMap::COL_IDADRESS, $idadress['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idadress['max'])) {
                $this->addUsingAlias(AddressTableMap::COL_IDADRESS, $idadress['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AddressTableMap::COL_IDADRESS, $idadress, $comparison);
    }

    /**
     * Filter the query on the address column
     *
     * Example usage:
     * <code>
     * $query->filterByAddress('fooValue');   // WHERE address = 'fooValue'
     * $query->filterByAddress('%fooValue%', Criteria::LIKE); // WHERE address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $address The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildAddressQuery The current query, for fluid interface
     */
    public function filterByAddress($address = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AddressTableMap::COL_ADDRESS, $address, $comparison);
    }

    /**
     * Filter the query on the city column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
     * $query->filterByCity('%fooValue%', Criteria::LIKE); // WHERE city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildAddressQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AddressTableMap::COL_CITY, $city, $comparison);
    }

    /**
     * Filter the query on the postalcode column
     *
     * Example usage:
     * <code>
     * $query->filterByPostalcode(1234); // WHERE postalcode = 1234
     * $query->filterByPostalcode(array(12, 34)); // WHERE postalcode IN (12, 34)
     * $query->filterByPostalcode(array('min' => 12)); // WHERE postalcode > 12
     * </code>
     *
     * @param     mixed $postalcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildAddressQuery The current query, for fluid interface
     */
    public function filterByPostalcode($postalcode = null, $comparison = null)
    {
        if (is_array($postalcode)) {
            $useMinMax = false;
            if (isset($postalcode['min'])) {
                $this->addUsingAlias(AddressTableMap::COL_POSTALCODE, $postalcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postalcode['max'])) {
                $this->addUsingAlias(AddressTableMap::COL_POSTALCODE, $postalcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AddressTableMap::COL_POSTALCODE, $postalcode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildAddress $address Object to remove from the list of results
     *
     * @return $this|ChildAddressQuery The current query, for fluid interface
     */
    public function prune($address = null)
    {
        if ($address) {
            $this->addUsingAlias(AddressTableMap::COL_IDADRESS, $address->getIdadress(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the address table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(AddressTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AddressTableMap::clearInstancePool();
            AddressTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(AddressTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(AddressTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            AddressTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            AddressTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // AddressQuery
