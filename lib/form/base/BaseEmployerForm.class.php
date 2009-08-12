<?php

/**
 * Employer form base class.
 *
 * @package    sterh
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseEmployerForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'             => new sfWidgetFormInput(),
      'contact_person'    => new sfWidgetFormInput(),
      'address'           => new sfWidgetFormInput(),
      'phone'             => new sfWidgetFormInput(),
      'email'             => new sfWidgetFormInput(),
      'web'               => new sfWidgetFormInput(),
      'region_id'         => new sfWidgetFormPropelChoice(array('model' => 'Region', 'add_empty' => true)),
      'speciality_id'     => new sfWidgetFormPropelChoice(array('model' => 'Speciality', 'add_empty' => true)),
      'target_regions'    => new sfWidgetFormInput(),
      'salary'            => new sfWidgetFormInput(),
      'how_many_needed'   => new sfWidgetFormInput(),
      'schedule'          => new sfWidgetFormInput(),
      'start_date'        => new sfWidgetFormDate(),
      'provide_place'     => new sfWidgetFormInput(),
      'description'       => new sfWidgetFormTextarea(),
      'make_permission'   => new sfWidgetFormInput(),
      'make_registration' => new sfWidgetFormInput(),
      'education'         => new sfWidgetFormInput(),
      'experience'        => new sfWidgetFormInput(),
      'computer'          => new sfWidgetFormInput(),
      'age_start'         => new sfWidgetFormInput(),
      'age_end'           => new sfWidgetFormInput(),
      'gender'            => new sfWidgetFormInput(),
      'additional_info'   => new sfWidgetFormTextarea(),
      'password'          => new sfWidgetFormInput(),
      'id'                => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'title'             => new sfValidatorString(array('max_length' => 64)),
      'contact_person'    => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'address'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'phone'             => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'email'             => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'web'               => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'region_id'         => new sfValidatorPropelChoice(array('model' => 'Region', 'column' => 'id', 'required' => false)),
      'speciality_id'     => new sfValidatorPropelChoice(array('model' => 'Speciality', 'column' => 'id', 'required' => false)),
      'target_regions'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'salary'            => new sfValidatorInteger(array('required' => false)),
      'how_many_needed'   => new sfValidatorInteger(array('required' => false)),
      'schedule'          => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'start_date'        => new sfValidatorDate(array('required' => false)),
      'provide_place'     => new sfValidatorInteger(array('required' => false)),
      'description'       => new sfValidatorString(array('required' => false)),
      'make_permission'   => new sfValidatorInteger(array('required' => false)),
      'make_registration' => new sfValidatorInteger(array('required' => false)),
      'education'         => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'experience'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'computer'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'age_start'         => new sfValidatorInteger(array('required' => false)),
      'age_end'           => new sfValidatorInteger(array('required' => false)),
      'gender'            => new sfValidatorInteger(array('required' => false)),
      'additional_info'   => new sfValidatorString(array('required' => false)),
      'password'          => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'id'                => new sfValidatorPropelChoice(array('model' => 'Employer', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('employer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Employer';
  }


}
