<?php defined('SYSPATH') or die('No direct access allowed.');?>
<form id="form" method="post">
    <?php echo Form::open('authentication_employee/update'); ?>
    <fieldset id="borrower">
        <legend>Edit Employee</legend>
        <div id="edit_body" style="margin-left:0px;">
			<div id="edit_header">
				<p>Edit Employee Record</p>
			</div>
			<table class="edit_content_table">
				<tr>
					<td>Employee ID:</td>
					<td class="edit_align"><input type="text" name="emp_id" disabled class="fields" value="<?php echo $employee->id; ?>"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="emp_id" class="error"/><?php echo Arr::get($errors, 'emp_id'); ?></td>
                                </tr>
				<tr>
					<td>First Name:</td>
					<td class="edit_align"><input type="text" name="f_name" class="fields" value="<?php echo $employee->first_name; ?>"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="f_name" class="error"/><?php echo Arr::get($errors, 'f_name'); ?></td>
                                </tr>
				<tr>
					<td>Middle Name:</td>
					<td class="edit_align"><input type="text" name="m_name" class="fields" value="<?php echo $employee->middle_name; ?>"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="m_name" class="error"/><?php echo Arr::get($errors, 'm_name'); ?></td>
                                </tr>
				<tr>
					<td>Last Name:</td>
					<td class="edit_align"><input type="text" name="l_name" class="fields" value="<?php echo $employee->last_name; ?>"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="l_name" class="error"/><?php echo Arr::get($errors, 'l_name'); ?></td>
                                </tr>
				<tr>
					<td>Address:</td>
					<td class="edit_align"><input type="text" name="address" class="fields" value="<?php echo $employee->address; ?>"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="address" class="error"/><?php echo Arr::get($errors, 'address'); ?></td>
                                </tr>
				<tr>
					<td>Contact Number:</td>
					<td class="edit_align"><input type="text" name="c_number" class="fields" value="<?php echo $employee->contact_number; ?>"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="c_number" class="error"/><?php echo Arr::get($errors, 'c_number'); ?></td>
                                </tr>
				<tr>
					<td>Role:</td>
					<td class="edit_align">
						<select name="role"class="fields" >
							
                                                            <?php  
                                                                foreach($roles as $role)
                                                                {
                                                                    echo"<option>";
                                                                    echo $role->name;
                                                                    echo"</option>";
                                                                }
                                                            ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Branch:</td>
					<td class="edit_align">
						<select name="branch"class="fields" >
                                                            <?php 
                                                                foreach($branches as $branch)
                                                                {
                                                                    echo"<option>";
                                                                    echo $branch->name;
                                                                    echo"</option>";
                                                                }
                                                            ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Area:</td>
					<td class="edit_align">
						<select name="area"class="fields" >
                                                            <?php 
                                                                foreach($areas as $area)
                                                                {
                                                                    echo"<option>";
                                                                    echo $area->name;
                                                                    echo"</option>";
                                                                }
                                                            ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Date Created:</td>
					<td class="edit_align"><input type="text" class="fields datepicker" name="calendar" value="<?php echo $employee->update_ts; ?>"/></td>
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
					<td></td>
					<td class="edit_align">
						<input type="submit" value="Edit" name="employee"/>
						<input type="button" value="Cancel"onClick="window.location.href='http://localhost/Cashmate_Credit_Corporation/authentication_employee/list'"/>
					</td>
				</tr>
			</table>
		</div>
        <div id="edit_body" style=";margin-right:0px;width:450px;margin-top:-348px;">
            <div id="edit_header" style="width:450px;">
		<p>Additional Employee Privilege</p>
            </div>
                <table id="authentication_display">
                    <tr>
                        <th></th>
                        <th>View</th>
                        <th>Save/Create</th>
                        <th>Edit</th>
                        <th>Print</th>
                        <th>Post</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td class="table_content">
                            <select name="menu" style="width:160px;">
                                <?php foreach($menus as $menu){?>
                                <option value=<?php echo $menu->id?>><?php echo $menu->menu_name;?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td class="table_content"><input type="checkbox" value="1" name="view"/></td>
                        <td class="table_content"><input type="checkbox" value="2" name="save"/></td>
                        <td class="table_content"><input type="checkbox" value="3" name="edit"/></td>
                        <td class="table_content"><input type="checkbox" value="4" name="print"/></td>
                        <td class="table_content"><input type="checkbox" value="5" name="post"/></td>
                        <td class="table_content"><input type="submit" name="privilege" value="Add"/></td>
                    </tr>
                </table>
            
        </div>
        <div id="edit_body" style=";margin-right:0px;width:450px;margin-top:0px;">
            <div id="edit_header" style="width:450px;">
		<p>Current Employee Privilege</p>
            </div>
            <table id="authentication_display" style="width:450px;">
                 <tr>
                    <th></th>
                    <th>View</th>
                    <th>Save/Create</th>
                    <th>Edit</th>
                    <th>Print</th>
                    <th>Post</th>
                 </tr>
                 <?php
                 
                 foreach ($menus as $menu)
                 {
                    $view="";
                    $save="";
                    $edit="";
                    $print="";
                    $post="";
                    $link=HTML::anchor('/authentication_employee/privilege/'.$menu->id, 'Edit');
                     foreach($privileges as $privilege)
                     {
                        if($menu->id==$privilege->menu_id && $privilege->status==0)
                        {
                            if($privilege->privilege_id==1)$view="checked";
                            if($privilege->privilege_id==2)$save="checked";
                            if($privilege->privilege_id==3)$edit="checked";
                            if($privilege->privilege_id==4)$print="checked";
                            if($privilege->privilege_id==5)$post="checked";
                        }
                    } 
                    echo"<tr>
                     <td class='table_content' id='.$menu->id.'>$menu->menu_name</td>
                     <td class='table_content'><input type='checkbox' disabled echo $view value='1' name='view'></td>
                     <td class='table_content'><input type='checkbox' disabled echo $save value='2' name='save'></td>
                     <td class='table_content'><input type='checkbox' disabled echo $edit value='3' name='edit'></td>
                     <td class='table_content'><input type='checkbox' disabled echo $print value='4' name='print'></td>
                     <td class='table_content'><input type='checkbox' disabled echo $post value='5' name='post'></td>
                   </tr>";
                   }
                   ?>
                   
            </table>
        </div>
    </fieldset>
</form>