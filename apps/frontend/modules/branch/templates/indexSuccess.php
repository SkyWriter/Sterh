<h1>Branch List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($branch_list as $branch): ?>
    <tr>
      <td><a href="<?php echo url_for('branch/show?id='.$branch->getId()) ?>"><?php echo $branch->getId() ?></a></td>
      <td><?php echo $branch->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('branch/new') ?>">New</a>
