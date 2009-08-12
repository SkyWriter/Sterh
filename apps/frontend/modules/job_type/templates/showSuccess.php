<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $job_type->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $job_type->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('job_type/edit?id='.$job_type->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('job_type/index') ?>">List</a>
