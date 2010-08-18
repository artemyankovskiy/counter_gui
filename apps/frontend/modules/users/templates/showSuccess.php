<table id="view">
  <tbody>
    <tr>
      <th>UID:</th>
      <td><?php echo $users_passwd->getUid() ?></td>
    </tr>
    <tr>
      <th>Группа:</th>
      <td><?php echo $users_passwd->getUsersGroup()->getGroupname() ?></td>
    </tr>
    <tr>
      <th>Пользователь:</th>
      <td><?php echo $users_passwd->getUsername() ?></td>
    </tr>
    <tr>
      <th>Информация:</th>
      <td><?php echo $users_passwd->getInfo() ?></td>
    </tr>
    <tr>
      <th>Пароль:</th>
      <td><?php echo $users_passwd->getPassword() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('users/edit?uid='.$users_passwd->getUid()) ?>">Редактирование</a>
&nbsp;
<a href="<?php echo url_for('users/index') ?>">Список</a>
