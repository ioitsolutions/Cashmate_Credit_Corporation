<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<form id="form" method="post">
    <?php echo Form::open('login/branch/'); ?>
    <div id="error_container"><?php echo Cookie::get('error');?></div>
    <table align="center">
        <tr>
            <td><label for="branch_code">Branch Code:</label></td> 
            <td><input type="text" name="branch_code" value="<?= Arr::get($values, 'branch_code'); ?>"/></td>
        </tr>
        <tr>
            <td></td><td><label for="branch_code" class="error"/><?php echo Arr::get($errors, 'branch_code'); ?></td>
        </tr>
        <tr>
            <td><label for="branch_password">Password:</label></td> 
            <td><input type="password" name="password"value="<?= Arr::get($values, 'password'); ?>"/></td>
        </tr>
        <tr>
            <td></td><td><label for="branch_password" class="error"/><?php echo Arr::get($errors, 'password'); ?></td>
        </tr>
        <tr>
            <td><input type="submit" value="Log In"/></td>
            <td><input type="button" value="Cancel"/></td>
        </tr>
    </table>
</form>