<?php

/**
 * CountersValues form base class.
 *
 * @method CountersValues getObject() Returns the current form's model object
 *
 * @package    gui
 * @subpackage form
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCountersValuesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'counter_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Counters'), 'add_empty' => false)),
      'timestamp'     => new sfWidgetFormDateTime(),
      'counter_value' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'counter_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Counters'))),
      'timestamp'     => new sfValidatorDateTime(),
      'counter_value' => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('counters_values[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CountersValues';
  }

}
