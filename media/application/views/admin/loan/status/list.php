<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
	<div id="list_display">
		<fieldset>
			<legend>Loan Status</legend>
			<table id="branch_table_display" cellspacing="0">
				<tr>
					<th>Loan Number</th>
					<th>Branch</th>
					<th>Borrower Name</th>
					<th>Date of Release</th>
					<th>Maturity Date</th>
					<th>Loan Amount</th>
					<th>Loan Status</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<tr>
					<td class="table_content"><input type="text"></input></td>
					<td class="table_content"></td>
					<td class="table_content"></td>
					<td class="table_content"></td>
					<td class="table_content"></td>
					<td class="table_content"></td>
					<td class="table_content">
						<select>
							<option>Past Due</option>
							<option>Non-moving</option>
							<option>Current</option>
						</select>
					</td>
					<td class="table_content"><a href="update">Edit</a></td>
					<td class="table_content"><a href="delete">Delete</a></td>
				</tr>
			</table>
		</fieldset>
	</div>
</div>