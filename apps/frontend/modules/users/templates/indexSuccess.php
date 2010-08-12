<h1>Users passwds List</h1>

<table>
  <thead>
    <tr>
      <th>Uid</th>
      <th>Gid</th>
      <th>Username</th>
      <th>Info</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users_passwds as $users_passwd): ?>
    <tr>
      <td><a href="<?php echo url_for('users/show?uid='.$users_passwd->getUid()) ?>"><?php echo $users_passwd->getUid() ?></a></td>
      <td><?php echo $users_passwd->getGid() ?></td>
      <td><?php echo $users_passwd->getUsername() ?></td>
      <td><?php echo $users_passwd->getInfo() ?></td>
      <td><?php echo $users_passwd->getPassword() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('users/new') ?>">New</a>
