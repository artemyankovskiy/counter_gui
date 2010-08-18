<h1>Список прав доступа</h1>

<div id="note">
    <table>
        <tr>
            <td>
                <span id="noteName">UR</span> - Права на чтение для пользователя<br />
                <span id="noteName">UW</span> - Права на запись для пользователя<br />
                <span id="noteName">UX</span> - Права на выполнение для пользователя<br />
            </td><td>
                <span id="noteName">GR</span> - Права на чтение для группы<br />
                <span id="noteName">GW</span> - Права на запись для группы<br />
                <span id="noteName">GX</span> - Права на исполнение для группы<br /></td>
        </tr>
    </table>
</div>

<table id="records">
    <thead>
        <tr>
            <th>ID</th>
            <th>Объект</th>
            <th>Пользователь</th>
            <th>Группа</th>
            <th>UR</th>
            <th>UW</th>
            <th>UX</th>
            <th>GR</th>
            <th>GW</th>
            <th>GX</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ( $users_permissionss as $users_permissions ): ?>
            <tr>
                <td><a href="<?php echo url_for( 'usersPermissions/show?id=' . $users_permissions->getId() ) ?>"><?php echo $users_permissions->getId() ?></a></td>
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

    <a href="<?php echo url_for( 'usersPermissions/new' ) ?>">Добавить</a>
