<h1>Job type List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($job_type_list as $job_type): ?>
    <tr>
      <td><a href="<?php echo url_for('job_type/show?id='.$job_type->getId()) ?>"><?php echo $job_type->getId() ?></a></td>
      <td><?php echo $job_type->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('job_type/new') ?>">New</a>
