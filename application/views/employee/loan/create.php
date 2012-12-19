<?php defined('SYSPATH') or die('No direct access allowed.'); ?>

<div id="site_map">
			<div class="btn_right">
				<input type="button" value="Create"></input>
				<input type="button" value="Save"></input>
				<a href="loan_request" id="dialog-link" class="ui-state-default ui-corner-all"><input type="button" value="View"></a>	
			</div>	
			
		</div>	
		<fieldset id="document">
				<legend>Document</legend> 
					<table>
						<tr><td>Document: </td>
							<td><label>Create Loan Request </label></td>
							<td>Number </td><td><input type="text" name="txt_number"></input></td>
							<td>Date </td><td><input type="text" name="txt_number"></input></td>
							<td><?php echo HTML::image('media/images/searchButton.jpg'); ?></td>
						</tr>
						<tr><td>Reference Document: </td>
							<td><label>Loan Application Form </label></td>
							<td>Reference Number </td><td><input type="text" name="txt_number"></input></td>
							<td>Reference Date </td><td><input type="text" name="txt_number"></input></td>
						</tr>
					</table>
			</fieldset>
			<fieldset id="borrower">
				<legend>Borrower</legend>
				<table>
					<tr>
						<td><input type="text" name="txt_Search" value="Search Name"></input></td><td><?php echo HTML::image('media/images/searchButton.jpg'); ?></td>
					</tr>
					<tr>
						<td>Borrower Id: </td><td><input type="text" name="txt_borrowerId"></input></td>
						<td>Old Borrower Id: </td><td><input type="text" name="txt_oldborrowerId"></input></td>
						<td>Borrower Status: </td><td>N/A</td>
					</tr>
					<tr>
						<td>Borrower Name</td>
						<td><input type="text" name="txt_Lname" value="Last Name"></input></td>
						<td><input type="text" name="txt_Fname" value="First Name"></input></td>
						<td><input type="text" name="txt_Mname" value="Middle Name"></input></td>
					</tr>
					<tr>
						<td>Date of Birth </td><td><input type="text" name="txt_dBirth" value="mm/dd/yyyy"></input></td>
						<td>Contact Number </td><td><input type="text" name="txt_pBirth"></input></td>
					</tr>
					<tr>	
						<td>Present Address </td><td><input type="text" name="txt_presentAddress"></input></td>
						<td>Area Code </td><td><input type="text" name="txt_areaCode"></input></td>
						<td>Credit Rating</td><td><input type="text" name="txt_creditrating"></input></td>
					</tr>
				</table>
			</fieldset>
			<fieldset id="cur_loan">
						<legend>Current Loan</legend>
							<table>	
								<tr>
									<td>Amount Requested </td> <td><input type="text"></input></td>
									<td>Loan Class </td> <td><select><option>&nbsp;</option><option>&nbsp;</option></select></td>
									<td>Specefic Date Release </td> <td><input type="text"></input></td>
									
								</tr>
							</table>
			</fieldset>
			<fieldset id="business_information">
				<legend>Busness Information</legend>
					<table>
						<tr>
							<th>Business Type</th>
							<th>Business Address</th>
							<th>Daily Average Sale</th>
							<th>Stock Inventory</th>
						</tr>
						<tr>
							<td> <input type="text"></input> </td>
							<td> <input type="text"></input> </td>
							<td> <input type="text"></input> </td>
							<td> <input type="text"></input> </td>
						</tr>
					</table>	
			</fieldset>
			<fieldset id="co_borrower">
				<legend>Co Borrower</legend>
					<table>
						<tr>
							<th> First Name </th>
							<th> Middle Name </th>
							<th> Last Name </th>
							<th> Address</th>
						</tr>
						<tr>
							<td><input type="text"></input></td>
							<td><input type="text"></input></td>
							<td><input type="text"></input></td>
							<td><input type="text"></input></td>
						</tr>
						<tr>
							<td><input type="text"></input></td>
							<td><input type="text"></input></td>
							<td><input type="text"></input></td>
							<td><input type="text"></input></td>
						</tr>
					</table>	
			</fieldset>
			<fieldset id="collateral">
				<legend>Collateral</legend>
					<table>
						<tr>
							<td>Market and Type</td><td><input type="text"></input></td>
							<td>Brand</td><td><input type="text"></input></td>
							<td>Model</td><td><input type="text"></input></td>
						</tr>
						<tr>
							<td>Area (sq.m)</td>
							<td><input type="text"></input></td>
							<td>Location</td>	
							<td><input type="text"></input></td>
							<td>F.M Value</td>
							<td><input type="text"></input></td>
						</tr>	
						<tr>
							<td>General Condition</td>
							<td><input type="text"></input></td>
							<td>Total Fair Market Value</td>	
							<td><input type="text"></input></td>
							<td>Total Appraised Value</td>
							<td><input type="text"></input></td>
						</tr>
					</table>
			</fieldset>
			<fieldset id="prev_loanInfo">
				<legend>Previous Loan Information</legend>
					<table>
						<tr>
							<th> </th>
							<th> Loan Amount </th>
							<th>Release Date </th>
							<th> Closed Date</th>
						</tr>
						<tr>
							<td></td>
							<td><input type="text"></input></td>
							<td><input type="text"></input></td>
							<td><input type="text"></input></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="text"></input></td>
							<td><input type="text"></input></td>
							<td><input type="text"></input></td>
						</tr>
					</table>	
			</fieldset>


<div id="dialog" title="Loan Request for Posting">
    <?php echo $view_request; ?>
</div>