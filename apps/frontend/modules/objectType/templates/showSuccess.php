<table id="view">
  <tbody>
    <tr>
      <th>ID:</th>
      <td><?php echo $object_type->getId() ?></td>
    </tr>
    <tr>
      <th>Тип объекта:</th>
      <td><?php echo $object_type->getObjectType() ?></td>
    </tr>
    <tr>
        <th>Таблица для связи:</th>
        <td><?php echo $object_type->getLinkedTable() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('objectType/edit?id='.$object_type->getId()) ?>">Редактировать</a>
&nbsp;
<a href="<?php echo url_for('objectType/index') ?>">Список</a>
