<?php defined('SYSPATH') or die('No direct access allowed.');?>
<form id="form" method="post">	
    <?php echo Form::open('authentication_role/update'); ?>
    <fieldset id="privilege">
        <legend>Edit Role Privileges</legend>
        <div id="edit_body">
			<div id="edit_header">
				<p>Edit Role Privileges</p>
			</div>
			<table class="edit_content_table">
                                <tr>
					<td>Role ID:</td>
					<td class="edit_align" id="role">
                                            <input type="text" class="fields" disabled name="role_id" value="<?php echo $role->id; ?>"/>
                                        </td>
				</tr>
				<tr>
					<td>Role Name:</td>
					<td class="edit_align" id="role">
                                            <input type="text" class="fields" name="role" value="<?php echo $role->name; ?>"/>
                                        </td>
				</tr>
                                <tr>
                                    <td></td><td><label for="role" class="error"/><?php echo Arr::get($errors, 'role'); ?></td>
                                </tr>
                                <tr>
					<td>Status:</td>
					<td class="edit_align" id="status">
                                            <select class="fields" name="visible">
                                                <option value="0">Visible</option>
                                                <option value="1">Hidden</option>
                                            </select>
                                        </td>
				</tr>
                                <tr>
					<td>Date Modified:</td>
					<td class="edit_align"><input type="text" class="fields datepicker" id="datepicker" name="calendar" value="<?php echo $role->update_ts; ?>"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="calendar" class="error"/><?php echo Arr::get($errors, 'calendar'); ?></td>
                                </tr>
                                <tr>
                                    <td>Role Password:</td>
                                    <td class="edit_align"><input type="password" class="fields" name="new_password"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="new_password" class="error"/><?php echo Arr::get($errors, 'new_password'); ?></td>
                                </tr>
                                <tr>
                                    <td>Re-type Role Password:</td>
                                    <td class="edit_align"><input type="password" class="fields" name="validate_password"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="validate_password" class="error"/><?php echo Arr::get($errors, 'validate_password'); ?></td>
                                </tr>
			</table><br/>
                        <input type="submit" value="Edit"/>
                        <input type="button" value="Cancel" onClick="window.location.href='http://localhost/Cashmate_Credit_Corporation/authentication_role/list'"/>
		</div> 
    </fieldset>
</form>