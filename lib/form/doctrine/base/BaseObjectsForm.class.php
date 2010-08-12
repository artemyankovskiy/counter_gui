<?php

/**
 * Objects form base class.
 *
 * @method Objects getObject() Returns the current form's model object
 *
 * @package    gui
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseObjectsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'object_id'      => new sfWidgetFormInputHidden(),
      'parent_id'      => new sfWidgetFormInputText(),
      'object_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ObjectType'), 'add_empty' => false)),
      'object_link_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Counters'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'object_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('object_id')), 'empty_value' => $this->getObject()->get('object_id'), 'required' => false)),
      'parent_id'      => new sfValidatorInteger(array('required' => false)),
      'object_type_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ObjectType'))),
      'object_link_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Counters'))),
    ));

    $this->widgetSchema->setNameFormat('objects[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Objects';
  }

}
