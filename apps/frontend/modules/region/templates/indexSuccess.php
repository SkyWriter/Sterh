<h1>Region List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($region_list as $region): ?>
    <tr>
      <td><a href="<?php echo url_for('region/show?id='.$region->getId()) ?>"><?php echo $region->getId() ?></a></td>
      <td><?php echo $region->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('region/new') ?>">New</a>
