<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $speciality->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $speciality->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('speciality/edit?id='.$speciality->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('speciality/index') ?>">List</a>
