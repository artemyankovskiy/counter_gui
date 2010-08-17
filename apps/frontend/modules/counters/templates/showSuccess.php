<table>
  <tbody>
    <tr>
      <th>Counter:</th>
      <td><?php echo $counters->getCounterId() ?></td>
    </tr>
    <tr>
      <th>Counter type:</th>
      <td><?php echo $counters->getCounterType()->getCounterName() ?></td>
    </tr>
    <tr>
      <th>Network type:</th>
      <td><?php echo $counters->getNetworkType()->getNetworkType() ?></td>
    </tr>
    <tr>
      <th>Connection string:</th>
      <td><?php echo $counters->getConnectionString() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $counters->getDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('counters/edit?counter_id='.$counters->getCounterId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('counters/index') ?>">List</a>
