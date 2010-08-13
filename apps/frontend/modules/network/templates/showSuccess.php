<table>
  <tbody>
    <tr>
      <th>Network type:</th>
      <td><?php echo $network_type->getNetworkTypeId() ?></td>
    </tr>
    <tr>
      <th>Network type:</th>
      <td><?php echo $network_type->getNetworkType() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $network_type->getDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('network/edit?network_type_id='.$network_type->getNetworkTypeId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('network/index') ?>">List</a>
