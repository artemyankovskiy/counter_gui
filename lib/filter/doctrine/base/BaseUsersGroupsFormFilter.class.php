<?php

/**
 * UsersGroups filter form base class.
 *
 * @package    gui
 * @subpackage filter
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsersGroupsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'uid' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsersPasswd'), 'add_empty' => true)),
      'gid' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsersGroup'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'uid' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UsersPasswd'), 'column' => 'uid')),
      'gid' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UsersGroup'), 'column' => 'gid')),
    ));

    $this->widgetSchema->setNameFormat('users_groups_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UsersGroups';
  }

  public function getFields()
  {
    return array(
      'id'  => 'Number',
      'uid' => 'ForeignKey',
      'gid' => 'ForeignKey',
    );
  }
}
