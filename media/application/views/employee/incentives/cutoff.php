<?php defined('SYSPATH') or die('No direct access allowed.'); ?>

	<table align="center">
					<tr>
						<td>Branch ID</td><td><input type="text"></input></td>
						<td>Cut off Date</td><td><input type="text"></input></td>
					</tr>
					<tr>
						<td>Cut off Period</td><td><input type="text"></input></td>
						<td>Year</td><td><input type="text"></input></td>
						<td>Month</td><td><input type="text"></input></td>
					</tr>
				</table>
				<fieldset>
					<legend>Status</legend>
					<table align="center">
						<tr>
							<td><input type="checkbox">Active</input></td>
							<td><input type="checkbox">Past Due</input></td>
							<td><input type="checkbox">Non Moving</input></td>
						</tr>
					</table>
				</fieldset>
				<hr>
				<div id="divscroll">
				<fieldset>
					<legend>Performance per Cut off</legend>
					<table align="center">
						<tr>
							<th>Borrowe ID</th>
							<th>Borrower Name</th>
							<th>Area Code</th>
							<th>Loan Status</th>
							<th>Account Number</th>
							<th>Loan Number</th>
							<th>Loan Term</th>
							<th>Loan Amount</th>
							<th>Release Date</th>
							<th>Mature Date</th>
							<th>Daily Amortization</th>
						</tr>
					</table>
				</fieldset>
				</div>