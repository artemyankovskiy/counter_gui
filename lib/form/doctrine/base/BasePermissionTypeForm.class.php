<?php

/**
 * PermissionType form base class.
 *
 * @method PermissionType getObject() Returns the current form's model object
 *
 * @package    gui
 * @subpackage form
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePermissionTypeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'permission_type_id' => new sfWidgetFormInputHidden(),
      'permission'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'permission_type_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('permission_type_id')), 'empty_value' => $this->getObject()->get('permission_type_id'), 'required' => false)),
      'permission'         => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('permission_type[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PermissionType';
  }

}
