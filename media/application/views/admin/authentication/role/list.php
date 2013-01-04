<?php defined('SYSPATH') or die('No direct access allowed.');?>
<?php echo Form::open('login/employee/'); ?>
<div id="form">				
	<div id="list_display">
		<fieldset>
                    
			<legend>List of Default Roles</legend>
			<table id="branch_table_display" cellspacing = 0 border=1>
				<tr>
					<th>Role Name</th>
					<th>Menu</th>
					<th>Privileges</th>
					<th>View Employee List</th>
					<th>Date Created</th>
				</tr>
				<tr>
					<td><p id="table_content">Branch Secretary</p></td>
					<td><p id="table_content">Loan Application Form</p></td>
					<td>
						<table>
							<tr><td>View</td></tr>
							<tr><td>Save/Create</td></tr>
							<tr><td>Edit</td></tr>
						</table>
					</td>
					<td><a href="viewemployee" id="table_content">View Employee</a></td>
					<td><p id="table_content">12-12-2012</p></td>
				</tr>
			</table>
		</fieldset>
		<br/>
		<fieldset>
			<legend>List of Additional Roles</legend>
			<a href="create">Add a New Role</a> 
			<table id="branch_table_display" cellspacing = 0 border=1>
				<tr>
					<th>Role Name</th>
					<th>Menu</th>
					<th>Privileges</th>
					<th>View Employee List</th>
					<th>Date Created</th>
					<th>Delete</th>
				</tr>
				<tr>
					<td><p id="table_content">Branch Secretary</p></td>
					<td><p id="table_content">Loan Application Form</p></td>
					<td>
						<table>
							<tr><td>View</td></tr>
							<tr><td>Save/Create</td></tr>
							<tr><td>Edit</td></tr>
						</table>
						<a href="update" id="table_content">Edit</a>
					</td>
					<td><a href="addemployee" id="table_content">View Employee</a></td>
					<td><p id="table_content">12-12-2012</p></td>
					<td><a href="" id="table_content">Delete</a></td>
				</tr>
			</table>
		</fieldset>
	</div>
</div>	