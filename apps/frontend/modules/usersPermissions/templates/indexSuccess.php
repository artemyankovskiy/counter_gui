<?php use_stylesheet("index.css") ?>
<h1>Список прав доступа</h1>

<table id="records">
  <thead>
    <tr>
      <th>ID</th>
      <th>Объект</th>
      <th>Пользователь</th>
      <th>Группа</th>
      <th>Чтение для пользователя</th>
      <th>Запись для пользователя</th>
      <th>Выполнение для пользователя</th>
      <th>Чтение для группы</th>
      <th>Запись для группы</th>
      <th>Выполнение для группы</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users_permissionss as $users_permissions): ?>
    <tr>
      <td><a href="<?php echo url_for('usersPermissions/show?id='.$users_permissions->getId()) ?>"><?php echo $users_permissions->getId() ?></a></td>
      <td><?php echo $users_permissions->getObjectId() ?></td>
      <td><?php echo $users_permissions->getUsersPasswd()->getUsername() ?></td>
      <td><?php echo $users_permissions->getUsersGroup()->getGroupname() ?></td>
      <td><?php echo $users_permissions->getPermission( $users_permissions->getUserReadPerm() ) ?></td>
      <td><?php echo $users_permissions->getPermission( $users_permissions->getUserWritePerm() ) ?></td>
      <td><?php echo $users_permissions->getPermission( $users_permissions->getUserExecPerm() ) ?></td>
      <td><?php echo $users_permissions->getPermission( $users_permissions->getGroupReadPerm() ) ?></td>
      <td><?php echo $users_permissions->getPermission( $users_permissions->getGroupWritePerm() ) ?></td>
      <td><?php echo $users_permissions->getPermission( $users_permissions->getGroupExecPerm() ) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('usersPermissions/new') ?>">Добавить</a>
