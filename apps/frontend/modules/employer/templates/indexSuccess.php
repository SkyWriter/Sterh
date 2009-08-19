<h1>Просмотр анкет работодателей</h1>

<table>
  <thead>
    <tr>
      <th>Наименование</th>
      <th>Контактное лицо</th>
      <th>Адрес</th>
      <th>Телефон</th>
      <th>Email</th>
      <th>Регион</th>
      <th>Специальность</th>
      <th>Регионы, где будет работать сотрудник</th>
      <th>З/п до</th>
      <th>Кол-во работников</th>
      <th>График</th>
      <th>Дата приема</th>
      <th>Предоставляет жилье</th>
      <th>Оформляет разрешение на работу</th>
      <th>Оформляет регистрацию</th>
      <th>Требуемое образование</th>
      <th>Требуемый опыт</th>
      <th>Требуемые знания ПК</th>
      <th>Возраст от</th>
      <th>Возраст до</th>
      <th>Пол</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($employer_list as $employer): ?>
    <tr>
      <td><a href="<?php echo url_for('employer/show?id='.$employer->getId()) ?>"><?php echo $employer->getTitle() ?></a></td>
      <td><?php echo $employer->getContactPerson() ?></td>
      <td><?php echo $employer->getAddress() ?></td>
      <td><?php echo $employer->getPhone() ?></td>
      <td><?php echo $employer->getEmail() ?></td>
      <td><?php echo $employer->getRegion() ?></td>
      <td><?php echo $employer->getSpeciality() ?></td>
      <td><?php echo $employer->getTargetRegions() ?></td>
      <td><?php echo $employer->getSalary() ?></td>
      <td><?php echo $employer->getHowManyNeeded() ?></td>
      <td><?php echo $employer->getSchedule() ?></td>
      <td><?php echo $employer->getStartDate() ?></td>
      <td><?php echo $employer->getProvidePlaceText() ?></td>
      <td><?php echo $employer->getMakePermissionText() ?></td>
      <td><?php echo $employer->getMakeRegistrationText() ?></td>
      <td><?php echo $employer->getEducation() ?></td>
      <td><?php echo $employer->getExperience() ?></td>
      <td><?php echo $employer->getComputer() ?></td>
      <td><?php echo $employer->getAgeStart() ?></td>
      <td><?php echo $employer->getAgeEnd() ?></td>
      <td><?php echo $employer->getGenderText() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  
  <br />
  <a href="<?php echo url_for('employer/new') ?>">Заполнить анкету работодателя</a>
