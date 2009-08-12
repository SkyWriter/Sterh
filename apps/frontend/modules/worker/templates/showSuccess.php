<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $worker->getId() ?></td>
    </tr>
    <tr>
      <th>Surname:</th>
      <td><?php echo $worker->getSurname() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $worker->getName() ?></td>
    </tr>
    <tr>
      <th>Father:</th>
      <td><?php echo $worker->getFather() ?></td>
    </tr>
    <tr>
      <th>Age:</th>
      <td><?php echo $worker->getAge() ?></td>
    </tr>
    <tr>
      <th>Gender:</th>
      <td><?php echo $worker->getGender() ?></td>
    </tr>
    <tr>
      <th>Citizenship:</th>
      <td><?php echo $worker->getCitizenshipId() ?></td>
    </tr>
    <tr>
      <th>Region:</th>
      <td><?php echo $worker->getRegionId() ?></td>
    </tr>
    <tr>
      <th>Address:</th>
      <td><?php echo $worker->getAddress() ?></td>
    </tr>
    <tr>
      <th>Phone:</th>
      <td><?php echo $worker->getPhone() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $worker->getEmail() ?></td>
    </tr>
    <tr>
      <th>Target regions:</th>
      <td><?php echo $worker->getTargetRegions() ?></td>
    </tr>
    <tr>
      <th>Branch:</th>
      <td><?php echo $worker->getBranchId() ?></td>
    </tr>
    <tr>
      <th>Speciality:</th>
      <td><?php echo $worker->getSpecialityId() ?></td>
    </tr>
    <tr>
      <th>Salary:</th>
      <td><?php echo $worker->getSalary() ?></td>
    </tr>
    <tr>
      <th>Schedule:</th>
      <td><?php echo $worker->getSchedule() ?></td>
    </tr>
    <tr>
      <th>Job type:</th>
      <td><?php echo $worker->getJobTypeId() ?></td>
    </tr>
    <tr>
      <th>Start date:</th>
      <td><?php echo $worker->getStartDate() ?></td>
    </tr>
    <tr>
      <th>Need place:</th>
      <td><?php echo $worker->getNeedPlace() ?></td>
    </tr>
    <tr>
      <th>Has permission:</th>
      <td><?php echo $worker->getHasPermission() ?></td>
    </tr>
    <tr>
      <th>Need registration:</th>
      <td><?php echo $worker->getNeedRegistration() ?></td>
    </tr>
    <tr>
      <th>Languages:</th>
      <td><?php echo $worker->getLanguages() ?></td>
    </tr>
    <tr>
      <th>Computer:</th>
      <td><?php echo $worker->getComputer() ?></td>
    </tr>
    <tr>
      <th>Additional info:</th>
      <td><?php echo $worker->getAdditionalInfo() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $worker->getPassword() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('worker/edit?id='.$worker->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('worker/index') ?>">List</a>
