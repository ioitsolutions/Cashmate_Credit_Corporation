<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<form id="form" method="post">
    <?php echo Form::open('login/employee/'); ?>
    <div id="error_container"><?php echo Cookie::get('emp_error');?></div>
    <table align="center">
        
        <tr>
            <td><label for="id">Employee Id:</label></td> 
            <td><input type="text" name="id"/></td>
            <td><label for="id" class="error"/><?php echo Arr::get($errors, 'id'); ?></td>
        </tr>
        <tr>
            <td><label for="employee_password">Password:</label></td> 
            <td><input type="password" name="employee_password"/></td>
            <td><label for="employee_password" class="error"/><?php echo Arr::get($errors, 'employee_password'); ?></td>
        </tr>
        <tr>
            <td><input type="submit" value="Log In"/></td>
            <td><input type="button" value="Cancel"/></td>
        </tr>
    </table>
</form>