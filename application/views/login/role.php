<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<form id="form" method="post">
    <?php echo Form::open('login/role/'); ?>
    <table align="center">
        <tr>
            <td><label for="role_password">Role Password:</label></td> 
            <td><input type="password" name="role_password"value="<?= Arr::get($values, 'role_password'); ?>"/></td>
        </tr>
        <tr>
            <td></td><td><label for="role_password" class="error"/><?php echo Arr::get($errors, 'role_password'); ?></td>
        </tr>
        <tr>
            <td><input type="submit" value="Log In"/></td>
            <td><input type="button" value="Cancel"/></td>
        </tr>
    </table>
</form>