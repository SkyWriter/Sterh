<h1>Анкеты соискателей</h1>

<table>
  <thead>
    <tr>
      <th>ФИО</th>
      <th>Возраст</th>
      <th>Пол</th>
      <th>Гражданство</th>
      <th>Регион</th>
      <th>Адрес</th>
      <th>Телефон</th>
      <th>Email</th>
      <th>В каких регионах хотел(а) бы работать</th>
      <th>Отрасль</th>
      <th>Специальность</th>
      <th>З/п от</th>
      <th>Расписание</th>
      <th>Тип работы</th>
      <th>Готов(а) приступить с</th>
      <th>Требуется проживание</th>
      <th>Есть разрешение на работу</th>
      <th>Требуется регистрация</th>
      <th>Языки</th>
      <th>Знание ПК</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($worker_list as $worker): ?>
    <tr>
      <td><a href="<?php echo url_for('worker/show?id='.$worker->getId()) ?>"><?php echo $worker->getSurname() ?> <?php echo $worker->getName() ?> <?php echo $worker->getFather() ?></a></td>
      <td><?php echo $worker->getAge() ?></td>
      <td><?php echo $worker->getGenderText() ?></td>
      <td><?php echo $worker->getCitizenship() ?></td>
      <td><?php echo $worker->getRegion() ?></td>
      <td><?php echo $worker->getAddress() ?></td>
      <td><?php echo $worker->getPhone() ?></td>
      <td><?php echo $worker->getEmail() ?></td>
      <td><?php echo $worker->getTargetRegions() ?></td>
      <td><?php echo $worker->getBranch() ?></td>
      <td><?php echo $worker->getSpeciality() ?></td>
      <td><?php echo $worker->getSalary() ?></td>
      <td><?php echo $worker->getSchedule() ?></td>
      <td><?php echo $worker->getJobType() ?></td>
      <td><?php echo $worker->getStartDate() ?></td>
      <td><?php echo $worker->getNeedPlaceText() ?></td>
      <td><?php echo $worker->getHasPermissionText() ?></td>
      <td><?php echo $worker->getNeedRegistrationText() ?></td>
      <td><?php echo $worker->getLanguages() ?></td>
      <td><?php echo $worker->getComputer() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <br/>
  <a href="<?php echo url_for('worker/new') ?>">Заполнить анкету соискателя</a>
