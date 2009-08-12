<h1>Speciality List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($speciality_list as $speciality): ?>
    <tr>
      <td><a href="<?php echo url_for('speciality/show?id='.$speciality->getId()) ?>"><?php echo $speciality->getId() ?></a></td>
      <td><?php echo $speciality->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('speciality/new') ?>">New</a>
