<h1>Список пользователей</h1>

<table id="records">
  <thead>
    <tr>
      <th>UID</th>
      <th>Группа</th>
      <th>Пользователь</th>
      <th>Информация</th>
      <th>Пароль</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users_passwds as $users_passwd): ?>
    <tr>
      <td><a href="<?php echo url_for('users/show?uid='.$users_passwd->getUid()) ?>"><?php echo $users_passwd->getUid() ?></a></td>
      <td><?php echo $users_passwd->getUsersGroup()->getGroupname() ?></td>
      <td><?php echo $users_passwd->getUsername() ?></td>
      <td><?php echo $users_passwd->getInfo() ?></td>
      <td><?php echo $users_passwd->getPassword() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('users/new') ?>">Добавить</a>
