<?php

/**
 * UsersPermissions form base class.
 *
 * @method UsersPermissions getObject() Returns the current form's model object
 *
 * @package    gui
 * @subpackage form
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsersPermissionsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'object_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Objects'), 'add_empty' => false)),
      'uid'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsersPasswd'), 'add_empty' => false)),
      'gid'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsersGroup'), 'add_empty' => false)),
      'user_read_perm'   => new sfWidgetFormInputText(),
      'user_write_perm'  => new sfWidgetFormInputText(),
      'user_exec_perm'   => new sfWidgetFormInputText(),
      'group_read_perm'  => new sfWidgetFormInputText(),
      'group_write_perm' => new sfWidgetFormInputText(),
      'group_exec_perm'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'object_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Objects'))),
      'uid'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UsersPasswd'))),
      'gid'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UsersGroup'))),
      'user_read_perm'   => new sfValidatorInteger(),
      'user_write_perm'  => new sfValidatorInteger(),
      'user_exec_perm'   => new sfValidatorInteger(),
      'group_read_perm'  => new sfValidatorInteger(),
      'group_write_perm' => new sfValidatorInteger(),
      'group_exec_perm'  => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('users_permissions[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UsersPermissions';
  }

}
