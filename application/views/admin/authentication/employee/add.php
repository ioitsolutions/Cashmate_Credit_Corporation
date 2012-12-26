<?php defined('SYSPATH') or die('No direct access allowed.');?>
<?php echo Form::open('authentication_employee/create/'); ?>
<div id="form"			
    <fieldset id="borrower">
        <legend>Add Employee</legend>
        <div id="edit_body">
			<div id="edit_header">
				<p>Add Employee Record</p>
			</div>
			<table class="edit_content_table">
				<tr>
					<td>Employee ID:</td>
					<td class="edit_align"><input type="text" name="emp_id"/></td>
				</tr>
				<tr>
					<td>First Name:</td>
					<td class="edit_align"><input type="text" name="first_name"/></td>
				</tr>
				<tr>
					<td>Middle Name:</td>
					<td class="edit_align"><input type="text" name="mid_name"/></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td class="edit_align"><input type="text" name="last_name"/></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td class="edit_align"><input type="text" name="add"/></td>
				</tr>
				<tr>
					<td>Contact Number:</td>
					<td class="edit_align"><input type="text" name="cont_num"/></td>
				</tr>
				<tr>
					<td>Role:</td>
					<td class="edit_align" name="role">
						<select>
							<option>Branch Manager</option>
							<option>Branch Secretary</option>
							<option>Branch Custodian</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Branch:</td>
					<td class="edit_align" name="branch">
						<select>
							<option>Urdaneta</option>
							<option>Angeles</option>
							<option>Dagupan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Area:</td>
					<td class="edit_align" name="area">
						<select>
							<option>Urdaneta Area 1</option>
							<option>Urdaneta Area 2</option>
							<option>Urdaneta Area 3</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Date Created:</td>
					<td class="edit_align"><input type="text" name="date"/></td>
				</tr>
				<tr>
					<td>Status:</td>
					<td class="edit_align" name="status">
						<select>
							<option value="1">Active</option>
							<option value="0">Inactive</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td class="edit_align"><input type="text" name="password"/></td>
				</tr>
                                <tr>
					<td>Re-Type Password:</td>
					<td class="edit_align"><input type="text" name="val_password"/></td>
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
</div>