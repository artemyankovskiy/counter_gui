<h1>Users permissionss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Object</th>
      <th>Uid</th>
      <th>Gid</th>
      <th>User read perm</th>
      <th>User write perm</th>
      <th>User exec perm</th>
      <th>Group read perm</th>
      <th>Group write perm</th>
      <th>Group exec perm</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users_permissionss as $users_permissions): ?>
    <tr>
      <td><a href="<?php echo url_for('usersPermissions/show?id='.$users_permissions->getId()) ?>"><?php echo $users_permissions->getId() ?></a></td>
      <td><?php echo $users_permissions->getObjectId() ?></td>
      <td><?php echo $users_permissions->getUid() ?></td>
      <td><?php echo $users_permissions->getGid() ?></td>
      <td><?php echo $users_permissions->getUserReadPerm() ?></td>
      <td><?php echo $users_permissions->getUserWritePerm() ?></td>
      <td><?php echo $users_permissions->getUserExecPerm() ?></td>
      <td><?php echo $users_permissions->getGroupReadPerm() ?></td>
      <td><?php echo $users_permissions->getGroupWritePerm() ?></td>
      <td><?php echo $users_permissions->getGroupExecPerm() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('usersPermissions/new') ?>">New</a>
