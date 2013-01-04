<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<form id="form" method="post">
    <?php echo Form::open('login/employee/'); ?>
    <table align="center">
        <tr>
            <td>Employee Id: </td> 
            <td><input type="text" name="employee_id"></td>
        </tr>
        <tr>
            <td>Password: </td> 
            <td><input type="password" name="employee_password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Log In"/></td>
            <td><input type="button" value="Cancel"/></td>
        </tr>
    </table>
</form>