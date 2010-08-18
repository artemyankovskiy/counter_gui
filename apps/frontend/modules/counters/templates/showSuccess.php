<table id="view">
  <tbody>
    <tr>
      <th>ID:</th>
      <td><?php echo $counters->getCounterId() ?></td>
    </tr>
    <tr>
      <th>Тип счетчика:</th>
      <td><?php echo $counters->getCounterType()->getCounterName() ?></td>
    </tr>
    <tr>
      <th>Тип сети:</th>
      <td><?php echo $counters->getNetworkType()->getNetworkType() ?></td>
    </tr>
    <tr>
      <th>Строка подключения:</th>
      <td><?php echo $counters->getConnectionString() ?></td>
    </tr>
    <tr>
      <th>Описание:</th>
      <td><?php echo $counters->getDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('counters/edit?counter_id='.$counters->getCounterId()) ?>">Редактировать</a>
&nbsp;
<a href="<?php echo url_for('counters/index') ?>">Список</a>
