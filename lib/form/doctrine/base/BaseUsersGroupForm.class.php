<?php

/**
 * UsersGroup form base class.
 *
 * @method UsersGroup getObject() Returns the current form's model object
 *
 * @package    gui
 * @subpackage form
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsersGroupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gid'       => new sfWidgetFormInputHidden(),
      'groupname' => new sfWidgetFormInputText(),
      'info'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'gid'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('gid')), 'empty_value' => $this->getObject()->get('gid'), 'required' => false)),
      'groupname' => new sfValidatorString(array('max_length' => 45)),
      'info'      => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('users_group[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UsersGroup';
  }

}
