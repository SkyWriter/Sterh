<h1>Worker List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Surname</th>
      <th>Name</th>
      <th>Father</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Citizenship</th>
      <th>Region</th>
      <th>Address</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Target regions</th>
      <th>Branch</th>
      <th>Speciality</th>
      <th>Salary</th>
      <th>Schedule</th>
      <th>Job type</th>
      <th>Start date</th>
      <th>Need place</th>
      <th>Has permission</th>
      <th>Need registration</th>
      <th>Languages</th>
      <th>Computer</th>
      <th>Additional info</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($worker_list as $worker): ?>
    <tr>
      <td><a href="<?php echo url_for('worker/show?id='.$worker->getId()) ?>"><?php echo $worker->getId() ?></a></td>
      <td><?php echo $worker->getSurname() ?></td>
      <td><?php echo $worker->getName() ?></td>
      <td><?php echo $worker->getFather() ?></td>
      <td><?php echo $worker->getAge() ?></td>
      <td><?php echo $worker->getGender() ?></td>
      <td><?php echo $worker->getCitizenshipId() ?></td>
      <td><?php echo $worker->getRegionId() ?></td>
      <td><?php echo $worker->getAddress() ?></td>
      <td><?php echo $worker->getPhone() ?></td>
      <td><?php echo $worker->getEmail() ?></td>
      <td><?php echo $worker->getTargetRegions() ?></td>
      <td><?php echo $worker->getBranchId() ?></td>
      <td><?php echo $worker->getSpecialityId() ?></td>
      <td><?php echo $worker->getSalary() ?></td>
      <td><?php echo $worker->getSchedule() ?></td>
      <td><?php echo $worker->getJobTypeId() ?></td>
      <td><?php echo $worker->getStartDate() ?></td>
      <td><?php echo $worker->getNeedPlace() ?></td>
      <td><?php echo $worker->getHasPermission() ?></td>
      <td><?php echo $worker->getNeedRegistration() ?></td>
      <td><?php echo $worker->getLanguages() ?></td>
      <td><?php echo $worker->getComputer() ?></td>
      <td><?php echo $worker->getAdditionalInfo() ?></td>
      <td><?php echo $worker->getPassword() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('worker/new') ?>">New</a>
