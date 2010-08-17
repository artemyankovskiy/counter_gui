<?php

/**
 * Objects filter form base class.
 *
 * @package    gui
 * @subpackage filter
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseObjectsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'parent_id'      => new sfWidgetFormFilterInput(),
      'object_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ObjectType'), 'add_empty' => true)),
      'object_link_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Counters'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'parent_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'object_type_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ObjectType'), 'column' => 'id')),
      'object_link_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Counters'), 'column' => 'counter_id')),
    ));

    $this->widgetSchema->setNameFormat('objects_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Objects';
  }

  public function getFields()
  {
    return array(
      'object_id'      => 'Number',
      'parent_id'      => 'Number',
      'object_type_id' => 'ForeignKey',
      'object_link_id' => 'ForeignKey',
    );
  }
}
