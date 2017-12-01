<?php

namespace Map;

use \Command;
use \CommandQuery;
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
 * This class defines the structure of the 'command' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class CommandTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.CommandTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'command';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Command';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Command';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 9;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 9;

    /**
     * the column name for the idCommand field
     */
    const COL_IDCOMMAND = 'command.idCommand';

    /**
     * the column name for the dateCommand field
     */
    const COL_DATECOMMAND = 'command.dateCommand';

    /**
     * the column name for the totalAmount field
     */
    const COL_TOTALAMOUNT = 'command.totalAmount';

    /**
     * the column name for the invoiced field
     */
    const COL_INVOICED = 'command.invoiced';

    /**
     * the column name for the cardId field
     */
    const COL_CARDID = 'command.cardId';

    /**
     * the column name for the invoiceId field
     */
    const COL_INVOICEID = 'command.invoiceId';

    /**
     * the column name for the userId field
     */
    const COL_USERID = 'command.userId';

    /**
     * the column name for the invoiceAddressId field
     */
    const COL_INVOICEADDRESSID = 'command.invoiceAddressId';

    /**
     * the column name for the shipToAddressId field
     */
    const COL_SHIPTOADDRESSID = 'command.shipToAddressId';

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
        self::TYPE_PHPNAME       => array('Idcommand', 'Datecommand', 'Totalamount', 'Invoiced', 'Cardid', 'Invoiceid', 'Userid', 'Invoiceaddressid', 'Shiptoaddressid', ),
        self::TYPE_CAMELNAME     => array('idcommand', 'datecommand', 'totalamount', 'invoiced', 'cardid', 'invoiceid', 'userid', 'invoiceaddressid', 'shiptoaddressid', ),
        self::TYPE_COLNAME       => array(CommandTableMap::COL_IDCOMMAND, CommandTableMap::COL_DATECOMMAND, CommandTableMap::COL_TOTALAMOUNT, CommandTableMap::COL_INVOICED, CommandTableMap::COL_CARDID, CommandTableMap::COL_INVOICEID, CommandTableMap::COL_USERID, CommandTableMap::COL_INVOICEADDRESSID, CommandTableMap::COL_SHIPTOADDRESSID, ),
        self::TYPE_FIELDNAME     => array('idCommand', 'dateCommand', 'totalAmount', 'invoiced', 'cardId', 'invoiceId', 'userId', 'invoiceAddressId', 'shipToAddressId', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Idcommand' => 0, 'Datecommand' => 1, 'Totalamount' => 2, 'Invoiced' => 3, 'Cardid' => 4, 'Invoiceid' => 5, 'Userid' => 6, 'Invoiceaddressid' => 7, 'Shiptoaddressid' => 8, ),
        self::TYPE_CAMELNAME     => array('idcommand' => 0, 'datecommand' => 1, 'totalamount' => 2, 'invoiced' => 3, 'cardid' => 4, 'invoiceid' => 5, 'userid' => 6, 'invoiceaddressid' => 7, 'shiptoaddressid' => 8, ),
        self::TYPE_COLNAME       => array(CommandTableMap::COL_IDCOMMAND => 0, CommandTableMap::COL_DATECOMMAND => 1, CommandTableMap::COL_TOTALAMOUNT => 2, CommandTableMap::COL_INVOICED => 3, CommandTableMap::COL_CARDID => 4, CommandTableMap::COL_INVOICEID => 5, CommandTableMap::COL_USERID => 6, CommandTableMap::COL_INVOICEADDRESSID => 7, CommandTableMap::COL_SHIPTOADDRESSID => 8, ),
        self::TYPE_FIELDNAME     => array('idCommand' => 0, 'dateCommand' => 1, 'totalAmount' => 2, 'invoiced' => 3, 'cardId' => 4, 'invoiceId' => 5, 'userId' => 6, 'invoiceAddressId' => 7, 'shipToAddressId' => 8, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
        $this->setName('command');
        $this->setPhpName('Command');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Command');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idCommand', 'Idcommand', 'INTEGER', true, null, null);
        $this->addColumn('dateCommand', 'Datecommand', 'TIMESTAMP', true, null, null);
        $this->addColumn('totalAmount', 'Totalamount', 'DECIMAL', true, 10, null);
        $this->addColumn('invoiced', 'Invoiced', 'BOOLEAN', true, 1, null);
        $this->addColumn('cardId', 'Cardid', 'INTEGER', true, null, null);
        $this->addColumn('invoiceId', 'Invoiceid', 'INTEGER', true, null, null);
        $this->addColumn('userId', 'Userid', 'INTEGER', true, null, null);
        $this->addColumn('invoiceAddressId', 'Invoiceaddressid', 'INTEGER', true, null, null);
        $this->addColumn('shipToAddressId', 'Shiptoaddressid', 'INTEGER', true, null, null);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idcommand', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idcommand', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idcommand', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idcommand', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idcommand', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Idcommand', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('Idcommand', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? CommandTableMap::CLASS_DEFAULT : CommandTableMap::OM_CLASS;
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
     * @return array           (Command object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = CommandTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = CommandTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + CommandTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommandTableMap::OM_CLASS;
            /** @var Command $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            CommandTableMap::addInstanceToPool($obj, $key);
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
            $key = CommandTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = CommandTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Command $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommandTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(CommandTableMap::COL_IDCOMMAND);
            $criteria->addSelectColumn(CommandTableMap::COL_DATECOMMAND);
            $criteria->addSelectColumn(CommandTableMap::COL_TOTALAMOUNT);
            $criteria->addSelectColumn(CommandTableMap::COL_INVOICED);
            $criteria->addSelectColumn(CommandTableMap::COL_CARDID);
            $criteria->addSelectColumn(CommandTableMap::COL_INVOICEID);
            $criteria->addSelectColumn(CommandTableMap::COL_USERID);
            $criteria->addSelectColumn(CommandTableMap::COL_INVOICEADDRESSID);
            $criteria->addSelectColumn(CommandTableMap::COL_SHIPTOADDRESSID);
        } else {
            $criteria->addSelectColumn($alias . '.idCommand');
            $criteria->addSelectColumn($alias . '.dateCommand');
            $criteria->addSelectColumn($alias . '.totalAmount');
            $criteria->addSelectColumn($alias . '.invoiced');
            $criteria->addSelectColumn($alias . '.cardId');
            $criteria->addSelectColumn($alias . '.invoiceId');
            $criteria->addSelectColumn($alias . '.userId');
            $criteria->addSelectColumn($alias . '.invoiceAddressId');
            $criteria->addSelectColumn($alias . '.shipToAddressId');
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
        return Propel::getServiceContainer()->getDatabaseMap(CommandTableMap::DATABASE_NAME)->getTable(CommandTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(CommandTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(CommandTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new CommandTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Command or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Command object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(CommandTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Command) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommandTableMap::DATABASE_NAME);
            $criteria->add(CommandTableMap::COL_IDCOMMAND, (array) $values, Criteria::IN);
        }

        $query = CommandQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            CommandTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                CommandTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the command table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return CommandQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Command or Criteria object.
     *
     * @param mixed               $criteria Criteria or Command object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CommandTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Command object
        }

        if ($criteria->containsKey(CommandTableMap::COL_IDCOMMAND) && $criteria->keyContainsValue(CommandTableMap::COL_IDCOMMAND) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommandTableMap::COL_IDCOMMAND.')');
        }


        // Set the correct dbName
        $query = CommandQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // CommandTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
CommandTableMap::buildTableMap();
