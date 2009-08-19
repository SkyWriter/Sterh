<h1>Анкета соискателя</h1>

<table>
  <tbody>
    <tr>
      <th>ФИО:</th>
      <td><?php echo $worker->getSurname() ?> <?php echo $worker->getName() ?> <?php echo $worker->getFather() ?></td>
    </tr>
    <tr>
      <th>Возраст:</th>
      <td><?php echo $worker->getAge() ?></td>
    </tr>
    <tr>
      <th>Пол:</th>
      <td><?php echo $worker->getGenderText(); ?></td>
    </tr>
    <tr>
      <th>Гражданство:</th>
      <td><?php echo $worker->getCitizenship() ?></td>
    </tr>
    <tr>
      <th>Город / регион:</th>
      <td><?php echo $worker->getRegion() ?></td>
    </tr>
    <tr>
      <th>Адрес фактического проживания:</th>
      <td><?php echo $worker->getAddress() ?></td>
    </tr>
    <tr>
      <th>Телефон с кодом города:</th>
      <td><?php echo $worker->getPhone() ?></td>
    </tr>
    <tr>
      <th>Адрес электронной почты:</th>
      <td><?php echo $worker->getEmail() ?></td>
    </tr>
    <tr>
      <th>Ищет работу в регионах:</th>
      <td><?php echo $worker->getTargetRegions() ?></td>
    </tr>
    <tr>
      <th>Отрасль:</th>
      <td><?php echo $worker->getBranch() ?></td>
    </tr>
    <tr>
      <th>Специальность:</th>
      <td><?php echo $worker->getSpeciality() ?></td>
    </tr>
    <tr>
      <th>Заработная плата от:</th>
      <td><?php echo $worker->getSalary() ?></td>
    </tr>
    <tr>
      <th>График работы:</th>
      <td><?php echo $worker->getSchedule() ?></td>
    </tr>
    <tr>
      <th>Тип работы:</th>
      <td><?php echo $worker->getJobType() ?></td>
    </tr>
    <tr>
      <th>Может приступить к работе с:</th>
      <td><?php echo $worker->getStartDate() ?></td>
    </tr>
    <tr>
      <th>Требуется ли проживание:</th>
      <td><?php echo $worker->getNeedPlaceText() ?></td>
    </tr>
    <tr>
      <th>Имеется ли у разрешение на работу:</th>
      <td><?php echo $worker->getHasPermissionText() ?></td>
    </tr>
    <tr>
      <th>Требуется ли оформление регистрации по месту пребывания в РФ:</th>
      <td><?php echo $worker->getNeedRegistrationText() ?></td>
    </tr>
    <tr>
      <th>Знание иностранных языков:</th>
      <td><?php echo $worker->getLanguages() ?></td>
    </tr>
    <tr>
      <th>Знание компьютера:</th>
      <td><?php echo $worker->getComputer() ?></td>
    </tr>
    <tr>
      <th>Дополнительная информация:</th>
      <td><?php echo $worker->getAdditionalInfo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('worker/index') ?>">К списку соискателей</a>
