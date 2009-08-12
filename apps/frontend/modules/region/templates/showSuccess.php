<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $region->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $region->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('region/edit?id='.$region->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('region/index') ?>">List</a>
