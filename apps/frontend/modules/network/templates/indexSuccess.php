<h1>Список типов сетей</h1>

<table id="records">
  <thead>
    <tr>
      <th>ID</th>
      <th>Тип сети</th>
      <th>Описание</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($network_types as $network_type): ?>
    <tr>
      <td><a href="<?php echo url_for('network/show?network_type_id='.$network_type->getNetworkTypeId()) ?>"><?php echo $network_type->getNetworkTypeId() ?></a></td>
      <td><?php echo $network_type->getNetworkType() ?></td>
      <td><?php echo $network_type->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('network/new') ?>">Добавить</a>
