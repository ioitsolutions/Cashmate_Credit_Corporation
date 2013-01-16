<?php defined('SYSPATH') or die('No direct access allowed.');?>
<?php echo Form::open('authentication_employee/create/'); ?>
<form id="form"	method="post">		
    <fieldset id="borrower">
        <legend>Add Employee</legend>
        <div id="edit_body">
			<div id="edit_header">
				<p>Add Employee Record</p>
			</div>
			<table class="edit_content_table">
				<tr>
					<td>Employee ID:</td>
					<td class="edit_align"><input type="text" class="fields" name="emp_id"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="emp_id" class="error"/><?php echo Arr::get($errors, 'emp_id'); ?></td>
                                </tr>
				<tr>
					<td>First Name:</td>
					<td class="edit_align"><input type="text" class="fields" name="f_name"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="f_name" class="error"/><?php echo Arr::get($errors, 'f_name'); ?></td>
                                </tr>
				<tr>
					<td>Middle Name:</td>
					<td class="edit_align"><input type="text" class="fields" name="m_name"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="m_name" class="error"/><?php echo Arr::get($errors, 'm_name'); ?></td>
                                </tr>
				<tr>
					<td>Last Name:</td>
					<td class="edit_align"><input type="text" class="fields" name="l_name"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="l_name" class="error"/><?php echo Arr::get($errors, 'l_name'); ?></td>
                                </tr>
				<tr>
					<td>Address:</td>
					<td class="edit_align"><input type="text" class="fields" name="address"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="address" class="error"/><?php echo Arr::get($errors, 'address'); ?></td>
                                </tr>
				<tr>
					<td>Contact Number:</td>
					<td class="edit_align"><input type="text" class="fields" name="c_number"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="c_number" class="error"/><?php echo Arr::get($errors, 'c_number'); ?></td>
                                </tr>
				<tr>
					<td>Role:</td>
					<td class="edit_align" name="role">
						<select name="role_list" id="role_list"class="fields" >
							<?php foreach($role_list as $role){?>
                                                        <option><?php echo $role->name;?></option>
                                                        <?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Branch:</td>
					<td class="edit_align" name="branch"class="fields" >
						<select name="branch_list" class="fields">
							<?php foreach($branch_list as $branch){?>
                                                        <option><?php echo $branch->name;?></option>
                                                        <?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Area:</td>
					<td class="edit_align" name="area"class="fields" >
						<select name="area_list" class="fields">
							<?php foreach($area_list as $area){?>
                                                        <option><?php echo $area->name;?></option>
                                                        <?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Date Created:</td>
					<td class="edit_align"><input type="text" id="datepicker" class="fields datepicker" name="calendar"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="calendar" class="error"/><?php echo Arr::get($errors, 'calendar'); ?></td>
                                </tr>
				<tr>
					<td>Status:</td>
					<td class="edit_align">
						<select name="status"class="fields" >
							<option value="1">Active</option>
							<option value="0">Inactive</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td class="edit_align"><input type="password" class="fields" name="new_password"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="new_password" class="error"/><?php echo Arr::get($errors, 'new_password'); ?></td>
                                </tr>
                                <tr>
					<td>Re-Type Password:</td>
					<td class="edit_align"><input type="password" class="fields" name="validate_password"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="validate_password" class="error"/><?php echo Arr::get($errors, 'validate_password'); ?></td>
                                </tr>
				<tr>
					<td></td>
					<td class="edit_align">
						<input type="submit" value="Add"/>
						<input type="button" value="Cancel"/>
					</td>
				</tr>
			</table>
		</div>
                   
    </fieldset>
</form>