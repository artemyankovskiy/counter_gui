<?php

/**
 * Counters form base class.
 *
 * @method Counters getObject() Returns the current form's model object
 *
 * @package    gui
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCountersForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'counter_id'        => new sfWidgetFormInputHidden(),
      'counter_type_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CounterType'), 'add_empty' => false)),
      'network_type_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkType'), 'add_empty' => false)),
      'connection_string' => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'counter_id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('counter_id')), 'empty_value' => $this->getObject()->get('counter_id'), 'required' => false)),
      'counter_type_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CounterType'))),
      'network_type_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkType'))),
      'connection_string' => new sfValidatorString(array('max_length' => 255)),
      'description'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('counters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Counters';
  }

}
