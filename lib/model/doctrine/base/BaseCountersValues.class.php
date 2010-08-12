<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CountersValues', 'doctrine');

/**
 * BaseCountersValues
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $counter_id
 * @property timestamp $timestamp
 * @property float $counter_value
 * @property Counters $Counters
 * 
 * @method integer        getId()            Returns the current record's "id" value
 * @method integer        getCounterId()     Returns the current record's "counter_id" value
 * @method timestamp      getTimestamp()     Returns the current record's "timestamp" value
 * @method float          getCounterValue()  Returns the current record's "counter_value" value
 * @method Counters       getCounters()      Returns the current record's "Counters" value
 * @method CountersValues setId()            Sets the current record's "id" value
 * @method CountersValues setCounterId()     Sets the current record's "counter_id" value
 * @method CountersValues setTimestamp()     Sets the current record's "timestamp" value
 * @method CountersValues setCounterValue()  Sets the current record's "counter_value" value
 * @method CountersValues setCounters()      Sets the current record's "Counters" value
 * 
 * @package    gui
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCountersValues extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('counters_values');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('counter_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('timestamp', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('counter_value', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Counters', array(
             'local' => 'counter_id',
             'foreign' => 'counter_id'));
    }
}