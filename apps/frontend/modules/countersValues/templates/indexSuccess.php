<?php use_stylesheet("index.css") ?>

<h1>Список показаний счетчиков</h1>

<table id="records">
  <thead>
    <tr>
      <th>ID</th>
      <th>Счетчик</th>
      <th>Дата съема показаний</th>
      <th>Показания</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($counters_valuess as $counters_values): ?>
    <tr>
      <td><a href="<?php echo url_for('countersValues/show?id='.$counters_values->getId()) ?>"><?php echo $counters_values->getId() ?></a></td>
      <td><?php echo  sprintf( "%s (%s)", $counters_values->getCounters()->getCounterType()->getCounterName(), $counters_values->getCounters()->getDescription() ) ?></td>
      <td><?php echo $counters_values->getTimestamp() ?></td>
      <td><?php echo $counters_values->getCounterValue() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  <a href="<?php echo url_for('countersValues/new') ?>">Добавить</a>
