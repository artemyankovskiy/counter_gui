<table id="view">
  <tbody>
    <tr>
      <th>ID:</th>
      <td><?php echo $counter_type->getCounterTypeId() ?></td>
    </tr>
    <tr>
      <th>Название счетчика:</th>
      <td><?php echo $counter_type->getCounterName() ?></td>
    </tr>
    <tr>
      <th>Описание:</th>
      <td><?php echo $counter_type->getDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('counterType/edit?counter_type_id='.$counter_type->getCounterTypeId()) ?>">Редактировать</a>
&nbsp;
<a href="<?php echo url_for('counterType/index') ?>">Список</a>
