<?php

namespace Base;

use \Articlescolors as ChildArticlescolors;
use \ArticlescolorsQuery as ChildArticlescolorsQuery;
use \Exception;
use \PDO;
use Map\ArticlescolorsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'articlesColors' table.
 *
 *
 *
 * @method     ChildArticlescolorsQuery orderByIdarticle($order = Criteria::ASC) Order by the idArticle column
 * @method     ChildArticlescolorsQuery orderByIdcolor($order = Criteria::ASC) Order by the idColor column
 *
 * @method     ChildArticlescolorsQuery groupByIdarticle() Group by the idArticle column
 * @method     ChildArticlescolorsQuery groupByIdcolor() Group by the idColor column
 *
 * @method     ChildArticlescolorsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildArticlescolorsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildArticlescolorsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildArticlescolorsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildArticlescolorsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildArticlescolorsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildArticlescolors findOne(ConnectionInterface $con = null) Return the first ChildArticlescolors matching the query
 * @method     ChildArticlescolors findOneOrCreate(ConnectionInterface $con = null) Return the first ChildArticlescolors matching the query, or a new ChildArticlescolors object populated from the query conditions when no match is found
 *
 * @method     ChildArticlescolors findOneByIdarticle(int $idArticle) Return the first ChildArticlescolors filtered by the idArticle column
 * @method     ChildArticlescolors findOneByIdcolor(int $idColor) Return the first ChildArticlescolors filtered by the idColor column *

 * @method     ChildArticlescolors requirePk($key, ConnectionInterface $con = null) Return the ChildArticlescolors by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArticlescolors requireOne(ConnectionInterface $con = null) Return the first ChildArticlescolors matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArticlescolors requireOneByIdarticle(int $idArticle) Return the first ChildArticlescolors filtered by the idArticle column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildArticlescolors requireOneByIdcolor(int $idColor) Return the first ChildArticlescolors filtered by the idColor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildArticlescolors[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildArticlescolors objects based on current ModelCriteria
 * @method     ChildArticlescolors[]|ObjectCollection findByIdarticle(int $idArticle) Return ChildArticlescolors objects filtered by the idArticle column
 * @method     ChildArticlescolors[]|ObjectCollection findByIdcolor(int $idColor) Return ChildArticlescolors objects filtered by the idColor column
 * @method     ChildArticlescolors[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ArticlescolorsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ArticlescolorsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Articlescolors', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildArticlescolorsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildArticlescolorsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildArticlescolorsQuery) {
            return $criteria;
        }
        $query = new ChildArticlescolorsQuery();
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
     * @param array[$idArticle, $idColor] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildArticlescolors|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ArticlescolorsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ArticlescolorsTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildArticlescolors A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT idArticle, idColor FROM articlesColors WHERE idArticle = :p0 AND idColor = :p1';
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
            /** @var ChildArticlescolors $obj */
            $obj = new ChildArticlescolors();
            $obj->hydrate($row);
            ArticlescolorsTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildArticlescolors|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildArticlescolorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ArticlescolorsTableMap::COL_IDARTICLE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ArticlescolorsTableMap::COL_IDCOLOR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildArticlescolorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ArticlescolorsTableMap::COL_IDARTICLE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ArticlescolorsTableMap::COL_IDCOLOR, $key[1], Criteria::EQUAL);
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
     * @return $this|ChildArticlescolorsQuery The current query, for fluid interface
     */
    public function filterByIdarticle($idarticle = null, $comparison = null)
    {
        if (is_array($idarticle)) {
            $useMinMax = false;
            if (isset($idarticle['min'])) {
                $this->addUsingAlias(ArticlescolorsTableMap::COL_IDARTICLE, $idarticle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idarticle['max'])) {
                $this->addUsingAlias(ArticlescolorsTableMap::COL_IDARTICLE, $idarticle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticlescolorsTableMap::COL_IDARTICLE, $idarticle, $comparison);
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
     * @return $this|ChildArticlescolorsQuery The current query, for fluid interface
     */
    public function filterByIdcolor($idcolor = null, $comparison = null)
    {
        if (is_array($idcolor)) {
            $useMinMax = false;
            if (isset($idcolor['min'])) {
                $this->addUsingAlias(ArticlescolorsTableMap::COL_IDCOLOR, $idcolor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcolor['max'])) {
                $this->addUsingAlias(ArticlescolorsTableMap::COL_IDCOLOR, $idcolor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticlescolorsTableMap::COL_IDCOLOR, $idcolor, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildArticlescolors $articlescolors Object to remove from the list of results
     *
     * @return $this|ChildArticlescolorsQuery The current query, for fluid interface
     */
    public function prune($articlescolors = null)
    {
        if ($articlescolors) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ArticlescolorsTableMap::COL_IDARTICLE), $articlescolors->getIdarticle(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ArticlescolorsTableMap::COL_IDCOLOR), $articlescolors->getIdcolor(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the articlesColors table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ArticlescolorsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArticlescolorsTableMap::clearInstancePool();
            ArticlescolorsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ArticlescolorsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ArticlescolorsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ArticlescolorsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ArticlescolorsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ArticlescolorsQuery