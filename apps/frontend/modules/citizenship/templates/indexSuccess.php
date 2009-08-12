<h1>Citizenship List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($citizenship_list as $citizenship): ?>
    <tr>
      <td><a href="<?php echo url_for('citizenship/show?id='.$citizenship->getId()) ?>"><?php echo $citizenship->getId() ?></a></td>
      <td><?php echo $citizenship->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('citizenship/new') ?>">New</a>
