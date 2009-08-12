<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $branch->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $branch->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('branch/edit?id='.$branch->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('branch/index') ?>">List</a>
