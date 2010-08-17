<h1>Network types List</h1>

<table border="1">
  <thead>
    <tr>
      <th>Network type</th>
      <th>Network type</th>
      <th>Description</th>
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

  <a href="<?php echo url_for('network/new') ?>">New</a>
