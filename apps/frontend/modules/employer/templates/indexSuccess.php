<h1>Employer List</h1>

<table>
  <thead>
    <tr>
      <th>Title</th>
      <th>Contact person</th>
      <th>Address</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Web</th>
      <th>Region</th>
      <th>Speciality</th>
      <th>Target regions</th>
      <th>Salary</th>
      <th>How many needed</th>
      <th>Schedule</th>
      <th>Start date</th>
      <th>Provide place</th>
      <th>Description</th>
      <th>Make permission</th>
      <th>Make registration</th>
      <th>Education</th>
      <th>Experience</th>
      <th>Computer</th>
      <th>Age start</th>
      <th>Age end</th>
      <th>Gender</th>
      <th>Additional info</th>
      <th>Password</th>
      <th>Id</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($employer_list as $employer): ?>
    <tr>
      <td><?php echo $employer->getTitle() ?></td>
      <td><?php echo $employer->getContactPerson() ?></td>
      <td><?php echo $employer->getAddress() ?></td>
      <td><?php echo $employer->getPhone() ?></td>
      <td><?php echo $employer->getEmail() ?></td>
      <td><?php echo $employer->getWeb() ?></td>
      <td><?php echo $employer->getRegionId() ?></td>
      <td><?php echo $employer->getSpecialityId() ?></td>
      <td><?php echo $employer->getTargetRegions() ?></td>
      <td><?php echo $employer->getSalary() ?></td>
      <td><?php echo $employer->getHowManyNeeded() ?></td>
      <td><?php echo $employer->getSchedule() ?></td>
      <td><?php echo $employer->getStartDate() ?></td>
      <td><?php echo $employer->getProvidePlace() ?></td>
      <td><?php echo $employer->getDescription() ?></td>
      <td><?php echo $employer->getMakePermission() ?></td>
      <td><?php echo $employer->getMakeRegistration() ?></td>
      <td><?php echo $employer->getEducation() ?></td>
      <td><?php echo $employer->getExperience() ?></td>
      <td><?php echo $employer->getComputer() ?></td>
      <td><?php echo $employer->getAgeStart() ?></td>
      <td><?php echo $employer->getAgeEnd() ?></td>
      <td><?php echo $employer->getGender() ?></td>
      <td><?php echo $employer->getAdditionalInfo() ?></td>
      <td><?php echo $employer->getPassword() ?></td>
      <td><a href="<?php echo url_for('employer/show?id='.$employer->getId()) ?>"><?php echo $employer->getId() ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('employer/new') ?>">New</a>
