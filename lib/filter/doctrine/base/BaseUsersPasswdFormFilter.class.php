<?php

/**
 * UsersPasswd filter form base class.
 *
 * @package    gui
 * @subpackage filter
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsersPasswdFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gid'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsersGroup'), 'add_empty' => true)),
      'username' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'info'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'gid'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UsersGroup'), 'column' => 'gid')),
      'username' => new sfValidatorPass(array('required' => false)),
      'info'     => new sfValidatorPass(array('required' => false)),
      'password' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('users_passwd_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UsersPasswd';
  }

  public function getFields()
  {
    return array(
      'uid'      => 'Number',
      'gid'      => 'ForeignKey',
      'username' => 'Text',
      'info'     => 'Text',
      'password' => 'Text',
    );
  }
}
