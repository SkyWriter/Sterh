<h1>Анкета работодателя</h1>

<table>
  <tbody>
    <tr>
      <th>Наименование:</th>
      <td><?php echo $employer->getTitle() ?></td>
    </tr>
    <tr>
      <th>Контактное лицо:</th>
      <td><?php echo $employer->getContactPerson() ?></td>
    </tr>
    <tr>
      <th>Адрес:</th>
      <td><?php echo $employer->getAddress() ?></td>
    </tr>
    <tr>
      <th>Номер телефона:</th>
      <td><?php echo $employer->getPhone() ?></td>
    </tr>
    <tr>
      <th>Адрес электронной почты:</th>
      <td><?php echo $employer->getEmail() ?></td>
    </tr>
    <tr>
      <th>Адрес веб-сайта:</th>
      <td><?php echo $employer->getWeb() ?></td>
    </tr>
    <tr>
      <th>Регион / город:</th>
      <td><?php echo $employer->getRegion() ?></td>
    </tr>
    <tr>
      <th>Специальность:</th>
      <td><?php echo $employer->getSpeciality() ?></td>
    </tr>
    <tr>
      <th>Регион(ы) РФ, в котором(ых) сотрудник будет работать:</th>
      <td><?php echo $employer->getTargetRegions() ?></td>
    </tr>
    <tr>
      <th>Заработная плата до:</th>
      <td><?php echo $employer->getSalary() ?></td>
    </tr>
    <tr>
      <th>Необходимое количество работников:</th>
      <td><?php echo $employer->getHowManyNeeded() ?></td>
    </tr>
    <tr>
      <th>График работы:</th>
      <td><?php echo $employer->getSchedule() ?></td>
    </tr>
    <tr>
      <th>Планируемая дата приема на работу:</th>
      <td><?php echo $employer->getStartDate() ?></td>
    </tr>
    <tr>
      <th>Предоставляет ли организация жилье:</th>
      <td><?php echo $employer->getProvidePlaceText() ?></td>
    </tr>
    <tr>
      <th>Описание вакансии:</th>
      <td><?php echo $employer->getDescription() ?></td>
    </tr>
    <tr>
      <th>Будет ли организация оформлять разрешение на работу иностранному специалисту:</th>
      <td><?php echo $employer->getMakePermissionText() ?></td>
    </tr>
    <tr>
      <th>Будет ли организация оформлять регистрацию по месту проживания иностранного специалиста:</th>
      <td><?php echo $employer->getMakeRegistrationText() ?></td>
    </tr>
    <tr>
      <th>Образование:</th>
      <td><?php echo $employer->getEducation() ?></td>
    </tr>
    <tr>
      <th>Опыт работы:</th>
      <td><?php echo $employer->getExperience() ?></td>
    </tr>
    <tr>
      <th>Знание ПК:</th>
      <td><?php echo $employer->getComputer() ?></td>
    </tr>
    <tr>
      <th>Знание иностранных языков:</th>
      <td><?php echo $employer->getLanguages() ?></td>
    </tr>    
    <tr>
      <th>Возраст от:</th>
      <td><?php echo $employer->getAgeStart() ?></td>
    </tr>
    <tr>
      <th>Возраст до:</th>
      <td><?php echo $employer->getAgeEnd() ?></td>
    </tr>
    <tr>
      <th>Пол:</th>
      <td><?php echo $employer->getGenderText() ?></td>
    </tr>
    <tr>
      <th>Дополнительная информация:</th>
      <td><?php echo $employer->getAdditionalInfo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('employer/index') ?>">К списку работодателей</a>