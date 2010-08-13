<h1>Users groups List</h1>

<table>
  <thead>
    <tr>
      <th>Gid</th>
      <th>Groupname</th>
      <th>Info</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users_groups as $users_group): ?>
    <tr>
      <td><a href="<?php echo url_for('groups/show?gid='.$users_group->getGid()) ?>"><?php echo $users_group->getGid() ?></a></td>
      <td><?php echo $users_group->getGroupname() ?></td>
      <td><?php echo $users_group->getInfo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('groups/new') ?>">New</a>
