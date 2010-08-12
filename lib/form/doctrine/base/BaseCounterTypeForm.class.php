<?php

/**
 * CounterType form base class.
 *
 * @method CounterType getObject() Returns the current form's model object
 *
 * @package    gui
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCounterTypeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'counter_type_id' => new sfWidgetFormInputHidden(),
      'counter_name'    => new sfWidgetFormInputText(),
      'description'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'counter_type_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('counter_type_id')), 'empty_value' => $this->getObject()->get('counter_type_id'), 'required' => false)),
      'counter_name'    => new sfValidatorString(array('max_length' => 45)),
      'description'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('counter_type[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CounterType';
  }

}
