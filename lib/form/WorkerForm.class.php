<?php

/**
 * Worker form.
 *
 * @package    sterh
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class WorkerForm extends BaseWorkerForm
{
  public function configure()
  {
    $this->widgetSchema['need_place'] = new sfWidgetFormChoice(array(
      'expanded' => true,
      'choices'  => array(1 => 'Да', 0 => 'Нет'),
    ));
    
    $this->widgetSchema['has_permission'] = new sfWidgetFormChoice(array(
      'expanded' => true,
      'choices'  => array(1 => 'Да', 0 => 'Нет'),
    ));
    
    $this->widgetSchema['need_registration'] = new sfWidgetFormChoice(array(
      'expanded' => true,
      'choices'  => array(1 => 'Да', 0 => 'Нет'),
    ));    
    
    $this->widgetSchema['gender'] = new sfWidgetFormChoice(array(
      'expanded' => true,
      'choices'  => array(1 => 'Мужской', 2 => 'Женский'),
    ));
    
    $this->widgetSchema->setLabels(array( 
      'surname'    => 'Фамилия',
      'name' => 'Имя',
      'father' => 'Отчество',
      'age' => 'Возраст',
      'gender' => 'Пол',
      'citizenship_id' => 'Гражданство',
      'region_id' => 'Город / регион',
      'address' => 'Адрес фактического проживания',
      'phone' => 'Телефон с кодом города',
      'email' => 'Адрес электронной почты',
      'target_regions' => 'Укажите регион(ы) РФ, в котором Вы ищете работу',
      'branch_id' => 'Отрасль',
      'speciality_id' => 'Специальность',
      'salary' => 'Заработная плата от',
      'schedule' => 'График работы',
      'job_type_id' => 'Тип работы',
      'start_date' => 'Дата, когда Вы готовы приступить к работе',
      'need_place' => 'Требуется ли Вам проживание',
      'has_permission' => 'Имеется ли у Вас разрешение на работу',
      'need_registration' => 'Требуется ли Вам оформление регистрации по месту пребывания в РФ',
      'languages' => 'Знание иностранных языков',
      'computer' => 'Знание компьютера',
      'additional_info' => 'Дополнительная информация',
      'password' => 'Пароль'
    ));
  }
}
