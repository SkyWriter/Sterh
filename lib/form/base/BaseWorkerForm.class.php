<?php

/**
 * Worker form base class.
 *
 * @package    sterh
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseWorkerForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'surname'           => new sfWidgetFormInput(),
      'name'              => new sfWidgetFormInput(),
      'father'            => new sfWidgetFormInput(),
      'age'               => new sfWidgetFormInput(),
      'gender'            => new sfWidgetFormInput(),
      'citizenship_id'    => new sfWidgetFormPropelChoice(array('model' => 'Citizenship', 'add_empty' => true)),
      'region_id'         => new sfWidgetFormPropelChoice(array('model' => 'Region', 'add_empty' => true)),
      'address'           => new sfWidgetFormInput(),
      'phone'             => new sfWidgetFormInput(),
      'email'             => new sfWidgetFormInput(),
      'target_regions'    => new sfWidgetFormInput(),
      'branch_id'         => new sfWidgetFormPropelChoice(array('model' => 'Branch', 'add_empty' => true)),
      'speciality_id'     => new sfWidgetFormPropelChoice(array('model' => 'Speciality', 'add_empty' => true)),
      'salary'            => new sfWidgetFormInput(),
      'schedule'          => new sfWidgetFormInput(),
      'job_type_id'       => new sfWidgetFormPropelChoice(array('model' => 'JobType', 'add_empty' => true)),
      'start_date'        => new sfWidgetFormDate(),
      'need_place'        => new sfWidgetFormInput(),
      'has_permission'    => new sfWidgetFormInput(),
      'need_registration' => new sfWidgetFormInput(),
      'languages'         => new sfWidgetFormInput(),
      'computer'          => new sfWidgetFormInput(),
      'additional_info'   => new sfWidgetFormTextarea(),
      'password'          => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorPropelChoice(array('model' => 'Worker', 'column' => 'id', 'required' => false)),
      'surname'           => new sfValidatorString(array('max_length' => 120)),
      'name'              => new sfValidatorString(array('max_length' => 80)),
      'father'            => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'age'               => new sfValidatorInteger(),
      'gender'            => new sfValidatorInteger(),
      'citizenship_id'    => new sfValidatorPropelChoice(array('model' => 'Citizenship', 'column' => 'id', 'required' => false)),
      'region_id'         => new sfValidatorPropelChoice(array('model' => 'Region', 'column' => 'id', 'required' => false)),
      'address'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'phone'             => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'email'             => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'target_regions'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'branch_id'         => new sfValidatorPropelChoice(array('model' => 'Branch', 'column' => 'id', 'required' => false)),
      'speciality_id'     => new sfValidatorPropelChoice(array('model' => 'Speciality', 'column' => 'id', 'required' => false)),
      'salary'            => new sfValidatorInteger(array('required' => false)),
      'schedule'          => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'job_type_id'       => new sfValidatorPropelChoice(array('model' => 'JobType', 'column' => 'id', 'required' => false)),
      'start_date'        => new sfValidatorDate(array('required' => false)),
      'need_place'        => new sfValidatorInteger(array('required' => false)),
      'has_permission'    => new sfValidatorInteger(array('required' => false)),
      'need_registration' => new sfValidatorInteger(array('required' => false)),
      'languages'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'computer'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'additional_info'   => new sfValidatorString(array('required' => false)),
      'password'          => new sfValidatorString(array('max_length' => 32, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('worker[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Worker';
  }


}
