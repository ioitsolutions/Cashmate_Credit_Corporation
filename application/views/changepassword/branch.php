<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<form id="form" method="post">
    <?php echo Form::open('changepassword/branch/'); ?>
    <table align="center">
        <tr>
            <td><label>Current Password:</label></td> 
            <td><input type="password" name="current"/></td>
        </tr>
        <tr>
            <td><label>New Password:</label></td> 
            <td><input type="password" name="new"/></td>
        </tr>
        <tr>
            <td><label>Confirm Password:</label></td> 
            <td><input type="password" name="validate"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="Log In"/></td>
            <td><input type="button" value="Cancel" onClick="window.location.href='http://localhost/Cashmate_Credit_Corporation/home'"/></td>
        </tr>
    </table>
</form>