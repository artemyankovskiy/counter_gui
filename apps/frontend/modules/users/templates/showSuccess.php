<table>
  <tbody>
    <tr>
      <th>Uid:</th>
      <td><?php echo $users_passwd->getUid() ?></td>
    </tr>
    <tr>
      <th>Gid:</th>
      <td><?php echo $users_passwd->getGid() ?></td>
    </tr>
    <tr>
      <th>Username:</th>
      <td><?php echo $users_passwd->getUsername() ?></td>
    </tr>
    <tr>
      <th>Info:</th>
      <td><?php echo $users_passwd->getInfo() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $users_passwd->getPassword() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('users/edit?uid='.$users_passwd->getUid()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('users/index') ?>">List</a>
