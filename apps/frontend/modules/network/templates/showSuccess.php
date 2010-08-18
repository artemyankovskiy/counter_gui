<table id="view">
  <tbody>
    <tr>
      <th>ID:</th>
      <td><?php echo $network_type->getNetworkTypeId() ?></td>
    </tr>
    <tr>
      <th>Тип сети:</th>
      <td><?php echo $network_type->getNetworkType() ?></td>
    </tr>
    <tr>
      <th>Описание:</th>
      <td><?php echo $network_type->getDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('network/edit?network_type_id='.$network_type->getNetworkTypeId()) ?>">Редактировать</a>
&nbsp;
<a href="<?php echo url_for('network/index') ?>">Список</a>
