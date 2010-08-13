<table>
  <tbody>
    <tr>
      <th>Counter type:</th>
      <td><?php echo $counter_type->getCounterTypeId() ?></td>
    </tr>
    <tr>
      <th>Counter name:</th>
      <td><?php echo $counter_type->getCounterName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $counter_type->getDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('counterType/edit?counter_type_id='.$counter_type->getCounterTypeId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('counterType/index') ?>">List</a>
