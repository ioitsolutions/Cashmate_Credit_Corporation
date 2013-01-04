<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<form id="form" method="post">
    <?php echo Form::open('login/role/'); ?>
    <table align="center">
        <tr>
            <td>Role Password: </td> 
            <td><input type="password" name="role_password"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="Log In"/></td>
            <td><input type="button" value="Cancel"/></td>
        </tr>
    </table>
</form>