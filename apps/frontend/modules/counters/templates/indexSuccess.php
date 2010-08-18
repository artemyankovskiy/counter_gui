<?php use_stylesheet("index.css") ?>
<h1>Список счетчиков</h1>

<table id="records">
  <thead>
    <tr>
      <th>ID</th>
      <th>Тип счетчика</th>
      <th>Тип сети</th>
      <th>Строка подключения</th>
      <th>Описание</th>
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

  <a href="<?php echo url_for('counters/new') ?>">Добавить</a>
