<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
				
    <fieldset id="borrower">
        <legend>Add Employee</legend>
        <div id="edit_body">
			<div id="edit_header">
				<p>Add Employee Record</p>
			</div>
			<table class="edit_content_table">
				<tr>
					<td>Employee ID:</td>
					<td class="edit_align"><input type="text" name=""/></td>
				</tr>
				<tr>
					<td>First Name:</td>
					<td class="edit_align"><input type="text" name=""/></td>
				</tr>
				<tr>
					<td>Middle Name:</td>
					<td class="edit_align"><input type="text" name=""/></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td class="edit_align"><input type="text" name=""/></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td class="edit_align"><input type="text" name=""/></td>
				</tr>
				<tr>
					<td>Contact Number:</td>
					<td class="edit_align"><input type="text" name=""/></td>
				</tr>
				<tr>
					<td>Role:</td>
					<td class="edit_align">
						<select>
							<option>Branch Manager</option>
							<option>Branch Secretary</option>
							<option>Branch Custodian</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Branch:</td>
					<td class="edit_align">
						<select>
							<option>Urdaneta</option>
							<option>Angeles</option>
							<option>Dagupan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Area:</td>
					<td class="edit_align">
						<select>
							<option>Urdaneta Area 1</option>
							<option>Urdaneta Area 2</option>
							<option>Urdaneta Area 3</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Date Created:</td>
					<td class="edit_align"><input type="text" name=""/></td>
				</tr>
				<tr>
					<td>Status:</td>
					<td class="edit_align">
						<select>
							<option>Active</option>
							<option>Inactive</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Username:</td>
					<td class="edit_align"><input type="text" name=""/></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td class="edit_align"><input type="text" name=""/></td>
				</tr>
                                <tr>
					<td>Re-Type Password:</td>
					<td class="edit_align"><input type="text" name=""/></td>
				</tr>
				<tr>
					<td></td>
					<td class="edit_align">
						<input type="submit" value="Add"/>
						<input type="submit" value="Cancel">
					</td>
				</tr>
			</table>
		</div>
                   
    </fieldset>
</div>