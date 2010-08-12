<?php

/**
 * UsersPermissions filter form base class.
 *
 * @package    gui
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsersPermissionsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'object_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Objects'), 'add_empty' => true)),
      'uid'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsersPasswd'), 'add_empty' => true)),
      'gid'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsersGroup'), 'add_empty' => true)),
      'user_read_perm'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_write_perm'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_exec_perm'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'group_read_perm'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'group_write_perm' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'group_exec_perm'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'object_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Objects'), 'column' => 'object_id')),
      'uid'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UsersPasswd'), 'column' => 'uid')),
      'gid'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UsersGroup'), 'column' => 'gid')),
      'user_read_perm'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'user_write_perm'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'user_exec_perm'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'group_read_perm'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'group_write_perm' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'group_exec_perm'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('users_permissions_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UsersPermissions';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'object_id'        => 'ForeignKey',
      'uid'              => 'ForeignKey',
      'gid'              => 'ForeignKey',
      'user_read_perm'   => 'Number',
      'user_write_perm'  => 'Number',
      'user_exec_perm'   => 'Number',
      'group_read_perm'  => 'Number',
      'group_write_perm' => 'Number',
      'group_exec_perm'  => 'Number',
    );
  }
}
