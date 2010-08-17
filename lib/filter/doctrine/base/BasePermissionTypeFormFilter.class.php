<?php

/**
 * PermissionType filter form base class.
 *
 * @package    gui
 * @subpackage filter
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePermissionTypeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'permission'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'permission'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('permission_type_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PermissionType';
  }

  public function getFields()
  {
    return array(
      'permission_type_id' => 'Number',
      'permission'         => 'Text',
    );
  }
}
