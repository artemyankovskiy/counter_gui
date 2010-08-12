<?php


class UsersGroupsTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('UsersGroups');
    }
}