<table id="view">
  <tbody>
    <tr>
      <th>ID:</th>
      <td><?php echo $objects->getObjectId() ?></td>
    </tr>
    <tr>
      <th>Родитель:</th>
      <td><?php echo $objects->getParentId() ?></td>
    </tr>
    <tr>
      <th>Тип объекта:</th>
      <td><?php echo $objects->getObjectType()->getObjectType() ?></td>
    </tr>
    <tr>
      <th>Объект:</th>
      <td><?php echo sprintf( "%s (%s)", $objects->getCounters()->getCounterType()->getCounterName(), $objects->getCounters()->getDescription() ) ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('objects/edit?object_id='.$objects->getObjectId()) ?>">Редактировать</a>
&nbsp;
<a href="<?php echo url_for('objects/index') ?>">Список</a>
