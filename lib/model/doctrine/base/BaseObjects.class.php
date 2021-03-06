<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Objects', 'doctrine');

/**
 * BaseObjects
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $object_id
 * @property integer $parent_id
 * @property integer $object_type_id
 * @property integer $object_link_id
 * @property Doctrine_Collection $Objects
 * @property ObjectType $ObjectType
 * @property Counters $Counters
 * @property Doctrine_Collection $UsersPermissions
 * 
 * @method integer             getObjectId()         Returns the current record's "object_id" value
 * @method integer             getParentId()         Returns the current record's "parent_id" value
 * @method integer             getObjectTypeId()     Returns the current record's "object_type_id" value
 * @method integer             getObjectLinkId()     Returns the current record's "object_link_id" value
 * @method Doctrine_Collection getObjects()          Returns the current record's "Objects" collection
 * @method ObjectType          getObjectType()       Returns the current record's "ObjectType" value
 * @method Counters            getCounters()         Returns the current record's "Counters" value
 * @method Doctrine_Collection getUsersPermissions() Returns the current record's "UsersPermissions" collection
 * @method Objects             setObjectId()         Sets the current record's "object_id" value
 * @method Objects             setParentId()         Sets the current record's "parent_id" value
 * @method Objects             setObjectTypeId()     Sets the current record's "object_type_id" value
 * @method Objects             setObjectLinkId()     Sets the current record's "object_link_id" value
 * @method Objects             setObjects()          Sets the current record's "Objects" collection
 * @method Objects             setObjectType()       Sets the current record's "ObjectType" value
 * @method Objects             setCounters()         Sets the current record's "Counters" value
 * @method Objects             setUsersPermissions() Sets the current record's "UsersPermissions" collection
 * 
 * @package    gui
 * @subpackage model
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseObjects extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('objects');
        $this->hasColumn('object_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('parent_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('object_type_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('object_link_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Objects', array(
             'local' => 'object_id',
             'foreign' => 'parent_id'));

        $this->hasOne('ObjectType', array(
             'local' => 'object_type_id',
             'foreign' => 'id'));

        $this->hasOne('Counters', array(
             'local' => 'object_link_id',
             'foreign' => 'counter_id'));

        $this->hasMany('UsersPermissions', array(
             'local' => 'object_id',
             'foreign' => 'object_id'));
    }
}