<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<form id="form" method="post">
    <?php echo Form::open('login/branch/'); ?>
    <table align="center">
        <tr>
            <td>Branch ID: </td> 
            <td><input type="text" name="branch_code"/></td>
        </tr>
        <tr>
            <td>Password: </td> 
            <td><input type="password" name="branch_password"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="Log In"/></td>
            <td><input type="button" value="Cancel"/></td>
        </tr>
    </table>
</form>