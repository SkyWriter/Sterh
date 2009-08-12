<table>
  <tbody>
    <tr>
      <th>Title:</th>
      <td><?php echo $employer->getTitle() ?></td>
    </tr>
    <tr>
      <th>Contact person:</th>
      <td><?php echo $employer->getContactPerson() ?></td>
    </tr>
    <tr>
      <th>Address:</th>
      <td><?php echo $employer->getAddress() ?></td>
    </tr>
    <tr>
      <th>Phone:</th>
      <td><?php echo $employer->getPhone() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $employer->getEmail() ?></td>
    </tr>
    <tr>
      <th>Web:</th>
      <td><?php echo $employer->getWeb() ?></td>
    </tr>
    <tr>
      <th>Region:</th>
      <td><?php echo $employer->getRegionId() ?></td>
    </tr>
    <tr>
      <th>Speciality:</th>
      <td><?php echo $employer->getSpecialityId() ?></td>
    </tr>
    <tr>
      <th>Target regions:</th>
      <td><?php echo $employer->getTargetRegions() ?></td>
    </tr>
    <tr>
      <th>Salary:</th>
      <td><?php echo $employer->getSalary() ?></td>
    </tr>
    <tr>
      <th>How many needed:</th>
      <td><?php echo $employer->getHowManyNeeded() ?></td>
    </tr>
    <tr>
      <th>Schedule:</th>
      <td><?php echo $employer->getSchedule() ?></td>
    </tr>
    <tr>
      <th>Start date:</th>
      <td><?php echo $employer->getStartDate() ?></td>
    </tr>
    <tr>
      <th>Provide place:</th>
      <td><?php echo $employer->getProvidePlace() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $employer->getDescription() ?></td>
    </tr>
    <tr>
      <th>Make permission:</th>
      <td><?php echo $employer->getMakePermission() ?></td>
    </tr>
    <tr>
      <th>Make registration:</th>
      <td><?php echo $employer->getMakeRegistration() ?></td>
    </tr>
    <tr>
      <th>Education:</th>
      <td><?php echo $employer->getEducation() ?></td>
    </tr>
    <tr>
      <th>Experience:</th>
      <td><?php echo $employer->getExperience() ?></td>
    </tr>
    <tr>
      <th>Computer:</th>
      <td><?php echo $employer->getComputer() ?></td>
    </tr>
    <tr>
      <th>Age start:</th>
      <td><?php echo $employer->getAgeStart() ?></td>
    </tr>
    <tr>
      <th>Age end:</th>
      <td><?php echo $employer->getAgeEnd() ?></td>
    </tr>
    <tr>
      <th>Gender:</th>
      <td><?php echo $employer->getGender() ?></td>
    </tr>
    <tr>
      <th>Additional info:</th>
      <td><?php echo $employer->getAdditionalInfo() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $employer->getPassword() ?></td>
    </tr>
    <tr>
      <th>Id:</th>
      <td><?php echo $employer->getId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('employer/edit?id='.$employer->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('employer/index') ?>">List</a>
