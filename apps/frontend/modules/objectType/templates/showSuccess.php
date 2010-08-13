<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $object_type->getId() ?></td>
    </tr>
    <tr>
      <th>Object type:</th>
      <td><?php echo $object_type->getObjectType() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('objectType/edit?id='.$object_type->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('objectType/index') ?>">List</a>
