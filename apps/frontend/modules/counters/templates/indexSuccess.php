<h1>Counterss List</h1>

<table border="1">
  <thead>
    <tr>
      <th>Counter</th>
      <th>Counter type</th>
      <th>Network type</th>
      <th>Connection string</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($counterss as $counters): ?>
    <tr>
      <td><a href="<?php echo url_for('counters/show?counter_id='.$counters->getCounterId()) ?>"><?php echo $counters->getCounterId() ?></a></td>
      <td><?php echo $counters->getCounterType()->getCounterName() ?></td>
      <td><?php echo $counters->getNetworkType()->getNetworkType() ?></td>
      <td><?php echo $counters->getConnectionString() ?></td>
      <td><?php echo $counters->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('counters/new') ?>">New</a>
