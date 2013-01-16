<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<form id="form" method="post">
    <?php echo Form::open('changepassword/employee/'); ?>
    <div id="error_container"><?php echo Cookie::get('error');?></div>
    <table align="center">
        
        <tr>
            <td><label>Current Password:</label></td> 
            <td><input type="password" name="old_password"/></td>
        </tr>
        <tr>
            <td></td><td><label for="old_password" class="error"/><?php echo Arr::get($errors, 'old_password'); ?></td>
        </tr>
        <tr>
            <td><label>New Password:</label></td> 
            <td><input type="password" name="new_password"/></td>
        </tr>
        <tr>
            <td></td><td><label for="new_password" class="error"/><?php echo Arr::get($errors, 'new_password'); ?></td>
        </tr>
        <tr>
            <td><label>Confirm Password:</label></td> 
            <td><input type="password" name="validate_password"/></td>
        </tr>
        <tr>
            <td></td><td><label for="validate_password" class="error"/><?php echo Arr::get($errors, 'validate_password'); ?></td>
        </tr>
        <tr>
            <td><input type="submit" value="Log In"/></td>
            <td><input type="button" value="Cancel" onClick="window.location.href='http://localhost/Cashmate_Credit_Corporation/home'"/></td>
        </tr>
    </table>
</form>