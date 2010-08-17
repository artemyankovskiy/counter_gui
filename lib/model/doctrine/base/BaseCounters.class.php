<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Counters', 'doctrine');

/**
 * BaseCounters
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $counter_id
 * @property integer $counter_type_id
 * @property integer $network_type_id
 * @property string $connection_string
 * @property string $description
 * @property NetworkType $NetworkType
 * @property CounterType $CounterType
 * @property Doctrine_Collection $CountersValues
 * @property Doctrine_Collection $Objects
 * 
 * @method integer             getCounterId()         Returns the current record's "counter_id" value
 * @method integer             getCounterTypeId()     Returns the current record's "counter_type_id" value
 * @method integer             getNetworkTypeId()     Returns the current record's "network_type_id" value
 * @method string              getConnectionString()  Returns the current record's "connection_string" value
 * @method string              getDescription()       Returns the current record's "description" value
 * @method NetworkType         getNetworkType()       Returns the current record's "NetworkType" value
 * @method CounterType         getCounterType()       Returns the current record's "CounterType" value
 * @method Doctrine_Collection getCountersValues()    Returns the current record's "CountersValues" collection
 * @method Doctrine_Collection getObjects()           Returns the current record's "Objects" collection
 * @method Counters            setCounterId()         Sets the current record's "counter_id" value
 * @method Counters            setCounterTypeId()     Sets the current record's "counter_type_id" value
 * @method Counters            setNetworkTypeId()     Sets the current record's "network_type_id" value
 * @method Counters            setConnectionString()  Sets the current record's "connection_string" value
 * @method Counters            setDescription()       Sets the current record's "description" value
 * @method Counters            setNetworkType()       Sets the current record's "NetworkType" value
 * @method Counters            setCounterType()       Sets the current record's "CounterType" value
 * @method Counters            setCountersValues()    Sets the current record's "CountersValues" collection
 * @method Counters            setObjects()           Sets the current record's "Objects" collection
 * 
 * @package    gui
 * @subpackage model
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCounters extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('counters');
        $this->hasColumn('counter_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('counter_type_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('network_type_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('connection_string', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('NetworkType', array(
             'local' => 'network_type_id',
             'foreign' => 'network_type_id'));

        $this->hasOne('CounterType', array(
             'local' => 'counter_type_id',
             'foreign' => 'counter_type_id'));

        $this->hasMany('CountersValues', array(
             'local' => 'counter_id',
             'foreign' => 'counter_id'));

        $this->hasMany('Objects', array(
             'local' => 'counter_id',
             'foreign' => 'object_link_id'));
    }
}