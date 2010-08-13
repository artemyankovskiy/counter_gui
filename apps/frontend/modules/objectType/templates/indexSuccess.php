<h1>Object types List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Object type</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($object_types as $object_type): ?>
    <tr>
      <td><a href="<?php echo url_for('objectType/show?id='.$object_type->getId()) ?>"><?php echo $object_type->getId() ?></a></td>
      <td><?php echo $object_type->getObjectType() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('objectType/new') ?>">New</a>
