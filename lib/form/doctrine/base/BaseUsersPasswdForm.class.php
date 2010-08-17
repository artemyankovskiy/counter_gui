<?php

/**
 * UsersPasswd form base class.
 *
 * @method UsersPasswd getObject() Returns the current form's model object
 *
 * @package    gui
 * @subpackage form
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsersPasswdForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'uid'      => new sfWidgetFormInputHidden(),
      'gid'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UsersGroup'), 'add_empty' => false)),
      'username' => new sfWidgetFormInputText(),
      'info'     => new sfWidgetFormInputText(),
      'password' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'uid'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('uid')), 'empty_value' => $this->getObject()->get('uid'), 'required' => false)),
      'gid'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UsersGroup'))),
      'username' => new sfValidatorString(array('max_length' => 45)),
      'info'     => new sfValidatorString(array('max_length' => 255)),
      'password' => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('users_passwd[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UsersPasswd';
  }

}
