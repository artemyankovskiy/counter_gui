<?php use_stylesheet("index.css") ?>
<h1>Список типов счетчиков</h1>

<table id="records">
  <thead>
    <tr>
      <th>ID</th>
      <th>Название счетчика</th>
      <th>Описание</th>
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

  <a href="<?php echo url_for('counterType/new') ?>">Добавить</a>
