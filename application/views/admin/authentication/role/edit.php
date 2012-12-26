<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
				
    <fieldset id="privilege">
        <legend>Edit Role Privileges</legend>
        <div id="edit_body">
			<div id="edit_header">
				<p>Edit Role Privileges</p>
			</div>
			<table class="edit_content_table">
				<tr>
					<td>Role Name:</td>
					<td class="edit_align"><input type="text" name=""/></td>
				</tr>
				<tr>
					<td>Menu Name:</td>
					<td class="edit_align"><input type="text"/></td>
				</tr>
				<tr>
					<table id="authentication_display">
                                            <tr>
                                                <th>View</th>
                                                <th>Save/Create</th>
                                                <th>Edit</th>
                                                <th>Print</th>
                                                <th>Post</th>
                                            </tr>
                                            <tr>
                                                <td class="table_content"><input type="checkbox"/></td>
                                                <td class="table_content"><input type="checkbox"/></td>
                                                <td class="table_content"><input type="checkbox"/></td>
                                                <td class="table_content"><input type="checkbox"/></td>
                                                <td class="table_content"><input type="checkbox"/></td>
                                            </tr>
                                        </table>
                                <input type="submit" value="Add/Edit"/>
                                <input type="button" value="Cancel"/>
				</tr>
			</table>
		</div>
                   
    </fieldset>
</div>