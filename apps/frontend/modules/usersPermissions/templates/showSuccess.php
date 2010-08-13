<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $users_permissions->getId() ?></td>
    </tr>
    <tr>
      <th>Object:</th>
      <td><?php echo $users_permissions->getObjectId() ?></td>
    </tr>
    <tr>
      <th>Uid:</th>
      <td><?php echo $users_permissions->getUid() ?></td>
    </tr>
    <tr>
      <th>Gid:</th>
      <td><?php echo $users_permissions->getGid() ?></td>
    </tr>
    <tr>
      <th>User read perm:</th>
      <td><?php echo $users_permissions->getUserReadPerm() ?></td>
    </tr>
    <tr>
      <th>User write perm:</th>
      <td><?php echo $users_permissions->getUserWritePerm() ?></td>
    </tr>
    <tr>
      <th>User exec perm:</th>
      <td><?php echo $users_permissions->getUserExecPerm() ?></td>
    </tr>
    <tr>
      <th>Group read perm:</th>
      <td><?php echo $users_permissions->getGroupReadPerm() ?></td>
    </tr>
    <tr>
      <th>Group write perm:</th>
      <td><?php echo $users_permissions->getGroupWritePerm() ?></td>
    </tr>
    <tr>
      <th>Group exec perm:</th>
      <td><?php echo $users_permissions->getGroupExecPerm() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('usersPermissions/edit?id='.$users_permissions->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('usersPermissions/index') ?>">List</a>
