<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('UsersGroups', 'doctrine');

/**
 * BaseUsersGroups
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $uid
 * @property integer $gid
 * @property UsersGroup $UsersGroup
 * @property UsersPasswd $UsersPasswd
 * 
 * @method integer     getId()          Returns the current record's "id" value
 * @method integer     getUid()         Returns the current record's "uid" value
 * @method integer     getGid()         Returns the current record's "gid" value
 * @method UsersGroup  getUsersGroup()  Returns the current record's "UsersGroup" value
 * @method UsersPasswd getUsersPasswd() Returns the current record's "UsersPasswd" value
 * @method UsersGroups setId()          Sets the current record's "id" value
 * @method UsersGroups setUid()         Sets the current record's "uid" value
 * @method UsersGroups setGid()         Sets the current record's "gid" value
 * @method UsersGroups setUsersGroup()  Sets the current record's "UsersGroup" value
 * @method UsersGroups setUsersPasswd() Sets the current record's "UsersPasswd" value
 * 
 * @package    gui
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUsersGroups extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('users_groups');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('uid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('gid', 'integer', 4, array(
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
        $this->hasOne('UsersGroup', array(
             'local' => 'gid',
             'foreign' => 'gid'));

        $this->hasOne('UsersPasswd', array(
             'local' => 'uid',
             'foreign' => 'uid'));
    }
}