<?php

namespace Base;

use \Command as ChildCommand;
use \CommandQuery as ChildCommandQuery;
use \Exception;
use \PDO;
use Map\CommandTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'command' table.
 *
 *
 *
 * @method     ChildCommandQuery orderByIdcommand($order = Criteria::ASC) Order by the idCommand column
 * @method     ChildCommandQuery orderByDatecommand($order = Criteria::ASC) Order by the dateCommand column
 * @method     ChildCommandQuery orderByTotalamount($order = Criteria::ASC) Order by the totalAmount column
 * @method     ChildCommandQuery orderByInvoiced($order = Criteria::ASC) Order by the invoiced column
 * @method     ChildCommandQuery orderByCardid($order = Criteria::ASC) Order by the cardId column
 * @method     ChildCommandQuery orderByInvoiceid($order = Criteria::ASC) Order by the invoiceId column
 * @method     ChildCommandQuery orderByUserid($order = Criteria::ASC) Order by the userId column
 * @method     ChildCommandQuery orderByInvoiceaddressid($order = Criteria::ASC) Order by the invoiceAddressId column
 * @method     ChildCommandQuery orderByShiptoaddressid($order = Criteria::ASC) Order by the shipToAddressId column
 *
 * @method     ChildCommandQuery groupByIdcommand() Group by the idCommand column
 * @method     ChildCommandQuery groupByDatecommand() Group by the dateCommand column
 * @method     ChildCommandQuery groupByTotalamount() Group by the totalAmount column
 * @method     ChildCommandQuery groupByInvoiced() Group by the invoiced column
 * @method     ChildCommandQuery groupByCardid() Group by the cardId column
 * @method     ChildCommandQuery groupByInvoiceid() Group by the invoiceId column
 * @method     ChildCommandQuery groupByUserid() Group by the userId column
 * @method     ChildCommandQuery groupByInvoiceaddressid() Group by the invoiceAddressId column
 * @method     ChildCommandQuery groupByShiptoaddressid() Group by the shipToAddressId column
 *
 * @method     ChildCommandQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCommandQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCommandQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCommandQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCommandQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCommandQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCommand findOne(ConnectionInterface $con = null) Return the first ChildCommand matching the query
 * @method     ChildCommand findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCommand matching the query, or a new ChildCommand object populated from the query conditions when no match is found
 *
 * @method     ChildCommand findOneByIdcommand(int $idCommand) Return the first ChildCommand filtered by the idCommand column
 * @method     ChildCommand findOneByDatecommand(string $dateCommand) Return the first ChildCommand filtered by the dateCommand column
 * @method     ChildCommand findOneByTotalamount(string $totalAmount) Return the first ChildCommand filtered by the totalAmount column
 * @method     ChildCommand findOneByInvoiced(boolean $invoiced) Return the first ChildCommand filtered by the invoiced column
 * @method     ChildCommand findOneByCardid(int $cardId) Return the first ChildCommand filtered by the cardId column
 * @method     ChildCommand findOneByInvoiceid(int $invoiceId) Return the first ChildCommand filtered by the invoiceId column
 * @method     ChildCommand findOneByUserid(int $userId) Return the first ChildCommand filtered by the userId column
 * @method     ChildCommand findOneByInvoiceaddressid(int $invoiceAddressId) Return the first ChildCommand filtered by the invoiceAddressId column
 * @method     ChildCommand findOneByShiptoaddressid(int $shipToAddressId) Return the first ChildCommand filtered by the shipToAddressId column *

 * @method     ChildCommand requirePk($key, ConnectionInterface $con = null) Return the ChildCommand by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCommand requireOne(ConnectionInterface $con = null) Return the first ChildCommand matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCommand requireOneByIdcommand(int $idCommand) Return the first ChildCommand filtered by the idCommand column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCommand requireOneByDatecommand(string $dateCommand) Return the first ChildCommand filtered by the dateCommand column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCommand requireOneByTotalamount(string $totalAmount) Return the first ChildCommand filtered by the totalAmount column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCommand requireOneByInvoiced(boolean $invoiced) Return the first ChildCommand filtered by the invoiced column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCommand requireOneByCardid(int $cardId) Return the first ChildCommand filtered by the cardId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCommand requireOneByInvoiceid(int $invoiceId) Return the first ChildCommand filtered by the invoiceId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCommand requireOneByUserid(int $userId) Return the first ChildCommand filtered by the userId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCommand requireOneByInvoiceaddressid(int $invoiceAddressId) Return the first ChildCommand filtered by the invoiceAddressId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCommand requireOneByShiptoaddressid(int $shipToAddressId) Return the first ChildCommand filtered by the shipToAddressId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCommand[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCommand objects based on current ModelCriteria
 * @method     ChildCommand[]|ObjectCollection findByIdcommand(int $idCommand) Return ChildCommand objects filtered by the idCommand column
 * @method     ChildCommand[]|ObjectCollection findByDatecommand(string $dateCommand) Return ChildCommand objects filtered by the dateCommand column
 * @method     ChildCommand[]|ObjectCollection findByTotalamount(string $totalAmount) Return ChildCommand objects filtered by the totalAmount column
 * @method     ChildCommand[]|ObjectCollection findByInvoiced(boolean $invoiced) Return ChildCommand objects filtered by the invoiced column
 * @method     ChildCommand[]|ObjectCollection findByCardid(int $cardId) Return ChildCommand objects filtered by the cardId column
 * @method     ChildCommand[]|ObjectCollection findByInvoiceid(int $invoiceId) Return ChildCommand objects filtered by the invoiceId column
 * @method     ChildCommand[]|ObjectCollection findByUserid(int $userId) Return ChildCommand objects filtered by the userId column
 * @method     ChildCommand[]|ObjectCollection findByInvoiceaddressid(int $invoiceAddressId) Return ChildCommand objects filtered by the invoiceAddressId column
 * @method     ChildCommand[]|ObjectCollection findByShiptoaddressid(int $shipToAddressId) Return ChildCommand objects filtered by the shipToAddressId column
 * @method     ChildCommand[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CommandQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CommandQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Command', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCommandQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCommandQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCommandQuery) {
            return $criteria;
        }
        $query = new ChildCommandQuery();
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
     * @return ChildCommand|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CommandTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CommandTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCommand A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT idCommand, dateCommand, totalAmount, invoiced, cardId, invoiceId, userId, invoiceAddressId, shipToAddressId FROM command WHERE idCommand = :p0';
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
            /** @var ChildCommand $obj */
            $obj = new ChildCommand();
            $obj->hydrate($row);
            CommandTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCommand|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildCommandQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommandTableMap::COL_IDCOMMAND, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCommandQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommandTableMap::COL_IDCOMMAND, $keys, Criteria::IN);
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
     * @return $this|ChildCommandQuery The current query, for fluid interface
     */
    public function filterByIdcommand($idcommand = null, $comparison = null)
    {
        if (is_array($idcommand)) {
            $useMinMax = false;
            if (isset($idcommand['min'])) {
                $this->addUsingAlias(CommandTableMap::COL_IDCOMMAND, $idcommand['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcommand['max'])) {
                $this->addUsingAlias(CommandTableMap::COL_IDCOMMAND, $idcommand['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommandTableMap::COL_IDCOMMAND, $idcommand, $comparison);
    }

    /**
     * Filter the query on the dateCommand column
     *
     * Example usage:
     * <code>
     * $query->filterByDatecommand('2011-03-14'); // WHERE dateCommand = '2011-03-14'
     * $query->filterByDatecommand('now'); // WHERE dateCommand = '2011-03-14'
     * $query->filterByDatecommand(array('max' => 'yesterday')); // WHERE dateCommand > '2011-03-13'
     * </code>
     *
     * @param     mixed $datecommand The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCommandQuery The current query, for fluid interface
     */
    public function filterByDatecommand($datecommand = null, $comparison = null)
    {
        if (is_array($datecommand)) {
            $useMinMax = false;
            if (isset($datecommand['min'])) {
                $this->addUsingAlias(CommandTableMap::COL_DATECOMMAND, $datecommand['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datecommand['max'])) {
                $this->addUsingAlias(CommandTableMap::COL_DATECOMMAND, $datecommand['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommandTableMap::COL_DATECOMMAND, $datecommand, $comparison);
    }

    /**
     * Filter the query on the totalAmount column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalamount(1234); // WHERE totalAmount = 1234
     * $query->filterByTotalamount(array(12, 34)); // WHERE totalAmount IN (12, 34)
     * $query->filterByTotalamount(array('min' => 12)); // WHERE totalAmount > 12
     * </code>
     *
     * @param     mixed $totalamount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCommandQuery The current query, for fluid interface
     */
    public function filterByTotalamount($totalamount = null, $comparison = null)
    {
        if (is_array($totalamount)) {
            $useMinMax = false;
            if (isset($totalamount['min'])) {
                $this->addUsingAlias(CommandTableMap::COL_TOTALAMOUNT, $totalamount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalamount['max'])) {
                $this->addUsingAlias(CommandTableMap::COL_TOTALAMOUNT, $totalamount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommandTableMap::COL_TOTALAMOUNT, $totalamount, $comparison);
    }

    /**
     * Filter the query on the invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByInvoiced(true); // WHERE invoiced = true
     * $query->filterByInvoiced('yes'); // WHERE invoiced = true
     * </code>
     *
     * @param     boolean|string $invoiced The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCommandQuery The current query, for fluid interface
     */
    public function filterByInvoiced($invoiced = null, $comparison = null)
    {
        if (is_string($invoiced)) {
            $invoiced = in_array(strtolower($invoiced), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommandTableMap::COL_INVOICED, $invoiced, $comparison);
    }

    /**
     * Filter the query on the cardId column
     *
     * Example usage:
     * <code>
     * $query->filterByCardid(1234); // WHERE cardId = 1234
     * $query->filterByCardid(array(12, 34)); // WHERE cardId IN (12, 34)
     * $query->filterByCardid(array('min' => 12)); // WHERE cardId > 12
     * </code>
     *
     * @param     mixed $cardid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCommandQuery The current query, for fluid interface
     */
    public function filterByCardid($cardid = null, $comparison = null)
    {
        if (is_array($cardid)) {
            $useMinMax = false;
            if (isset($cardid['min'])) {
                $this->addUsingAlias(CommandTableMap::COL_CARDID, $cardid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cardid['max'])) {
                $this->addUsingAlias(CommandTableMap::COL_CARDID, $cardid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommandTableMap::COL_CARDID, $cardid, $comparison);
    }

    /**
     * Filter the query on the invoiceId column
     *
     * Example usage:
     * <code>
     * $query->filterByInvoiceid(1234); // WHERE invoiceId = 1234
     * $query->filterByInvoiceid(array(12, 34)); // WHERE invoiceId IN (12, 34)
     * $query->filterByInvoiceid(array('min' => 12)); // WHERE invoiceId > 12
     * </code>
     *
     * @param     mixed $invoiceid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCommandQuery The current query, for fluid interface
     */
    public function filterByInvoiceid($invoiceid = null, $comparison = null)
    {
        if (is_array($invoiceid)) {
            $useMinMax = false;
            if (isset($invoiceid['min'])) {
                $this->addUsingAlias(CommandTableMap::COL_INVOICEID, $invoiceid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($invoiceid['max'])) {
                $this->addUsingAlias(CommandTableMap::COL_INVOICEID, $invoiceid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommandTableMap::COL_INVOICEID, $invoiceid, $comparison);
    }

    /**
     * Filter the query on the userId column
     *
     * Example usage:
     * <code>
     * $query->filterByUserid(1234); // WHERE userId = 1234
     * $query->filterByUserid(array(12, 34)); // WHERE userId IN (12, 34)
     * $query->filterByUserid(array('min' => 12)); // WHERE userId > 12
     * </code>
     *
     * @param     mixed $userid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCommandQuery The current query, for fluid interface
     */
    public function filterByUserid($userid = null, $comparison = null)
    {
        if (is_array($userid)) {
            $useMinMax = false;
            if (isset($userid['min'])) {
                $this->addUsingAlias(CommandTableMap::COL_USERID, $userid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userid['max'])) {
                $this->addUsingAlias(CommandTableMap::COL_USERID, $userid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommandTableMap::COL_USERID, $userid, $comparison);
    }

    /**
     * Filter the query on the invoiceAddressId column
     *
     * Example usage:
     * <code>
     * $query->filterByInvoiceaddressid(1234); // WHERE invoiceAddressId = 1234
     * $query->filterByInvoiceaddressid(array(12, 34)); // WHERE invoiceAddressId IN (12, 34)
     * $query->filterByInvoiceaddressid(array('min' => 12)); // WHERE invoiceAddressId > 12
     * </code>
     *
     * @param     mixed $invoiceaddressid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCommandQuery The current query, for fluid interface
     */
    public function filterByInvoiceaddressid($invoiceaddressid = null, $comparison = null)
    {
        if (is_array($invoiceaddressid)) {
            $useMinMax = false;
            if (isset($invoiceaddressid['min'])) {
                $this->addUsingAlias(CommandTableMap::COL_INVOICEADDRESSID, $invoiceaddressid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($invoiceaddressid['max'])) {
                $this->addUsingAlias(CommandTableMap::COL_INVOICEADDRESSID, $invoiceaddressid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommandTableMap::COL_INVOICEADDRESSID, $invoiceaddressid, $comparison);
    }

    /**
     * Filter the query on the shipToAddressId column
     *
     * Example usage:
     * <code>
     * $query->filterByShiptoaddressid(1234); // WHERE shipToAddressId = 1234
     * $query->filterByShiptoaddressid(array(12, 34)); // WHERE shipToAddressId IN (12, 34)
     * $query->filterByShiptoaddressid(array('min' => 12)); // WHERE shipToAddressId > 12
     * </code>
     *
     * @param     mixed $shiptoaddressid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCommandQuery The current query, for fluid interface
     */
    public function filterByShiptoaddressid($shiptoaddressid = null, $comparison = null)
    {
        if (is_array($shiptoaddressid)) {
            $useMinMax = false;
            if (isset($shiptoaddressid['min'])) {
                $this->addUsingAlias(CommandTableMap::COL_SHIPTOADDRESSID, $shiptoaddressid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shiptoaddressid['max'])) {
                $this->addUsingAlias(CommandTableMap::COL_SHIPTOADDRESSID, $shiptoaddressid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommandTableMap::COL_SHIPTOADDRESSID, $shiptoaddressid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCommand $command Object to remove from the list of results
     *
     * @return $this|ChildCommandQuery The current query, for fluid interface
     */
    public function prune($command = null)
    {
        if ($command) {
            $this->addUsingAlias(CommandTableMap::COL_IDCOMMAND, $command->getIdcommand(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the command table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CommandTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommandTableMap::clearInstancePool();
            CommandTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CommandTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CommandTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CommandTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CommandTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CommandQuery
