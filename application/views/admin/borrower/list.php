<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<div id="form">
	<div id="list_display">
		<fieldset>
			<legend>List of Borrowers</legend>
			<table id="branch_table_display" cellspacing="0">
				<tr>
					<th>Borrower Id</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Last Name</th>
					<th>Date of Birth</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<tr>
					<td class="table_content"></td>
					<td class="table_content"></td>
					<td class="table_content"></td>
					<td class="table_content"></td>
					<td class="table_content"></td>
					<td class="table_content"><a href="update">Edit</a></td>
					<td class="table_content"><a href="delete">Delete</a></td>
				</tr>
			</table>
		</fieldset>
	</div>
</div>