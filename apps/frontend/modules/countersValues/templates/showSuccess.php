<table id="view">
  <tbody>
    <tr>
      <th>ID:</th>
      <td><?php echo $counters_values->getId() ?></td>
    </tr>
    <tr>
      <th>Счетчик:</th>
      <td><?php echo sprintf( "%s (%s)", $counters_values->getCounters()->getCounterType()->getCounterName(), $counters_values->getCounters()->getDescription() ) ?></td>
    </tr>
    <tr>
      <th>Дата съема показаний:</th>
      <td><?php echo $counters_values->getTimestamp() ?></td>
    </tr>
    <tr>
      <th>Показания:</th>
      <td><?php echo $counters_values->getCounterValue() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('countersValues/edit?id='.$counters_values->getId()) ?>">Редактировать</a>
&nbsp;
<a href="<?php echo url_for('countersValues/index') ?>">Список</a>
