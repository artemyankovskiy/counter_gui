<table>
  <tbody>
    <tr>
      <th>Object:</th>
      <td><?php echo $objects->getObjectId() ?></td>
    </tr>
    <tr>
      <th>Parent:</th>
      <td><?php echo $objects->getParentId() ?></td>
    </tr>
    <tr>
      <th>Object type:</th>
      <td><?php echo $objects->getObjectTypeId() ?></td>
    </tr>
    <tr>
      <th>Object link:</th>
      <td><?php echo $objects->getObjectLinkId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('objects/edit?object_id='.$objects->getObjectId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('objects/index') ?>">List</a>
