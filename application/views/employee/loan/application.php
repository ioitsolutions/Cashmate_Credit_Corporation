<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
	<div id="site_map">
			<div class="btn_right">
				<input type="button" value="Create"/>
				<input type="button" value="Save"/>
			</div>
		</div>
		<a name="document"><fieldset id="document"></a>
					<legend>Document</legend> 
						<table>
							<tr><td>Document: </td>
								<td><label>Loan Application Form </label></td>
							</tr>
							<tr>
								<td>Number: </td><td><input type="text" name="txt_number"></input></td>
								<td><input type="text" name="txt_docSearch" value="Document Search"></input></td>
								<td><?php echo HTML::image('media/images/searchButton.jpg'); ?></img><td>
							</tr>
						</table>
				</fieldset>
				<a name="borrower"><fieldset id="borrower"></a>
					<legend>Borrower</legend>
					<table>
						<tr>
							<td><input type="text" name="txt_Search" value="Search Name"></input></td><td><?php echo HTML::image('media/images/searchButton.jpg'); ?></img></td>
							<td>Borrower Status: </td><td>N/A</td>
						</tr>
						<tr>
							<td>Borrower Id: </td><td><input type="text" name="txt_borrowerId"></input></td>
							<td><input type="button" value="Generate Id"/></td>
							<td>Old Borrower Id: </td><td><input type="text" name="txt_oldborrowerId"></input></td>
						
						</tr>
						<tr>
							<td><input type="text" name="txt_Lname" value="Last Name"></input></td>
							<td><input type="text" name="txt_Fname" value="First Name"></input></td>
							<td><input type="text" name="txt_Mname" value="Middle Name"></input></td>
							<td><input type="text" name="txt_Nickname" value="Nickname"></input></td>
						</tr>
						<tr>
							<td>Contact Number: </td><td><input type="text" name="txt_cNumber"></input></td>
						</tr>
						<tr>
							<td>Date of Birth: </td><td><input type="text" name="txt_dBirth" value="mm/dd/yyyy"></input></td>
							<td>Place of Birth: </td><td><input type="text" name="txt_pBirth"></input></td>
							<td>Gender: </td>
							<td>	<select name="gender">
										<option value="" selected="selected"> &nbsp; </option>
										<option value="male"> Male</option>
										<option value="female">Female</option>
									</select>
							</td>
						</tr>
						<tr>
							<td>Religion: </td><td><input type="text" name="txt_religion" ></input></td>
							<td>Citizenship: </td><td><input type="text" name="txt_citizenship" ></input></td>
							<td>Civil Status: </td>
							<td><select name="civil_status">
									<option value="" selected="selected"> &nbsp; </option>
									<option value="Single"> Single</option>
									<option value="Married">Married</option>
									<option value="Widowed">Widowed</option>
									<option value="Divorced">Divorced</option>
								</select></td>
						</tr>
						<tr>
							<td>Educational Attainment: </td><td><input type="text" name="txt_religion" ></input></td>
							<td>Occupation: </td><td><input type="text" name="txt_citizenship" ></input></td>
							<td>Monthly Salary: </td><td><input type="text" name="txt_civilStatus"></input></td>
						</tr>
						<tr>
							<td>Employer: </td><td><input type="text" name="txt_religion" ></input></td>
							<td>Employer Phone No.: </td><td><input type="text" name="txt_citizenship" ></input></td>
							<td>Employer Address: </td><td><input type="text" name="txt_civilStatus"></input></td>
						</tr>
					</table>
				</fieldset>
				<a name="currentAddress"><fieldset id="cur_address"></a>
							<legend>Current address</legend>
								<table>	
									<tr>
										<td>Address: </td> <td><input type="text"></input></td>
										<td>Postal Code: </td> <td><input type="text"></input></td>
										<td>Status: </td> <td><select><option>&nbsp;</option><option>&nbsp;</option></select></td>
										
									</tr>
									<tr>
										<td>Area Code: </td> <td><input type="text"></input></td>
										<td>Year of Stay: </td> <td><input type="text"></input></td>
										<td>Lot Area: </td> <td><input type="text"></input></td>
									
									</tr>
									<tr>
										<td>Land Address: </td> <td><input type="text"></input></td>
										<td>Floor Area: </td> <td><input type="text"></input></td>
										<td>Stability: </td> <td><input type="text"></input></td>
									</tr>
									<tr>
										<td>Model: </td><td><input type="text"></input></td>
										<td>Make: </td> <td><input type="text"></input></td>
										<td>Monthly Rental: </td> <td><input type="text"></input></td>
									</tr>
									<tr>
										<td>Name of Owner: </td><td> <input type="text"></input></td>
									</tr>
								</table>
						</fieldset>
				<a name="permanentAddress"><fieldset id="per_address"></a>
						<legend> Permanent address</legend>
							<table>	
									<tr>
										<td>Address: </td> <td><input type="text"></input></td>
										<td>Postal Code: </td> <td><input type="text"></input></td>
										<td>Status: </td> <td><select><option>&nbsp;</option><option>&nbsp;</option></select></td>
										
									</tr>
									<tr>
										<td>Area Code: </td> <td><input type="text"></input></td>
										<td>Year of Stay: </td> <td><input type="text"></input></td>
										<td>Lot Area: </td> <td><input type="text"></input></td>
									
									</tr>
									<tr>
										<td>Land Address: </td> <td><input type="text"></input></td>
										<td>Floor Area: </td> <td><input type="text"></input></td>
										<td>Stability: </td> <td><input type="text"></input></td>
									</tr>
									<tr>
										<td>Model: </td><td><input type="text"></input></td>
										<td>Make: </td> <td><input type="text"></input></td>
										<td>Monthly Rental: </td> <td><input type="text"></input></td>
									</tr>
									<tr>
										<td>Name of Owner: </td> <td><input type="text"></input></td>
									</tr>
								</table>
						</fieldset>
				<a name="previousAddress"><fieldset id="prev_address"></a>
						<legend> Previous address</legend>
							<table>	
									<tr>
										<td>Address: </td> <td><input type="text"></input></td>
										<td>Postal Code: </td> <td><input type="text"></input></td>
										<td>Status: </td> <td><select><option>&nbsp;</option><option>&nbsp;</option></select></td>
										
									</tr>
									<tr>
										<td>Area Code: </td> <td><input type="text"></input></td>
										<td>Year of Stay: </td> <td><input type="text"></input></td>
										<td>Lot Area: </td> <td><input type="text"></input></td>
									
									</tr>
									<tr>
										<td>Land Address: </td> <td><input type="text"></input></td>
										<td>Floor Area: </td> <td><input type="text"></input></td>
										<td>Stability: </td> <td><input type="text"></input></td>
									</tr>
									<tr>
										<td>Model: </td><td><input type="text"></input></td>
										<td>Make: </td> <td><input type="text"></input></td>
										<td>Monthly Rental: </td><td> <input type="text"></input></td>
									</tr>
									<tr>
										<td>Name of Owner: </td> <td><input type="text"></input></td>
									</tr>
								</table>
				</fieldset>
				<a name="spouse"><fieldset id="spouse"></a>
						<legend> Spouse</legend>
							<table>	
									<tr>
										<td>First Name: </td> <td><input type="text"></input></td>
										<td>Middle Name: </td> <td><input type="text"></input></td>
										<td>Last Name: </td> <td><input type="text"></input></td>
										
									</tr>
									<tr>
										<td>Date of Birth: </td> <td><input type="text" value="mm/dd/yyyy"></input></td>
										<td>Place of Birth: </td> <td><input type="text"></input></td>
										<td>Citizenship: </td> <td><input type="text"></input></td>
									
									</tr>
									<tr>
										<td>Years Together: </td> <td><input type="text"></input></td>
										<td>Provincial Address: </td> <td><input type="text"></input></td>
										<td>Educational Attainment: </td> <td><input type="text"></input></td>
									</tr>
									<tr>
										<td>Occupation: </td><td><input type="text"></input></td>
										<td>Monthly Salary: </td> <td><input type="text"></input></td>
										<td>Employer: </td><td> <input type="text"></input></td>
									</tr>
									<tr>
										<td>Employer Address: </td> <td><input type="text"></input></td>
										<td>Employer Phone Nunber: </td> <td><input type="text"></input></td>
									</tr>
								</table>
				</fieldset>
				<div id="divscroll">
				<a name="dependents"><fieldset id="dependents"></a>
					<legend>Dependents</legend>
						<table>
							<tr>
								<th>First Name</th>
								<th>Middle Name</th>
								<th>Lasr Name</th>
								<th>Date of Birth</th>
								<th>Relationship</th>
								<th>Address</th>
								<th>Name of School</th>
							</tr>
							<tr>
								<td> <input type="text"></input> </td>
								<td> <input type="text"></input> </td>
								<td> <input type="text"></input> </td>
								<td> <input type="text"></input> </td>
								<td> <input type="text"></input> </td>
								<td> <input type="text"></input> </td>
								<td> <input type="text"></input> </td>
							</tr>
						</table>	
				</fieldset>
				</div>
				<input type="button" value="ADD DEPENDENTS"></input>
				<div id="divscroll">
					<a name="businessInfo"><fieldset id="bus_information"></a>
						<legend>Business Information</legend>
							<table>
								<tr>
									<th> &nbsp; </th>
									<th>Business Name</th>
									<th>Business Type</th>
									<th>Business Status</th>
									<th>Business Address</th>
									<th>Address Status</th>
									<th>Existence in Years</th>
									<th>Permit Number</th>
									<th>Expiry Date</th>
								</tr>
								<tr>
									<td>1</td>
									<td> <input type="text"></input> </td>
									<td> <input type="text"></input> </td>
									<td> <input type="text"></input> </td>
									<td> <input type="text"></input> </td>
									<td> <input type="text"></input> </td>
									<td> <input type="text"></input> </td>
									<td> <input type="text"></input> </td>
									<td> <input type="text"></input> </td>
								</tr>
								<tr>
									<td>2</td>
									<td> <input type="text"></input> </td>
									<td> <input type="text"></input> </td>
									<td> <input type="text"></input> </td>
									<td> <input type="text"></input> </td>
									<td> <input type="text"></input> </td>
									<td> <input type="text"></input> </td>
									<td> <input type="text"></input> </td>
									<td> <input type="text"></input> </td>
								</tr>
							</table>	
					</fieldset>
				</div>
				<a name="stateIncome"><fieldset id="fs_stateIncome"></a>
						<legend> Statement of Income and Expenes</legend>
							<table>	
									<tr>
										<td><b>Business Income </b></td> <td><b>Business1</b></td><td><b>Business2 </b></td> 
										<td><b>Total</b></td>	<td><b>Other Income </b></td> <td>&nbsp;</td>
										
									</tr>
									<tr>
										<td>Sales </td> <td>
										<input type="text"></input></td>
										<td><input type="text"></input></td> 
										<td><input type="text"></input></td>
										<td>Employment</td> 
										<td><input type="text"></input></td>
									</tr>
									<tr>
										<td>Less:Cost of Goods Sold </td> <td>
										<input type="text"></input></td>
										<td><input type="text"></input></td> 
										<td><input type="text"></input></td>
										<td>Inward Remittance</td> 
										<td><input type="text"></input></td>
									</tr>
									<tr>
										<td>Gross Monthly Income </td> <td>
										<input type="text"></input></td>
										<td><input type="text"></input></td> 
										<td><input type="text"></input></td>
										<td>Others</td> 
										<td><input type="text"></input></td>
									</tr>
									<tr>
										<td>&nbsp; </td> 
										<td>&nbsp;</td>
										<td>&nbsp;</td> 
										<td>&nbsp;</td>
										<td><b>Total Other Income</b></td> 
										<td><input type="text"></input></td>
									</tr>
									<tr>
										<td><b>Operating Expenses</b></td> 
										<td>&nbsp;</td>
										<td>&nbsp;</td> 
										<td>&nbsp;</td>
										<td><b>Family Expenses</b></td> 
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>Salaries and Wages</td> 
										<td><input type="text"></input></td>
										<td><input type="text"></input></td> 
										<td><input type="text"></input></td>
										<td>Rental</td> 
										<td><input type="text"></input></td>
									</tr>
									<tr>
										<td>Rent</td> 
										<td><input type="text"></input></td>
										<td><input type="text"></input></td> 
										<td><input type="text"></input></td>
										<td>Utilities</td> 
										<td><input type="text"></input></td>
									</tr>
									<tr>
										<td>Utilities</td> 
										<td><input type="text"></input></td>
										<td><input type="text"></input></td> 
										<td><input type="text"></input></td>
										<td>Food</td> 
										<td><input type="text"></input></td>
									</tr>
									<tr>
										<td>Incidental Expenses</td> 
										<td><input type="text"></input></td>
										<td><input type="text"></input></td> 
										<td><input type="text"></input></td>
										<td>Clothing</td> 
										<td><input type="text"></input></td>
									</tr>
									<tr>
										<td>Taxes and Licenses</td> 
										<td><input type="text"></input></td>
										<td><input type="text"></input></td> 
										<td><input type="text"></input></td>
										<td>Education</td> 
										<td><input type="text"></input></td>
									</tr>
									<tr>
										<td>Transportation</td> 
										<td><input type="text"></input></td>
										<td><input type="text"></input></td> 
										<td><input type="text"></input></td>
										<td>Mortgage</td> 
										<td><input type="text"></input></td>
									</tr>
									<tr>
										<td>Insurance</td> 
										<td><input type="text"></input></td>
										<td><input type="text"></input></td> 
										<td><input type="text"></input></td>
										<td>Medicines</td> 
										<td><input type="text"></input></td>
									</tr>
									<tr>
										<td>&nbsp;</td> 
										<td>&nbsp;</td>
										<td>&nbsp;</td> 
										<td>&nbsp;</td>
										<td>Insurance</td> 
										<td><input type="text"></input></td>
									</tr>
									<tr>
										<td>&nbsp;</td> 
										<td>&nbsp;</td>
										<td>&nbsp;</td> 
										<td>&nbsp;</td>
										<td>Other Loans</td> 
										<td><input type="text"></input></td>
									</tr>
									<tr>
										<td><b>Total Operating Expenses</b></td> 
										<td><input type="text"></input></td>
										<td><input type="text"></input></td> 
										<td><input type="text"></input></td>
										<td><b>Total Family Expenses</b></td> 
										<td><input type="text"></input></td>
									</tr>
									<tr>
										<td><b>Net Disposable Income</b></td> 
										<td>&nbsp;</td>
										<td>&nbsp;</td> 
										<td><input type="text"></input></td>
										<td><b>Net Disposable Income</b></td> 
										<td><input type="text"></input></td>
									</tr>
									<tr>
										<td><b>Maximum Loan to Avail</b></td> 
										<td>&nbsp;</td>
										<td>&nbsp;</td> 
										<td><input type="text"></input></td>
										<td>&nbsp;</td> 
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>&nbsp;</td> 
										<td>Equipments</td>
										<td>Stocks</td> 
										<td>Stock Worth</td>
										<td>&nbsp;</td> 
										<td>&nbsp;</td>
									</tr>
										<tr>
										<td>&nbsp;</td> 
										<td><input type="text"></input></td>
										<td><input type="text"></input></td> 
										<td><input type="text"></input></td>
										<td>&nbsp;</td> 
										<td>&nbsp;</td>
									</tr>
							</table>
				</fieldset>
				<div id="divscroll">
					<a name="otherLoans"><fieldset id="loans_otherBanks"></a>
						<legend>Loans with Banks and other Institutions</legend>
							<table>
								<tr>
									<th> &nbsp; </th>
									<th>Creditor Name</th>
									<th colspan="5">Creditor Address</th>
									<th>Loan Balance</th>
									
								</tr>
								<tr>
									<td>1</td>
									<td><input type="text"></input></td>
									<td><input type="text" value="Number/Building"></input> </td>
									<td> <input type="text" value="Street"></input> </td>
									<td> <input type="text" value="Barangay"></input> </td>
									<td><input type="text" value="City/Municipality"></input></td>
									<td><input type="text" value="Province"></input></td>
									<td><input type="text"></input></td>
								</tr>
								<tr>
									<td>2</td>
									<td><input type="text"></input></td>
									<td><input type="text" value="Number/Building"></input> </td>
									<td> <input type="text" value="Street"></input> </td>
									<td> <input type="text" value="Barangay"></input> </td>
									<td><input type="text" value="City/Municipality"></input></td>
									<td><input type="text" value="Province"></input></td>
									<td><input type="text"></input></td>
								</tr>
							</table>	
								
					</fieldset>
				</div>
			<!--	<input type="button" value="ADD Loans/Other Instituions"></input>-->
				<div id="divscroll">
					<a name="characterReference"><fieldset id="char_reference"></a>
						<legend>Character Refences</legend>
							<table>
								<tr>
									<th> &nbsp; </th>
									<th>First Name</th>
									<th>Middle Name</th>
									<th>Last Name</th>
									<th colspan="5">Address</th>
									<th>Contact Number</th>
								</tr>
								<tr>
									<td>1</td>
									<td> <input type="text"></input> </td>
									<td> <input type="text"></input> </td>
									<td><input type="text"></input></td>
									<td><input type="text" value="Number/Building"></input> </td>
									<td> <input type="text" value="Street"></input> </td>
									<td> <input type="text" value="Barangay"></input> </td>
									<td><input type="text" value="City/Municipality"></input></td>
									<td><input type="text" value="Province"></input></td>
									<td><input type="text"></input></td>
								</tr>
								<tr>
									<td>2</td>
									<td> <input type="text"></input> </td>
									<td> <input type="text"></input> </td>
									<td><input type="text"></input></td>
									<td><input type="text" value="Number/Building"></input> </td>
									<td> <input type="text" value="Street"></input> </td>
									<td> <input type="text" value="Barangay"></input> </td>
									<td><input type="text" value="City/Municipality"></input></td>
									<td><input type="text" value="Province"></input></td>
									<td><input type="text"></input></td>
								</tr>
							</table>	
						</fieldset>
				</div>
				<!--<input type="button" value="ADD Character Reference"></input>-->
				<a name="coBorrower"><fieldset id="co_borrower"></a>
					<legend>Co Borrower</legend>
						<table>
							<tr>
								<td> First Name </td>
								<td> <input type="text" ></input> </td>
								<td> Middle Name </td>
								<td> <input type="text" ></input></td>
								<td> Last Name </td>
								<td> <input type="text" ></input></td>
							</tr>
							<tr>
								<td>Spouse Name</td>
								<td><input type="text"></input></td>
								<td> Address </td>
								<td><input type="text"></input></td>
								<td>Occupation</td>
								<td><input type="text"></input></td>
							</tr>
							<tr>
								<td>Gross Income</td>
								<td><input type="text"></input></td>
								<td>Contact Number</td>
								<td><input type="text"></input></td>
								<td>Business Name</td>
								<td><input type="text"></input></td>
							</tr>
							<tr>
								<td> Business Type </td>
								<td><input type="text"></input></td>
								<td>Business Status</td>
								<td><input type="text"></input></td>
								<td>Business Address</td>
								<td><input type="text"></input></td>
							</tr>
							<tr>
								<td> Existence in Years </td>
								<td><input type="text"></input></td>
								<td>Permit Number</td>
								<td><input type="text"></input></td>
								<td>Expiry Date</td>
								<td><input type="text"></input></td>
							</tr>
						</table>	
				</fieldset>
				<input type="button" value="Save"></input>
				<input type="button" value="Add Co Borrower"></input>
				<a name="documentsPresented"><fieldset id="docs_presented"></a>
					<legend>Documents Presented</legend>
						<table>
							<tr>
								<th>Document Type</th>
								<th>Document Number</th>
								<th>Copy</th>
							</tr>
							<tr>
								<td><input type="text"></input></td>
								<td><input type="text"></input></td>
								<td><input type="text"></input></td>
							</tr>
						</table>
						<p>Attach a file
						<input type="file" name="file" id="file"></input><input type="button" value="Submit"></input><br/></p>
						<input type="button" value="Add Documents"></input>
						<input type="button" value="Save"></input>
				</fieldset>
				<a name="neighborhood"><fieldset id="neighborhood_investagation"></a>
					<legend>Neighborhood and Background Investigation</legend>
						<table>
							<tr>
								<td>Remarks</td><td><input type="text"></input></td>
							</tr>
						</table>
				</fieldset>
				<div id="divscroll">
					<a name="collateral"><fieldset></a>
						<legend>Collateral</legend>
							<table>
								<tr>
									<th>&nbsp;</th>
									<th>Make and Type</th>
									<th>Brand</th>
									<th>Document Number</th>
									<th>Serial Number</th>
									<th>Model</th>
									<th>Area</th>
									<th>Montor No.</th>
									<th>Chasis No.</th>
									<th>Plate No.</th>
									<th>Location</th>
									<th>F.M Value</th>
									<th>General Condition</th>
								</tr>
								<tr>
									<td>1</td>
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
									<tr>
									<td>2</td>
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
				<!--<input type="button" value="Add Collateral"></input>-->
				<table>
					<tr>
						<td>Total Fair Market Value</td><td><input type="text"></input></td>
						<td>Appraised By: </td><td>Employee Id </td><td><input type="text"></input></td>
						<td>Employee Name </td><td><input type="text"></input></td>
					</tr>
					<tr>
						<td>Total Appraised Value</td><td><input type="text"></input></td>
						<td>Review and Checked By: </td><td>Employee Id </td><td><input type="text"></input></td>
						<td>Employee Name </td><td><input type="text"></input></td>
					</tr>
				</table>
				<fieldset>
					<a name="requirements"><legend>Requirements</legend></a>
						<table>
							<tr>
								<td><input type="checkbox" name="chk_businessPermit"></input></td><td>Business Permit</td>
								<td><input type="checkbox" name="chk_barangayClearance"></input></td><td>Barangay Clearance</td>
								<td><input type="checkbox" name="chk_idPicture"></input></td><td>2x2 Id Picture</td>
								<td><input type="checkbox" name="chk_residenceCertificate"></input></td><td>Residence Certificate</td>
							</tr>
							<tr>
								<td><input type="checkbox" name="chk_pictureCollateral"></input></td><td>Picture of Collaterals</td>
								<td><input type="checkbox" name="chk_businessEstablishments"></input></td><td>Picture of Business Establishments</td>
								<td><input type="checkbox" name="chk_businessPermit"></input></td><td>Photocopy of Business Permit (Brgy./ Mayor)</td>
								<td><input type="checkbox" name="chk_permitOperate"></input></td><td>Photocopy of Permit to Operate (PUJ / TODA)</td>
							</tr>
							<tr>
								<td><input type="checkbox" name="chk_pictureCollateral"></input></td><td>Photocopy of 1 Valid ID (Borrower) </td>
								<td><input type="checkbox" name="chk_businessBorrower"></input></td><td>Picture of Business Establishments with Borrower</td>
								<td><input type="checkbox" name="chk_proofBilling"></input></td><td>Original proof of billing</td>
								<td><input type="checkbox" name="chk_authorizationSpouse"></input></td><td>Authorization of spouse with photocopy of ID</td>
							</tr>
						</table>
				</fieldset>
				<div id="site_map">
					<pre> Credit Matrix</pre>
				</div>
				<fieldset>
					<a name="Rating"><legend>Rating and Grading</legend></a>
				</fieldset>
				<input type="button" value="Debug">
				<table>
                                    <tr>
                                        <th rowspan="2" >Rating Basis</th>
                                        <th rowspan="2" >Rating Category</th>
                                        <th colspan="2" >Account Representative</th>
                                        <th colspan="2">Field Auditor</th>
                                        <th colspan="2" >Branch Manager</th>
                                    </tr>
                                    <tr >
                                        <th>Grading</th>
                                        <th >Rating</th>
                                        <th >Grading</th>
                                        <th >Rating</th>
                                        <th >Grading</th>
                                        <th >Rating</th>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">Business Verification</td>
                                        <td >Capacity</td>
                                        <td><input name="rateAccountRepresentative" type="number" min="0" max="100" value="0"  /></td>
                                        <td ><span id="rating-businessverification-capacity-accountrepresentative">0</span>%</td>
                                        <td ><input name="rateFieldAuditor" type="number" min="0" max="100" value="0"/></td>
                                        <td ><span id="rating-businessverification-capacity-fieldauditor">0</span>%</td>
                                        <td ><input name="rateBranchManager" type="number" min="0" max="100" value="0" /></td>
                                        <td ><span >0</span>%</td>
                                    </tr>
                                    <tr>
                                        <td>Cash Flow</td>
                                        <td ><input name="rateAccountRepresentative" type="number" min="0" max="100" value="0" /></td>
                                        <td ><span >0</span>%</td>
                                        <td><input name="rateFieldAuditor" type="number" min="0" max="100" value="0" /></td>
                                        <td ><span >0</span>%</td>
                                        <td ><input name="rateBranchManager" type="number" min="0" max="100" value="0" /></td>
                                        <td ><span >0</span>%</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="4" >Place of Business Description</td>
                                        <td >Condition</td>
                                        <td ><input name="rateAccountRepresentative" type="number" min="0" max="100" value="0"/></td>
                                        <td><span >0</span>%</td>
                                        <td ><input name="rateFieldAuditor" type="number" min="0" max="100" value="0" /></td>
                                        <td ><span >0</span>%</td>
                                        <td><input name="rateBranchManager" type="number" min="0" max="100" value="0"  /></td>
                                        <td ><span >0</span>%</td>
                                    </tr>
                                    <tr>
                                        <td>Capital</td>
                                        <td ><input name="rateAccountRepresentative" type="number" min="0" max="100" value="0"  /></td>
                                        <td ><span>0</span>%</td>
                                        <td ><input name="rateFieldAuditor" type="number" min="0" max="100" value="0" /></td>
                                        <td><span>0</span>%</td>
                                        <td ><input name="rateBranchManager" type="number" min="0" max="100" value="0"  /></td>
                                        <td ><span>0</span>%</td>
                                    </tr>
                                    <tr>
                                        <td >Character</td>
                                        <td><input name="rateAccountRepresentative" type="number" min="0" max="100" value="0" /></td>
                                        <td ><span >0</span>%</td>
                                        <td><input name="rateFieldAuditor" type="number" min="0" max="100" value="0" /></td>
                                        <td><span >0</span>%</td>
                                        <td ><input name="rateBranchManager" type="number" min="0" max="100" value="0"  /></td>
                                        <td ><span >0</span>%</td>
                                    </tr>
                                    <tr>
                                        <td >Collateral</td>
                                        <td ><input name="rateAccountRepresentative" type="number" min="0" max="100" value="0" /></td>
                                        <td><span >0</span>%</td>
                                        <td><input name="rateFieldAuditor" type="number" min="0" max="100" value="0" c/></td>
                                        <td><span >0</span>%</td>
                                        <td ><input name="rateBranchManager" type="number" min="0" max="100" value="0"  /></td>
                                        <td><span>0</span>%</td>
                                    </tr>
                                    <tr>
                                        <td>Neighborhood Background Investigation</td>
                                        <td >Character</td>
                                        <td><input name="rateAccountRepresentative" type="number" min="0" max="100" value="0"  /></td>
                                        <td ><span>0</span>%</td>
                                        <td ><input name="rateFieldAuditor" type="number" min="0" max="100" value="0" /></td>
                                        <td ><span>0</span>%</td>
                                        <td ><input name="rateBranchManager" type="number" min="0" max="100" value="0"  /></td>
                                        <td ><span>0</span>%</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">Personal/Real Properties Owned</td>
                                        <td>Capital</td>
                                        <td><input name="rateAccountRepresentative" type="number" min="0" max="100" value="0"  /></td>
                                        <td ><span>0</span>%</td>
                                        <td><input name="rateFieldAuditor" type="number" min="0" max="100" value="0" /></td>
                                        <td ><span>0</span>%</td>
                                        <td ><input name="rateBranchManager" type="number" min="0" max="100" value="0" /></td>
                                        <td><span>0</span>%</td>
                                    </tr>
                                    <tr>
                                        <td>Cash Flow</td>
                                        <td><input name="rateAccountRepresentative" type="number" min="0" max="100" value="0"  /></td>
                                        <td><span >0</span>%</td>
                                        <td ><input name="rateFieldAuditor" type="number" min="0" max="100" value="0" /></td>
                                        <td ><span >0</span>%</td>
                                        <td ><input name="rateBranchManager" type="number" min="0" max="100" value="0"  /></td>
                                        <td><span >0</span>%</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">Source of Income</td>
                                        <td>Capital</td>
                                        <td ><input name="rateAccountRepresentative" type="number" min="0" max="100" value="0"  /></td>
                                        <td ><span>0</span>%</td>
                                        <td ><input name="rateFieldAuditor" type="number" min="0" max="100" value="0" /></td>
                                        <td ><span>0</span>%</td>
                                        <td><input name="rateBranchManager" type="number" min="0" max="100" value="0" /></td>
                                        <td><span>0</span>%</td>
                                    </tr>
                                    <tr>
                                        <td>Capacity</td>
                                        <td><input name="rateAccountRepresentative" type="number" min="0" max="100" value="0"  /></td>
                                        <td><span>0</span>%</td>
                                        <td><input name="rateFieldAuditor" type="number" min="0" max="100" value="0" /></td>
                                        <td><span>0</span>%</td>
                                        <td><input name="rateBranchManager" type="number" min="0" max="100" value="0"  /></td>
                                        <td><span>0</span>%</td>
                                    </tr>
                                    <tr>
                                        <td >Cash Flow</td>
                                        <td><input name="rateAccountRepresentative" type="number" min="0" max="100" value="0"  /></td>
                                        <td ><span>0</span>%</td>
                                        <td ><input name="rateFieldAuditor" type="number" min="0" max="100" value="0" /></td>
                                        <td ><span>0</span>%</td>
                                        <td><input name="rateBranchManager" type="number" min="0" max="100" value="0"  /></td>
                                        <td ><span >0</span>%</td>
                                    </tr>
                                    <tr>
                                        <td>Documents Presented</td>
                                        <td>Character</td>
                                        <td ><input name="rateAccountRepresentative" type="number" min="0" max="100" value="0"  /></td>
                                        <td ><span>0</span>%</td>
                                        <td ><input name="rateFieldAuditor" type="number" min="0" max="100" value="0" /></td>
                                        <td ><span>0</span>%</td>
                                        <td ><input name="rateBranchManager" type="number" min="0" max="100" value="0"  /></td>
                                        <td ><span >0</span>%</td>
                                    </tr>
				</table>
				<fieldset>
                     <a name="credit_rating"><legend >Credit Rating</legend></a>
                           <table>
                            <tr >
                                <th rowspan="2" colspan="2" >Rating Category</th>
                                <th colspan="2" >Account Representative</th>
								<th colspan="2" >Field Auditor</th>
                                <th colspan="2" >Branch Manager</th>
                            </tr>
                            <tr>
                                <th >Grading</th>
                                <th >Rating</th>
                                <th >Grading</th>
                                <th >Rating</th>
                                <th >Grading</th>
                                <th >Rating</th>
                            </tr>
                            <tr>
                                <td >Capacity</td>
                                <td ><span >32</span>%</td>
                                <td ><span ><input type="number" value="0.00"/></span></td>
                                <td ><span ></span>%</td>
                                <td ><span ><input type="number" value="0.00"/></span></td>
                                <td ><span ></span>%</td>
                                <td ><span ><input type="number" value="0.00"/></span></td>
                                <td ><span ></span>%</td>
                            </tr>
                            <tr>
                                <td >Condition</td>
                                <td ><span >18</span>%</td>
                                <td ><span ><input type="number" value="0.00"/></span></td>
                                <td ><span ></span>%</td>
                                <td ><span ><input type="number" value="0.00"/></span></td>
                                <td ><span ></span>%</td>
                                <td ><span ><input type="number" value="0.00"/></span></td>
                                <td ><span ></span>%</td>
                            </tr>
                            <tr>
                                <td >Character</td>
                                <td ><span >15</span>%</td>
                                <td ><span ><input type="number" value="0.00"/></span></td>
                                <td ><span ></span>%</td>
                                <td ><span ><input type="number" value="0.00"/></span></td>
                                <td ><span ></span>%</td>
                                <td ><span ><input type="number" value="0.00"/></span></td>
                                <td ><span ></span>%</td>
                            </tr>
                            <tr>
                                <td >Capital</td>
                                <td ><span >15</span>%</td>
                                <td ><span ><input type="number" value="0.00"/></span></td>
                                <td ><span ></span>%</td>
								<td ><span><input type="number" value="0.00"/></span></td>
								<td ><span ></span>%</td>
								<td ><span><input type="number" value="0.00"/></span></td>
								<td ><span ></span>%</td>
							</tr>
							<tr>
								<td>Collateral</td>
								<td ><span >10</span>%</td>
								<td ><span ><input type="number" value="0.00"/></span></td>
								<td ><span ></span>%</td>
								<td ><span ><input type="number" value="0.00"/></span></td>
                                <td><span ></span>%</td>
                                <td ><span ><input type="number" value="0.00"/></span></td>
                                <td ><span ></span>%</td>
                           </tr>
                            <tr>
                              <td >Cash Flow</td>
								<td ><span >10</span>%</td>
                                <td ><span ><input type="number" value="0.00"/></span></td>
                                <td ><span ></span>%</td>
                                <td ><span ><input type="number" value="0.00"/></span></td>
                                <td ><span ></span>%</td>
                                <td><span ><input type="number" value="0.00"/></span></td>
                                <td ><span ></span>%</td>
                            </tr>
                            <tr>
								<td >Total</td>
                                <td >100%</td>
                                <td ><span ><input type="number" value="0.00"/></span></td>
                                <td ><span ></span>%</td>
								<td ><span ><input type="number" value="0.00"/></span></td>
                                <td ><span ></span>%</td>
                                <td ><span ><input type="number" value="0.00"/></span></td>
								<td ><span ></span>%</td>
                            </tr>
                            <tr>
                                <td >Credit Rating</td>
								<td colspan="1" ><input type="text"  id="creditRating" name="creditRating" readonly="readonly" value="0.00" />%</td>
							</tr>
                        </table>
				</fieldset>
				<a name="backtobottom"><table></a>
						<tr>
							<td class="gen-font-bold" colspan="4">Account Representative</td>
							<td class="width-50"></td>
							<td class="gen-font-bold" colspan="4"> Area Manager </td>
						</tr>
						<tr>
							<td>EE Id:</td>
							<td><input type="number" value="0" name="personnelId" /></td>
							<td>Name:</td>
							<td class="width-200"><input type="text" readonly="readonly" /></td>
							<td class="width-50"></td>
							<td>EE Id:</td>
							<td class="width-50"><input type="number" value="0" name="personnelId" /></td>
							<td>Name:</td>
							<td class="width-200"><input type="text" readonly="readonly" /></td>
						</tr>
						<tr>
							<td>Remarks:</td>
							<td colspan="3"><input type="text" name="personnelRemarks" /></td>
							<td class="width-50"></td>
							<td>Remarks:</td>
							<td colspan="3"><input type="text" name="personnelRemarks" /></td>
						</tr>
						<tr>
							<td class="gen-font-bold" colspan="4">Field Auditor</td>
						</tr>
						<tr>
							<td>EE Id:</td>
							<td class="width-50"><input type="number" value="0" name="personnelId" /></td>
							<td>Name:</td>
							<td class="width-200"><input type="text" readonly="readonly" /></td>
						</tr>
						<tr>
							<td>Remarks:</td>
							<td colspan="3"><input type="text" name="personnelRemarks" /></td>
						</tr>
						<tr>
							<td class="gen-font-bold" colspan="4">Branch Manager</td>
							<td class="width-50"></td>
							<td class="gen-font-bold" colspan="4">Branch Cash Custodian</td>
						</tr>
						<tr>
							<td>EE Id:</td>
							<td class="width-50"><input type="number" value="0" name="personnelId"  /></td>
							<td>Name:</td>
							<td class="width-200"><input type="text" readonly="readonly"  /></td>
							<td class="width-50"></td>
							<td>EE Id:</td>
							<td class="width-50"><input type="number" value="0" name="personnelId"  /></td>
							<td>Name:</td>
							<td class="width-200"><input type="text" readonly="readonly"  /></td>
						</tr>
						<tr>
							<td>Remarks:</td>
							<td colspan="3"><input type="text" name="personnelRemarks"  /></td>
							<td class="width-50"></td>
							<td>Remarks:</td>
							<td colspan="3"><input type="text" name="personnelRemarks" /></td>
						</tr>
				</table>
	</div><!--End Body Content-->
	<!--navigational footer menus-->
	<div id="floating-menu">
			<a href="#top">Back to Top</a>
			<a href="#document">Document</a>
			<a href="#previousAddress">Previous Address</a>
			<a href="#documentsPresented">Documents Presented</a>
			<a href="#coBorrower">Co Borrower</a>
			<a href="#credit_rating">Credit Rating</a>
			<a href="#collateral">Collateral</a>
			<a href="#spouse">Spouse</a>
			<a href="#dependents">Dependents</a>
			<a href="#borrower">Borrower</a>
			<a href="#rating">Rating and Grading</a>
			<a href="#requirements">Requirements</a>
			<br/>
			<a href="#characterReference">Character References</a>
			<a href="#stateIncome">Statement of Income</a>
			<a href="#businessInfo">Business Information</a>
			<a href="#otherLoans">Other Loans</a>
			<a href="#permanentAddress">Permanent Address</a>
			<a href="#currentAddress">Current Address</a>
			<a href="#neighborhood">Background Investigation</a>
	</div>