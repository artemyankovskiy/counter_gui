<h1>Список типов объектов</h1>

<table id="records">
  <thead>
    <tr>
      <th>ID</th>
      <th>Тип объекта</th>
      <th>Таблица для связи</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($object_types as $object_type): ?>
    <tr>
      <td><a href="<?php echo url_for('objectType/show?id='.$object_type->getId()) ?>"><?php echo $object_type->getId() ?></a></td>
      <td><?php echo $object_type->getObjectType() ?></td>
      <td><?php echo $object_type->getLinkedTable() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('objectType/new') ?>">Добавить</a>
