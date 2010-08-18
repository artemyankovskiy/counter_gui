<?php use_stylesheet("index.css") ?>
<h1>Список объектов</h1>

<table id="records">
  <thead>
    <tr>
      <th>ID</th>
      <th>Родитель</th>
      <th>Тип объекта</th>
      <th>Объект</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($objectss as $objects): ?>
    <tr>
      <td><a href="<?php echo url_for('objects/show?object_id='.$objects->getObjectId()) ?>"><?php echo $objects->getObjectId() ?></a></td>
      <td><?php echo $objects->getParentId() ?></td>
      <td><?php echo $objects->getObjectType()->getObjectType() ?></td>
      <td><?php echo sprintf( "%s (%s)", $objects->getCounters()->getCounterType()->getCounterName(), $objects->getCounters()->getDescription() ) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('objects/new') ?>">Добавить</a>
