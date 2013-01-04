<?php defined('SYSPATH') or die('No direct access allowed.');?>
<fieldset name="borrower">
				<legend>Borrower</legend>
				<table>
					<tr>
						<td>Date</td><td><label> </label></td>
					</tr>
					<tr>	
						<td><input type="text" name="txt_Search" value="Search Borrower Name"></input></td><td><?php echo HTML::image('media/images/searchButton.jpg'); ?></td>
						<td><input type="text" name="txt_Search" value="Search Borrower ID"></input></td><td><?php echo HTML::image('media/images/searchButton.jpg'); ?></td>
					</tr>
					<tr>
						<td>Borrower Name </td><td><input type="text" name="txt_borrowerId"></input></td>
						<td>Borrower Status </td><td><input type="text" name="txt_oldborrowerId"></input></td>
						<td>Contact Number</td><td><input type="text" name="txt_Fname"></input></td>
					</tr>
					<tr>
						<td>Date of Birth </td><td><input type="text" name="txt_dBirth" value="mm/dd/yyyy"></input></td>
						<td>Civil Status </td><td><input type="text" name="txt_pBirth"></input></td>
						<td>Religion </td><td><input type="text" name="txt_pBirth"></input></td>
					</tr>
					<tr>
						<td>Current Address</td><td><input type="text" name="txt_Lname"></input></td>
						<td>Area Code</td><td><input type="text" name="txt_Lname"></input></td>
					</tr>
				</table>
			</fieldset>
			<div id="divscroll">
				<fieldset name="loan1">
						<legend>Loan</legend>
							<table>	
								<tr>
									<th>Branch ID </th>
									<th>Loan Account Number </th> 
									<th>Loan Number </th>
									<th>Loan Class</th>
									<th>Date of Release </th> 
									<th>Maturity Date </th>
									<th>Laon Ammount</th>
									<th>Loan Payment </th> 
									<th>Loan Balance </th>
								</tr>
								<tr>
									<td><input type="text"></input></td>
									<td><input type="text"></input> </td> 
									<td> <input type="text"></input></td>
									<td><input type="text"></input>	</td>
									<td><input type="text"></input></td> 
									<td><input type="text"></input> </td>
									<td><input type="text"></input></td>
									<td><input type="text"></input> </td> 
									<td><input type="text"></input> </td>
								</tr>
							</table>
				</fieldset>
			</div>
			<div id="divscroll">
				<fieldset name="loan">
						<legend>Loan</legend>
							<table>	
								<tr>
									<th>Branch ID </th>
									<th>Loan Account Number </th> 
									<th>Loan Number </th>
									<th>Loan Application Form</th>
									<th>Date of Application </th> 
									<th>Amount Requested </th>
									<th>Date Requested</th>
									<th>Date Approval </th> 
									<th>&nbsp;</th>
								</tr>
								<tr>
									<td><input type="text"></input></td>
									<td><input type="text"></input> </td> 
									<td> <input type="text"></input></td>
									<td><input type="text"></input>	</td>
									<td><input type="text"></input></td> 
									<td><input type="text"></input> </td>
									<td><input type="text"></input></td>
									<td><input type="text"></input> </td> 
									<td><input type="text"></input> </td>
								</tr>
							</table>
				</fieldset>
			</div>
			<fieldset name="cur_loanPayments">
							<legend>Current Loan Payments</legend>
								<table>	
									<tr>
										<th>Date of Payment</th> 
										<th>Receipt Number </th>
										<th>Payment Amount</th>
										<th>Balance </th> 
									</tr>
									<tr>
										<td><input type="text"></input></td>
										<td><input type="text"></input> </td> 
										<td> <input type="text"></input></td>
										<td><input type="text"></input>	</td>
									</tr>
								</table>
					</fieldset>
			<div id="floating-menu">
				<a href="#">Neighborhood Verification</a>
				<a href="#">Borrower Information</a>
				<a href="#">Borrower Address</a>
				<a href="#">Credit Matrix</a>
				<a href="#">Borrower Spouse and Dependents</a>
				<a href="#">Credit Rating and Grading</a>
				<a href="#">Business Co-Borrower</a>
				<a href="#">Credit Reference</a>
				<a href="#">Other Loans</a>
			</div>
