<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">	
	<div id="list_display">
		<fieldset>
			<legend>List of Branches</legend>
			<table id="branch_table_display" cellspacing="0">
				<tr>
					<th><input type="checkbox"></th>
					<th>Branch Code</th>
					<th>Branch Name</th>
					<th>Web Status</th>
					<th>Minimum Quota</th>
					<th>Default Date</th>
					<th>Status</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<tr>
					<td class="table_content"><input type="checkbox"/></td>
					<td class="table_content">0000</td>
					<td class="table_content">Urdaneta</td>
					<td class="table_content">Active</td>
					<td class="table_content">10000</td>
					<td class="table_content">12/12/2012</td>
					<td class="table_content">Active</td>
					<td class="table_content"><a href="update" id="table_content">Edit</a></td>
					<td class="table_content"><a href="delete" id="table_content">Delete</a></td>
				</tr>
			</table>
		</fieldset>
	</div>
</div>