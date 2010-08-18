<h1>Список групп</h1>

<table id="records">
  <thead>
    <tr>
      <th>GID</th>
      <th>Група</th>
      <th>Информация</th>
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

  <a href="<?php echo url_for('groups/new') ?>">Добавить</a>
