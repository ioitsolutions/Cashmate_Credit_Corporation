<?php defined('SYSPATH') or die('No direct access allowed.'); ?>

		<table>
		</table>
		<!--counter for post loan applications-->
		<div id="divscroll">
			<fieldset>
				<legend>List of Sent Loan Request</legend>
				<table>
					<tr>
						<th><input type="checkbox"></input></th>
						<th>Branch Id</th>
						<th>Loan Request Number</th>
						<th>New</th>
						<th>Unverified</th>
						<th>For Approval</th>
						<th>Pending</th>
						<th>Approved</th>
						<th>Disapproved</th>
					</tr>
					<tr>
						<td><input type="checkbox"></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
					</tr>
				</table>
			</fieldset>
		</div>
		<!--to be displayed after selecting action with in the counter-->
		<div id="divscroll">
			<fieldset>
				<legend>List of Loan Applications</legend>
				<table>
					<tr>
						<th><input type="checkbox"></input></th>
						<th>Loan Application No.</th>
						<th>Borrower Id</th>
						<th>Borrower Name</th>
						<th>Present Address</th>
						<th>Area Code</th>
						<th>Application No.</th>
						<th>Request No.</th>
						<th>Amount Requested</th>
						<th>Specific Date of Release</th>
						<th>Date Verified</th>
						<th>Amount Approved</th>
						<th>Status</th>
						<th>Date Updated</th>
						<th>Updated</th>
					</tr>
					<tr>
						<td><input type="checkbox"></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
						<td><input type="text"></input></td>
					</tr>
				</table>
			</fieldset>
		</div>
				<input type="radio" name="rbtn_loanApproval">Approve</input>
				<input type="radio" name="rbtn_loanApproval">Disapprove</input>
				&nbsp;<input type="button" value="Close"/>