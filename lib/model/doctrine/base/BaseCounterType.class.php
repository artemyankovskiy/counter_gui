<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CounterType', 'doctrine');

/**
 * BaseCounterType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $counter_type_id
 * @property string $counter_name
 * @property string $description
 * @property Doctrine_Collection $Counters
 * 
 * @method integer             getCounterTypeId()   Returns the current record's "counter_type_id" value
 * @method string              getCounterName()     Returns the current record's "counter_name" value
 * @method string              getDescription()     Returns the current record's "description" value
 * @method Doctrine_Collection getCounters()        Returns the current record's "Counters" collection
 * @method CounterType         setCounterTypeId()   Sets the current record's "counter_type_id" value
 * @method CounterType         setCounterName()     Sets the current record's "counter_name" value
 * @method CounterType         setDescription()     Sets the current record's "description" value
 * @method CounterType         setCounters()        Sets the current record's "Counters" collection
 * 
 * @package    gui
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCounterType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('counter_type');
        $this->hasColumn('counter_type_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('counter_name', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
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
        $this->hasMany('Counters', array(
             'local' => 'counter_type_id',
             'foreign' => 'counter_type_id'));
    }
}