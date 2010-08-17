<h1>Counter types List</h1>

<table border="1"">
  <thead>
    <tr>
      <th>Counter type</th>
      <th>Counter name</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($counter_types as $counter_type): ?>
    <tr>
      <td><a href="<?php echo url_for('counterType/show?counter_type_id='.$counter_type->getCounterTypeId()) ?>"><?php echo $counter_type->getCounterTypeId() ?></a></td>
      <td><?php echo $counter_type->getCounterName() ?></td>
      <td><?php echo $counter_type->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('counterType/new') ?>">New</a>
