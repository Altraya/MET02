<?php

namespace Base;

use \Articlescategories as ChildArticlescategories;
use \ArticlescategoriesQuery as ChildArticlescategoriesQuery;
use \Exception;
use \PDO;
use Map\ArticlescategoriesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'articlesCategories' table.
 *
 *
 *
 * @method     ChildArticlescategoriesQuery orderByIdarticle($order = Criteria::ASC) Order by the idArticle column
 * @method     ChildArticlescategoriesQuery orderByIdcategory($order = Criteria::ASC) Order by the idCategory column
 *
 * @method     ChildArticlescategoriesQuery groupByIdarticle() Group by the idArticle column
 * @method     ChildArticlescategoriesQuery groupByIdcategory() Group by the idCategory column
 *
 * @method     ChildArticlescategoriesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArticlescategoriesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArticlescategoriesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArticlescategoriesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArticlescategoriesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArticlescategoriesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArticlescategories findOne(ConnectionInterface $con = null) Return the first ChildArticlescategories matching the query
 * @method     ChildArticlescategories findOneOrCreate(ConnectionInterface $con = null) Return the first ChildArticlescategories matching the query, or a new ChildArticlescategories object populated from the query conditions when no match is found
 *
 * @method     ChildArticlescategories findOneByIdarticle(int $idArticle) Return the first ChildArticlescategories filtered by the idArticle column
 * @method     ChildArticlescategories findOneByIdcategory(int $idCategory) Return the first ChildArticlescategories filtered by the idCategory column *

 * @method     ChildArticlescategories requirePk($key, ConnectionInterface $con = null) Return the ChildArticlescategories by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArticlescategories requireOne(ConnectionInterface $con = null) Return the first ChildArticlescategories matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArticlescategories requireOneByIdarticle(int $idArticle) Return the first ChildArticlescategories filtered by the idArticle column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArticlescategories requireOneByIdcategory(int $idCategory) Return the first ChildArticlescategories filtered by the idCategory column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArticlescategories[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildArticlescategories objects based on current ModelCriteria
 * @method     ChildArticlescategories[]|ObjectCollection findByIdarticle(int $idArticle) Return ChildArticlescategories objects filtered by the idArticle column
 * @method     ChildArticlescategories[]|ObjectCollection findByIdcategory(int $idCategory) Return ChildArticlescategories objects filtered by the idCategory column
 * @method     ChildArticlescategories[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ArticlescategoriesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArticlescategoriesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Articlescategories', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArticlescategoriesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArticlescategoriesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildArticlescategoriesQuery) {
            return $criteria;
        }
        $query = new ChildArticlescategoriesQuery();
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
     * @param array[$idArticle, $idCategory] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildArticlescategories|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArticlescategoriesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArticlescategoriesTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildArticlescategories A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT idArticle, idCategory FROM articlesCategories WHERE idArticle = :p0 AND idCategory = :p1';
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
            /** @var ChildArticlescategories $obj */
            $obj = new ChildArticlescategories();
            $obj->hydrate($row);
            ArticlescategoriesTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildArticlescategories|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildArticlescategoriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ArticlescategoriesTableMap::COL_IDARTICLE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ArticlescategoriesTableMap::COL_IDCATEGORY, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildArticlescategoriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ArticlescategoriesTableMap::COL_IDARTICLE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ArticlescategoriesTableMap::COL_IDCATEGORY, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return $this|ChildArticlescategoriesQuery The current query, for fluid interface
     */
    public function filterByIdarticle($idarticle = null, $comparison = null)
    {
        if (is_array($idarticle)) {
            $useMinMax = false;
            if (isset($idarticle['min'])) {
                $this->addUsingAlias(ArticlescategoriesTableMap::COL_IDARTICLE, $idarticle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idarticle['max'])) {
                $this->addUsingAlias(ArticlescategoriesTableMap::COL_IDARTICLE, $idarticle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticlescategoriesTableMap::COL_IDARTICLE, $idarticle, $comparison);
    }

    /**
     * Filter the query on the idCategory column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcategory(1234); // WHERE idCategory = 1234
     * $query->filterByIdcategory(array(12, 34)); // WHERE idCategory IN (12, 34)
     * $query->filterByIdcategory(array('min' => 12)); // WHERE idCategory > 12
     * </code>
     *
     * @param     mixed $idcategory The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildArticlescategoriesQuery The current query, for fluid interface
     */
    public function filterByIdcategory($idcategory = null, $comparison = null)
    {
        if (is_array($idcategory)) {
            $useMinMax = false;
            if (isset($idcategory['min'])) {
                $this->addUsingAlias(ArticlescategoriesTableMap::COL_IDCATEGORY, $idcategory['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcategory['max'])) {
                $this->addUsingAlias(ArticlescategoriesTableMap::COL_IDCATEGORY, $idcategory['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticlescategoriesTableMap::COL_IDCATEGORY, $idcategory, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildArticlescategories $articlescategories Object to remove from the list of results
     *
     * @return $this|ChildArticlescategoriesQuery The current query, for fluid interface
     */
    public function prune($articlescategories = null)
    {
        if ($articlescategories) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ArticlescategoriesTableMap::COL_IDARTICLE), $articlescategories->getIdarticle(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ArticlescategoriesTableMap::COL_IDCATEGORY), $articlescategories->getIdcategory(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the articlesCategories table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArticlescategoriesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArticlescategoriesTableMap::clearInstancePool();
            ArticlescategoriesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArticlescategoriesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArticlescategoriesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArticlescategoriesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArticlescategoriesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ArticlescategoriesQuery
