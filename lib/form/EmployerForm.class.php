<?php

/**
 * Employer form.
 *
 * @package    sterh
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class EmployerForm extends BaseEmployerForm
{
  public function configure()
  {
    $this->widgetSchema['provide_place'] = new sfWidgetFormChoice(array(
      'expanded' => true,
      'choices'  => array(1 => 'Да', 0 => 'Нет'),
    ));
    
    $this->widgetSchema['make_permission'] = new sfWidgetFormChoice(array(
      'expanded' => true,
      'choices'  => array(1 => 'Да', 0 => 'Нет'),
    ));
    
    $this->widgetSchema['make_registration'] = new sfWidgetFormChoice(array(
      'expanded' => true,
      'choices'  => array(1 => 'Да', 0 => 'Нет'),
    ));    
    
    $this->widgetSchema['gender'] = new sfWidgetFormChoice(array(
      'expanded' => true,
      'choices'  => array(0 => 'Не важно', 1 => 'Мужской', 2 => 'Женский'),
    ));
      
    $this->widgetSchema['start_date'] = new sfWidgetFormJQueryDate();
    
    $this->widgetSchema->setLabels(array( 
      'title'    => 'Наименование',
      'contact_person'    => 'Контактное лицо',
      'address' => 'Адрес',
      'phone' => 'Номер телефона',
      'email' => 'Адрес электронной почты',
      'web' => 'Адрес веб-сайта',
      'region_id' => 'Регион / город',
      'speciality_id' => 'Специальность',
      'target_regions' => 'Укажите регион(ы) РФ, в котором(ых) сотрудник будет работать',
      'salary' => 'Заработная плата до',
      'how_many_needed' => 'Необходимое количество работников',
      'schedule' => 'График работы',
      'start_date' => 'Планируемая дата приема на работу',
      'provide_place' => 'Предоставляет ли Ваша организация жилье',
      'description' => 'Описание вакансии, Информация о проживании (если предоставляется), наличие сверхурочной работы, Спец. условия найма, льготы и выплаты:  (б/л, медобслуживание, пособия на детей, страхование, проездные, питание, служ а/м, амортизация личного автомобиля, повышение квалификации, перспектива карьеры и др.)',
      'make_permission' => 'Будет ли Ваша организация оформлять разрешение на работу иностранному специалисту',
      'make_registration' => 'Будет ли Ваша организация оформлять регистрацию по месту проживания иностранного специалиста',
      'education' => 'Образование',
      'experience' => 'Опыт работы',
      'computer' => 'Знание ПК',
      'languages' => 'Знание иностранных языков',
      'age_start' => 'Возраст от',
      'age_end' => 'Возраст до',
      'gender' => 'Пол',
      'additional_info' => 'Дополнительная информация',
      'password' => 'Пароль'
    ));
  }
}
