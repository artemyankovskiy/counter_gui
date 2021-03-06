<?php

/**
 * UsersPermissions
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    gui
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class UsersPermissions extends BaseUsersPermissions
{
    const INHERITED = 1;
    const ALLOW     = 2;
    const DENY      = 4;

    public function getPermission($perm)
    {
        $ret = "";
        switch ( $perm )
        {
            case self::INHERITED:
                $ret = "Унаследовано";
                break;
            case self::ALLOW:
                $ret = "Разрешено";
                break;
            case self::DENY:
                $ret = "Запрещено";
                break;
            default:
                $ret = "Неверные права доступа";
                break;
        }

        return $ret;
    }
}
