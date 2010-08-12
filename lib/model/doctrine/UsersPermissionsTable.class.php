<?php


class UsersPermissionsTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('UsersPermissions');
    }
}