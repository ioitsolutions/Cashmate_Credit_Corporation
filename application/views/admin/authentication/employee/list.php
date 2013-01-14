<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">				
	<div id="list_display">
		<fieldset>
			<legend>List of Employees</legend>
			<a href="create">Add a New Employee</a> 
			<table id="branch_table_display" cellspacing="0">
				<tr>
					<th>Employee ID</th>
					<th>Full Name</th>
					<th>Address</th>
					<th>Contact Number</th>
					<th>Role</th>
					<th>Branch</th>
					<th>Area</th>
					<th>Date Created</th>
					<th>Status</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
                                <?php foreach($employees as $employee){?>
                                    <tr>
					<td class="table_content"><?php echo $employee->id;?></td>
					<td class="table_content"><?php echo $employee->first_name ." ".$employee->middle_name." ". $employee->last_name;?></td>
					<td class="table_content"><?php echo $employee->address;?></td>
					<td class="table_content"><?php echo $employee->contact_number;?></td>
					<td class="table_content">
                                            <?php  
                                                foreach($roles as $role)
                                                {
                                                    if($role->id == $employee->role_id)
                                                            echo $role->name;
                                                }
                                            ?>
                                        </td>
					<td class="table_content">
                                            <?php 
                                                foreach($branches as $branch)
                                                {
                                                    if($branch->id==$employee->branch_id)
                                                            echo $branch->name;
                                                }
                                            ?>
                                        </td>
					<td class="table_content">
                                            <?php 
                                                foreach($areas as $area)
                                                {
                                                    if($area->id==$employee->area_id)
                                                            echo $area->name;
                                                }
                                            ?>
                                        </td>
					<td class="table_content"><?php echo $employee->update_ts;?></td>
					<td class="table_content"><?php echo $employee->visible;?></td>
					<td class="table_content"><a href="update"><?php echo HTML::anchor("/authentication_employee/update/".$employee->id, "Edit"); ?></a></td>
					<td class="table_content"><a href="delete"><?php echo HTML::anchor("/authentication_employee/delete/".$employee->id, "Delete"); ?></a></td>
                                    </tr>
                                <?php }?>
				
			</table>
		</fieldset>
	</div>
</div>