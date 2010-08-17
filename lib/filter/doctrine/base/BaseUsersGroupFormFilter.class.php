<?php

/**
 * UsersGroup filter form base class.
 *
 * @package    gui
 * @subpackage filter
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsersGroupFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'groupname' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'info'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'groupname' => new sfValidatorPass(array('required' => false)),
      'info'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('users_group_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UsersGroup';
  }

  public function getFields()
  {
    return array(
      'gid'       => 'Number',
      'groupname' => 'Text',
      'info'      => 'Text',
    );
  }
}
