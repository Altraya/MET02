<?php

namespace Base;

use \Card as ChildCard;
use \CardQuery as ChildCardQuery;
use \Exception;
use \PDO;
use Map\CardTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'card' table.
 *
 *
 *
 * @method     ChildCardQuery orderByIdcard($order = Criteria::ASC) Order by the idCard column
 * @method     ChildCardQuery orderByCardnumber($order = Criteria::ASC) Order by the cardNumber column
 * @method     ChildCardQuery orderByFirstnameowner($order = Criteria::ASC) Order by the firstNameOwner column
 * @method     ChildCardQuery orderByLastnameowner($order = Criteria::ASC) Order by the lastNameOwner column
 * @method     ChildCardQuery orderByExpirationmonth($order = Criteria::ASC) Order by the expirationMonth column
 * @method     ChildCardQuery orderByExpirationyear($order = Criteria::ASC) Order by the expirationYear column
 *
 * @method     ChildCardQuery groupByIdcard() Group by the idCard column
 * @method     ChildCardQuery groupByCardnumber() Group by the cardNumber column
 * @method     ChildCardQuery groupByFirstnameowner() Group by the firstNameOwner column
 * @method     ChildCardQuery groupByLastnameowner() Group by the lastNameOwner column
 * @method     ChildCardQuery groupByExpirationmonth() Group by the expirationMonth column
 * @method     ChildCardQuery groupByExpirationyear() Group by the expirationYear column
 *
 * @method     ChildCardQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCardQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCardQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCardQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCardQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCardQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCard findOne(ConnectionInterface $con = null) Return the first ChildCard matching the query
 * @method     ChildCard findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCard matching the query, or a new ChildCard object populated from the query conditions when no match is found
 *
 * @method     ChildCard findOneByIdcard(int $idCard) Return the first ChildCard filtered by the idCard column
 * @method     ChildCard findOneByCardnumber(string $cardNumber) Return the first ChildCard filtered by the cardNumber column
 * @method     ChildCard findOneByFirstnameowner(string $firstNameOwner) Return the first ChildCard filtered by the firstNameOwner column
 * @method     ChildCard findOneByLastnameowner(string $lastNameOwner) Return the first ChildCard filtered by the lastNameOwner column
 * @method     ChildCard findOneByExpirationmonth(int $expirationMonth) Return the first ChildCard filtered by the expirationMonth column
 * @method     ChildCard findOneByExpirationyear(int $expirationYear) Return the first ChildCard filtered by the expirationYear column *

 * @method     ChildCard requirePk($key, ConnectionInterface $con = null) Return the ChildCard by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCard requireOne(ConnectionInterface $con = null) Return the first ChildCard matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCard requireOneByIdcard(int $idCard) Return the first ChildCard filtered by the idCard column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCard requireOneByCardnumber(string $cardNumber) Return the first ChildCard filtered by the cardNumber column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCard requireOneByFirstnameowner(string $firstNameOwner) Return the first ChildCard filtered by the firstNameOwner column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCard requireOneByLastnameowner(string $lastNameOwner) Return the first ChildCard filtered by the lastNameOwner column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCard requireOneByExpirationmonth(int $expirationMonth) Return the first ChildCard filtered by the expirationMonth column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCard requireOneByExpirationyear(int $expirationYear) Return the first ChildCard filtered by the expirationYear column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCard[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCard objects based on current ModelCriteria
 * @method     ChildCard[]|ObjectCollection findByIdcard(int $idCard) Return ChildCard objects filtered by the idCard column
 * @method     ChildCard[]|ObjectCollection findByCardnumber(string $cardNumber) Return ChildCard objects filtered by the cardNumber column
 * @method     ChildCard[]|ObjectCollection findByFirstnameowner(string $firstNameOwner) Return ChildCard objects filtered by the firstNameOwner column
 * @method     ChildCard[]|ObjectCollection findByLastnameowner(string $lastNameOwner) Return ChildCard objects filtered by the lastNameOwner column
 * @method     ChildCard[]|ObjectCollection findByExpirationmonth(int $expirationMonth) Return ChildCard objects filtered by the expirationMonth column
 * @method     ChildCard[]|ObjectCollection findByExpirationyear(int $expirationYear) Return ChildCard objects filtered by the expirationYear column
 * @method     ChildCard[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CardQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CardQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Card', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCardQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCardQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCardQuery) {
            return $criteria;
        }
        $query = new ChildCardQuery();
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
     * @return ChildCard|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CardTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CardTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCard A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT idCard, cardNumber, firstNameOwner, lastNameOwner, expirationMonth, expirationYear FROM card WHERE idCard = :p0';
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
            /** @var ChildCard $obj */
            $obj = new ChildCard();
            $obj->hydrate($row);
            CardTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCard|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCardQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CardTableMap::COL_IDCARD, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCardQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CardTableMap::COL_IDCARD, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idCard column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcard(1234); // WHERE idCard = 1234
     * $query->filterByIdcard(array(12, 34)); // WHERE idCard IN (12, 34)
     * $query->filterByIdcard(array('min' => 12)); // WHERE idCard > 12
     * </code>
     *
     * @param     mixed $idcard The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCardQuery The current query, for fluid interface
     */
    public function filterByIdcard($idcard = null, $comparison = null)
    {
        if (is_array($idcard)) {
            $useMinMax = false;
            if (isset($idcard['min'])) {
                $this->addUsingAlias(CardTableMap::COL_IDCARD, $idcard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcard['max'])) {
                $this->addUsingAlias(CardTableMap::COL_IDCARD, $idcard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CardTableMap::COL_IDCARD, $idcard, $comparison);
    }

    /**
     * Filter the query on the cardNumber column
     *
     * Example usage:
     * <code>
     * $query->filterByCardnumber('fooValue');   // WHERE cardNumber = 'fooValue'
     * $query->filterByCardnumber('%fooValue%', Criteria::LIKE); // WHERE cardNumber LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cardnumber The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCardQuery The current query, for fluid interface
     */
    public function filterByCardnumber($cardnumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cardnumber)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CardTableMap::COL_CARDNUMBER, $cardnumber, $comparison);
    }

    /**
     * Filter the query on the firstNameOwner column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstnameowner('fooValue');   // WHERE firstNameOwner = 'fooValue'
     * $query->filterByFirstnameowner('%fooValue%', Criteria::LIKE); // WHERE firstNameOwner LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstnameowner The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCardQuery The current query, for fluid interface
     */
    public function filterByFirstnameowner($firstnameowner = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firstnameowner)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CardTableMap::COL_FIRSTNAMEOWNER, $firstnameowner, $comparison);
    }

    /**
     * Filter the query on the lastNameOwner column
     *
     * Example usage:
     * <code>
     * $query->filterByLastnameowner('fooValue');   // WHERE lastNameOwner = 'fooValue'
     * $query->filterByLastnameowner('%fooValue%', Criteria::LIKE); // WHERE lastNameOwner LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lastnameowner The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCardQuery The current query, for fluid interface
     */
    public function filterByLastnameowner($lastnameowner = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lastnameowner)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CardTableMap::COL_LASTNAMEOWNER, $lastnameowner, $comparison);
    }

    /**
     * Filter the query on the expirationMonth column
     *
     * Example usage:
     * <code>
     * $query->filterByExpirationmonth(1234); // WHERE expirationMonth = 1234
     * $query->filterByExpirationmonth(array(12, 34)); // WHERE expirationMonth IN (12, 34)
     * $query->filterByExpirationmonth(array('min' => 12)); // WHERE expirationMonth > 12
     * </code>
     *
     * @param     mixed $expirationmonth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCardQuery The current query, for fluid interface
     */
    public function filterByExpirationmonth($expirationmonth = null, $comparison = null)
    {
        if (is_array($expirationmonth)) {
            $useMinMax = false;
            if (isset($expirationmonth['min'])) {
                $this->addUsingAlias(CardTableMap::COL_EXPIRATIONMONTH, $expirationmonth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expirationmonth['max'])) {
                $this->addUsingAlias(CardTableMap::COL_EXPIRATIONMONTH, $expirationmonth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CardTableMap::COL_EXPIRATIONMONTH, $expirationmonth, $comparison);
    }

    /**
     * Filter the query on the expirationYear column
     *
     * Example usage:
     * <code>
     * $query->filterByExpirationyear(1234); // WHERE expirationYear = 1234
     * $query->filterByExpirationyear(array(12, 34)); // WHERE expirationYear IN (12, 34)
     * $query->filterByExpirationyear(array('min' => 12)); // WHERE expirationYear > 12
     * </code>
     *
     * @param     mixed $expirationyear The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCardQuery The current query, for fluid interface
     */
    public function filterByExpirationyear($expirationyear = null, $comparison = null)
    {
        if (is_array($expirationyear)) {
            $useMinMax = false;
            if (isset($expirationyear['min'])) {
                $this->addUsingAlias(CardTableMap::COL_EXPIRATIONYEAR, $expirationyear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expirationyear['max'])) {
                $this->addUsingAlias(CardTableMap::COL_EXPIRATIONYEAR, $expirationyear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CardTableMap::COL_EXPIRATIONYEAR, $expirationyear, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCard $card Object to remove from the list of results
     *
     * @return $this|ChildCardQuery The current query, for fluid interface
     */
    public function prune($card = null)
    {
        if ($card) {
            $this->addUsingAlias(CardTableMap::COL_IDCARD, $card->getIdcard(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the card table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CardTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CardTableMap::clearInstancePool();
            CardTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CardTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CardTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CardTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CardTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CardQuery
