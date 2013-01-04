<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<form id="form" method="post">
    <?php echo Form::open('login/branch/'); ?>
    <div id="error_container"><?php echo Cookie::get('branch_error');?></div>
    <table align="center">
        <tr>
            <td><label for="branch_code">Branch ID:</label></td> 
            <td><input type="text" name="branch_code"value="<?= Arr::get($values, 'code'); ?>"/></td>
            <td><label for="branch_code" class="error"/><?php echo Arr::get($errors, 'code'); ?></td>
        </tr>
        <tr>
            <td><label for="branch_password">Password:</label></td> 
            <td><input type="password" name="branch_password"value="<?= Arr::get($values, 'password'); ?>"/></td>
            <td><label for="branch_password" class="error"/><?php echo Arr::get($errors, 'password'); ?></td>
        </tr>
        <tr>
            <td><input type="submit" value="Log In"/></td>
            <td><input type="button" value="Cancel"/></td>
        </tr>
    </table>
</form>