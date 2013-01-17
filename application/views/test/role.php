<?php defined('SYSPATH') or die('No direct access allowed');?>

<table>
    <tr>
        <th>Role</th>
        <th>Menu</th>
        <th>View</th>
        <th>Save</th>
        <th>Edit</th>
        <th>Post</th>
        <th>Print</th>
    </tr>
    <?php foreach($role_menu_privileges as $key => $test): ?>
    <tr>
        <td colspan="6">
            <?php echo $test->role->name; ?>
        </td>
    </tr>
    <tr>
        <td><?php echo $test->menu->menu_name; ?></td>
    </tr>
    <tr>
        <td><?php echo $test->privilege->privilege_name; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
