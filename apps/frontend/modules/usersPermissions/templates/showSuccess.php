<table id="view">
  <tbody>
    <tr>
      <th>ID:</th>
      <td><?php echo $users_permissions->getId() ?></td>
    </tr>
    <tr>
      <th>Объект:</th>
      <td><?php echo $users_permissions->getObjectId() ?></td>
    </tr>
    <tr>
      <th>Пользователь:</th>
      <td><?php echo $users_permissions->getUsersPasswd()->getUsername() ?></td>
    </tr>
    <tr>
      <th>Группа:</th>
      <td><?php echo $users_permissions->getUsersGroup()->getGroupname() ?></td>
    </tr>
    <tr>
      <th>Права на чтение для пользователя:</th>
      <td><?php echo $users_permissions->getPermission( $users_permissions->getUserReadPerm() ) ?></td>
    </tr>
    <tr>
      <th>Права на запись для пользователя:</th>
      <td><?php echo $users_permissions->getPermission( $users_permissions->getUserWritePerm() ) ?></td>
    </tr>
    <tr>
      <th>Права на выполнение для пользователя:</th>
      <td><?php echo $users_permissions->getPermission( $users_permissions->getUserExecPerm() ) ?></td>
    </tr>
    <tr>
      <th>Права на чтение для группы:</th>
      <td><?php echo $users_permissions->getPermission( $users_permissions->getGroupReadPerm() ) ?></td>
    </tr>
    <tr>
      <th>Права на запись для группы:</th>
      <td><?php echo $users_permissions->getPermission( $users_permissions->getGroupWritePerm() ) ?></td>
    </tr>
    <tr>
      <th>Права на выполнение для группы:</th>
      <td><?php echo $users_permissions->getPermission( $users_permissions->getGroupExecPerm() ) ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('usersPermissions/edit?id='.$users_permissions->getId()) ?>">Редактировать</a>
&nbsp;
<a href="<?php echo url_for('usersPermissions/index') ?>">Список</a>
