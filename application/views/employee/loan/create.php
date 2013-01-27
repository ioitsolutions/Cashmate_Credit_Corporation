<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<?php echo Form::open('loan_create/view',array('id' => 'frmRequest')); ?>
<div id="site_map">
    <div class="btn_right">
        <input id="createRequestButton" type="button" value="Create"/>
        <input id="saveRequestButton" type="button" value="Save"/>
        <input id="viewRequestButton" type="button" value="View"/>	
    </div>	
			
</div>	
<fieldset id="document">
    <legend>Document</legend> 
        <table>
            <tr><td>Document: </td>
                <td><label>Create Loan Request </label></td>
                <td>Number </td>
                <td>
                    <input type="text" id ="clr_number" name="clr_number" value="<?php echo $loan_request->document->document_number; ?>"/>
                </td>
                <td>Date </td>
                <td>
                    <input type="text" id="clr_date" name="clr_date" value="<?php echo $loan_request->document->document_date; ?>"/>
                </td>
                <td><?php echo HTML::image('media/images/searchButton.jpg'); ?></td>
            </tr>
            <tr><td>Reference Document: </td>
                <td>
                    <label>Loan Application Form </label>
                </td>
                <td>Reference Number </td>
                <td>
                    <input type="text" id="laf_number" name="laf_number" value="<?php echo $loan_application->document->document_number; ?>"/>
                </td>
                <td>Reference Date </td>
                <td>
                    <input type="text" id="laf_date" name="laf_date" value="<?php echo $loan_application->document->document_date; ?>"/>
                </td>
            </tr>
        </table>
</fieldset>
<fieldset id="borrower">
    <legend>Borrower</legend>
    <table>
        <tr>
            <td>Search Borrower ID:</td>
            <!--<td>
                <input id="borrowerName" type="text" name="borrowerName" placeholder="Search Borrower ID"/>
            </td>!-->
            <td>
                <input id="searchBorrowerButton" class="ui-icon ui-icon-search" type="submit" value="Search"/>
            </td>
        </tr>
        <tr>
            <td>Borrower Id: </td>
            <td>
                <input id ="borrowerID" type="text" name="id" value="<?php echo $borrower->id; ?>"/>
            </td>
            <td>Old Borrower Id: </td>
            <td>
                <input type="text" name="old_borrower_id" disabled="true" value="<?php echo $borrower->old_borrower_id; ?>"/>
            </td>
            <td>Borrower Status: </td><td>N/A</td>
        </tr>
        <tr>
            <td>Borrower Name</td>
            <td>
                <input id="last_name" type="text" name="last_name" disabled="true" value="<?php echo $borrower->last_name; ?>"/>
            </td>
            <td>
                <input type="text" name="first_name" disabled="true" value="<?php echo $borrower->first_name; ?>"/>
            </td>
            <td>
                <input type="text" name="middle_name" disabled="true" value="<?php echo $borrower->middle_name; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Date of Birth </td>
            <td>
                <input type="text" name="date_of_birth" disabled="true" value="<?php echo $borrower->date_of_birth; ?>"/>
            </td>
            <td>Contact Number </td>
            <td>
                <input type="text" name="contact_number" class="required" value="<?php echo $borrower->contact_number; ?>"/>
            </td>
        </tr>
        <tr>	
            <td>Present Address </td>
            <td>
                <input type="text" name="address" class="required" value="<?php echo $borrower_address->address; ?>">
            </td>
            <td>Area Code </td>
            <td>
                <?php echo Form::select('area_id', $areas, $borrower_address->area_id,array('class' => 'selectbox_edit')); ?>
                <input type="text" name="txt_areaCode" value="<?php echo $borrower_address->area->code; ?>"/>
            </td>
            <td>Credit Rating</td>
            <td>
                <input type="text" name="txt_creditrating" disabled="true"/>
            </td>
        </tr>
    </table>
</fieldset>
<fieldset id="cur_loan">
    <?php echo Form::hidden('lr_doc_id', $loan_request->document_id); ?>
    <?php echo Form::hidden('lr_id', $loan_request->id); ?>
    <legend>Current Loan</legend>
    <table>	
        <tr>
            <td>Amount Requested </td> 
            <td>
                <input type="text" name="amount_requested" class="required" value="<?php echo $loan_request->amount_requested; ?>"/>
            </td>
            <td>Loan Class </td> 
            <td>
                <?php echo Form::select('loan_class',array('30'=>'30','60'=>'60','100'=>'100'), $loan_request->loan_class,array('class' => 'selectbox_edit')); ?>
            </td>
            <td>Specific Date Release </td>
            <td>
                <input type="text" name="date_release" class="datepicker" class="required" value="<?php echo $loan_request->requested_date_release; ?>"/>
            </td>
        </tr>
    </table>
</fieldset>
<?php echo Form::close(); ?>
<fieldset id="business_information">
    <legend>Business Information</legend>
        <table>
            <tr>
                <th>Business Type</th>
                <th>Business Address</th>
                <th>Daily Average Sale</th>
                <th>Stock Inventory</th>
            </tr>
            <tr>
                <td> 
                    <input type="text" disabled="true" value="<?php echo $business->business_type;?>"/>
                </td>
                <td> 
                    <input type="text" disabled="true" value="<?php echo $business->business_address;?>"/>
                </td>
                <td> 
                    <input type="text" disabled="true" value="<?php echo $business->business_daily_average_sales;?>"/>
                </td>
                <td> 
                    <input type="text" disabled="true" value="<?php echo $business->business_stock_amount;?>"/>
                </td>
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
            <?php foreach ($co_borrowers as $co_borrower) : ?>
            <tr>
                <td>
                    <input type="text" disabled="true" value="<?php echo $co_borrower->first_name; ?>"/>
                </td>
                <td>
                    <input type="text" disabled="true" value="<?php echo $co_borrower->middle_name; ?>"/>
                </td>
                <td>
                    <input type="text" disabled="true" value="<?php echo $co_borrower->last_name; ?>"/>
                </td>
                <td>
                    <input type="text" disabled="true" value="<?php echo $co_borrower->address; ?>"/>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>	
</fieldset>
<fieldset id="collateral">
    <legend>Collateral</legend>
        <table>
            <tr>
                <td>Market and Type</td>
                <td>
                    <input type="text" disabled="true" value="<?php echo $collateral->make_and_type; ?>"/>
                </td>
                <td>Brand</td>
                <td>
                    <input type="text" disabled="true" value="<?php echo $collateral->brand; ?>"/>
                </td>
                <td>Model</td>
                <td>
                    <input type="text" disabled="true" value="<?php echo $collateral->model_number; ?>"/>
                </td>
            </tr>
            <tr>
                <td>Area (sq.m)</td>
                <td>
                    <input type="text" disabled="true" value="<?php echo $collateral->area; ?>"/>
                </td>
                <td>Location</td>	
                <td>
                    <input type="text" disabled="true" value="<?php echo $collateral->location; ?>"/>
                </td>
                <td>F.M Value</td>
                <td>
                    <input type="text" disabled="true" value="<?php echo $collateral->fair_market_value; ?>"/>
                </td>
            </tr>	
            <tr>
                <td>General Condition</td>
                <td>
                    <input type="text" disabled="true" value="<?php echo $collateral->general_condition; ?>"/>
                </td>
                <td>Total Fair Market Value</td>	
                <td>
                    <input type="text" disabled="true"/>
                </td>
                <td>Total Appraised Value</td>
                <td>
                    <input type="text" disabled="true" value="<?php echo $appraisal->total_appraisal_value; ?>"/>
                </td>
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
            <td><input type="text" disabled="true"></input></td>
            <td><input type="text" disabled="true"></input></td>
            <td><input type="text" disabled="true"></input></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="text" disabled="true"></input></td>
            <td><input type="text" disabled="true"></input></td>
            <td><input type="text" disabled="true"></input></td>
        </tr>
    </table>	
</fieldset>

