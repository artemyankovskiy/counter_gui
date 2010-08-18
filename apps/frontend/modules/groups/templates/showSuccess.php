<table id="view">
  <tbody>
    <tr>
      <th>GID:</th>
      <td><?php echo $users_group->getGid() ?></td>
    </tr>
    <tr>
      <th>Группа:</th>
      <td><?php echo $users_group->getGroupname() ?></td>
    </tr>
    <tr>
      <th>Информация:</th>
      <td><?php echo $users_group->getInfo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('groups/edit?gid='.$users_group->getGid()) ?>">Редактировать</a>
&nbsp;
<a href="<?php echo url_for('groups/index') ?>">Список</a>
