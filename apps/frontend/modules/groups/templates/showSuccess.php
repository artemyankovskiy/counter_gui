<table>
  <tbody>
    <tr>
      <th>Gid:</th>
      <td><?php echo $users_group->getGid() ?></td>
    </tr>
    <tr>
      <th>Groupname:</th>
      <td><?php echo $users_group->getGroupname() ?></td>
    </tr>
    <tr>
      <th>Info:</th>
      <td><?php echo $users_group->getInfo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('groups/edit?gid='.$users_group->getGid()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('groups/index') ?>">List</a>
