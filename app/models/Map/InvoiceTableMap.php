<?php

namespace Map;

use \Invoice;
use \InvoiceQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'invoice' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class InvoiceTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.InvoiceTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'invoice';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Invoice';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Invoice';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 6;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 6;

    /**
     * the column name for the idInvoice field
     */
    const COL_IDINVOICE = 'invoice.idInvoice';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'invoice.name';

    /**
     * the column name for the invoiceDate field
     */
    const COL_INVOICEDATE = 'invoice.invoiceDate';

    /**
     * the column name for the totalAmount field
     */
    const COL_TOTALAMOUNT = 'invoice.totalAmount';

    /**
     * the column name for the idUser field
     */
    const COL_IDUSER = 'invoice.idUser';

    /**
     * the column name for the idCommand field
     */
    const COL_IDCOMMAND = 'invoice.idCommand';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Idinvoice', 'Name', 'Invoicedate', 'Totalamount', 'Iduser', 'Idcommand', ),
        self::TYPE_CAMELNAME     => array('idinvoice', 'name', 'invoicedate', 'totalamount', 'iduser', 'idcommand', ),
        self::TYPE_COLNAME       => array(InvoiceTableMap::COL_IDINVOICE, InvoiceTableMap::COL_NAME, InvoiceTableMap::COL_INVOICEDATE, InvoiceTableMap::COL_TOTALAMOUNT, InvoiceTableMap::COL_IDUSER, InvoiceTableMap::COL_IDCOMMAND, ),
        self::TYPE_FIELDNAME     => array('idInvoice', 'name', 'invoiceDate', 'totalAmount', 'idUser', 'idCommand', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Idinvoice' => 0, 'Name' => 1, 'Invoicedate' => 2, 'Totalamount' => 3, 'Iduser' => 4, 'Idcommand' => 5, ),
        self::TYPE_CAMELNAME     => array('idinvoice' => 0, 'name' => 1, 'invoicedate' => 2, 'totalamount' => 3, 'iduser' => 4, 'idcommand' => 5, ),
        self::TYPE_COLNAME       => array(InvoiceTableMap::COL_IDINVOICE => 0, InvoiceTableMap::COL_NAME => 1, InvoiceTableMap::COL_INVOICEDATE => 2, InvoiceTableMap::COL_TOTALAMOUNT => 3, InvoiceTableMap::COL_IDUSER => 4, InvoiceTableMap::COL_IDCOMMAND => 5, ),
        self::TYPE_FIELDNAME     => array('idInvoice' => 0, 'name' => 1, 'invoiceDate' => 2, 'totalAmount' => 3, 'idUser' => 4, 'idCommand' => 5, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('invoice');
        $this->setPhpName('Invoice');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Invoice');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idInvoice', 'Idinvoice', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 45, null);
        $this->addColumn('invoiceDate', 'Invoicedate', 'TIMESTAMP', true, null, null);
        $this->addColumn('totalAmount', 'Totalamount', 'DECIMAL', true, 10, null);
        $this->addColumn('idUser', 'Iduser', 'INTEGER', true, null, null);
        $this->addColumn('idCommand', 'Idcommand', 'INTEGER', true, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idinvoice', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idinvoice', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idinvoice', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idinvoice', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idinvoice', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idinvoice', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Idinvoice', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? InvoiceTableMap::CLASS_DEFAULT : InvoiceTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (Invoice object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = InvoiceTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvoiceTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvoiceTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvoiceTableMap::OM_CLASS;
            /** @var Invoice $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvoiceTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = InvoiceTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvoiceTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Invoice $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvoiceTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(InvoiceTableMap::COL_IDINVOICE);
            $criteria->addSelectColumn(InvoiceTableMap::COL_NAME);
            $criteria->addSelectColumn(InvoiceTableMap::COL_INVOICEDATE);
            $criteria->addSelectColumn(InvoiceTableMap::COL_TOTALAMOUNT);
            $criteria->addSelectColumn(InvoiceTableMap::COL_IDUSER);
            $criteria->addSelectColumn(InvoiceTableMap::COL_IDCOMMAND);
        } else {
            $criteria->addSelectColumn($alias . '.idInvoice');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.invoiceDate');
            $criteria->addSelectColumn($alias . '.totalAmount');
            $criteria->addSelectColumn($alias . '.idUser');
            $criteria->addSelectColumn($alias . '.idCommand');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(InvoiceTableMap::DATABASE_NAME)->getTable(InvoiceTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(InvoiceTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(InvoiceTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new InvoiceTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Invoice or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Invoice object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvoiceTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Invoice) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvoiceTableMap::DATABASE_NAME);
            $criteria->add(InvoiceTableMap::COL_IDINVOICE, (array) $values, Criteria::IN);
        }

        $query = InvoiceQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvoiceTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvoiceTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the invoice table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return InvoiceQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Invoice or Criteria object.
     *
     * @param mixed               $criteria Criteria or Invoice object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvoiceTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Invoice object
        }

        if ($criteria->containsKey(InvoiceTableMap::COL_IDINVOICE) && $criteria->keyContainsValue(InvoiceTableMap::COL_IDINVOICE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.InvoiceTableMap::COL_IDINVOICE.')');
        }


        // Set the correct dbName
        $query = InvoiceQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // InvoiceTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
InvoiceTableMap::buildTableMap();
