<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">				
	<div id="list_display">
		<fieldset>
			<legend>List of Default Roles</legend>
                        <a href="create">Add a New Role</a> 
			<table id="branch_table_display" cellspacing = 0>
				<tr>
                                        <th>Role ID</th>
					<th>Role Name</th>
                                        <th>Visible</th>
                                        <th></th>
					<th>Date Created</th>
                                        <th></th>
                                        <th></th>
				</tr>
                                <?php foreach($roles as $role){?>
                                    <tr>
                                        <td class="table_content"><?php echo $role->id;?></td>
                                        <td class="table_content"><?php echo $role->name;?></td>
                                        <td class="table_content">
                                            <?php 
                                                if($role->visible==0)echo"Visible";
                                                else echo"Hidden";
                                            ?>
                                        </td>
					<td class="table_content"><a href="viewemployee">View Employee</a></td>
					<td class="table_content"><p><?php  $role->update_ts?></p></td>
                                        <td class="table_content"><a href="update"><?php echo HTML::anchor("/authentication_role/update/".$role->id, "Edit"); ?></a></td>
					<td class="table_content"><a href="delete"><?php echo HTML::anchor("/authentication_role/delete/".$role->id, "Delete"); ?></a></td>
                                    </tr>
                                <?php }?>
			</table>
		</fieldset>
	</div>
</div>	