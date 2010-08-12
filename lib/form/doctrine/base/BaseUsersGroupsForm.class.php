<?php

/**
 * UsersGroups form base class.
 *
 * @method UsersGroups getObject() Returns the current form's model object
 *
 * @package    gui
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsersGroupsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'  => new sfWidgetFormInputHidden(),
      'uid' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsersPasswd'), 'add_empty' => false)),
      'gid' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsersGroup'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'uid' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UsersPasswd'))),
      'gid' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UsersGroup'))),
    ));

    $this->widgetSchema->setNameFormat('users_groups[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UsersGroups';
  }

}
