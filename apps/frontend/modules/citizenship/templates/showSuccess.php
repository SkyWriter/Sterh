<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $citizenship->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $citizenship->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('citizenship/edit?id='.$citizenship->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('citizenship/index') ?>">List</a>
