<?php

/**
 * Counters filter form base class.
 *
 * @package    gui
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCountersFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'counter_type_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CounterType'), 'add_empty' => true)),
      'network_type_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkType'), 'add_empty' => true)),
      'connection_string' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'counter_type_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CounterType'), 'column' => 'counter_type_id')),
      'network_type_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('NetworkType'), 'column' => 'network_type_id')),
      'connection_string' => new sfValidatorPass(array('required' => false)),
      'description'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('counters_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Counters';
  }

  public function getFields()
  {
    return array(
      'counter_id'        => 'Number',
      'counter_type_id'   => 'ForeignKey',
      'network_type_id'   => 'ForeignKey',
      'connection_string' => 'Text',
      'description'       => 'Text',
    );
  }
}
