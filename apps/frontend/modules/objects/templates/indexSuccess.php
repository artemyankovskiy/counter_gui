<h1>Objectss List</h1>

<table>
  <thead>
    <tr>
      <th>Object</th>
      <th>Parent</th>
      <th>Object type</th>
      <th>Object link</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($objectss as $objects): ?>
    <tr>
      <td><a href="<?php echo url_for('objects/show?object_id='.$objects->getObjectId()) ?>"><?php echo $objects->getObjectId() ?></a></td>
      <td><?php echo $objects->getParentId() ?></td>
      <td><?php echo $objects->getObjectTypeId() ?></td>
      <td><?php echo $objects->getObjectLinkId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('objects/new') ?>">New</a>
