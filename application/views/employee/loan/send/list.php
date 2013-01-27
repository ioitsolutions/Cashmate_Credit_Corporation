<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<?php echo Form::open('loan_send/post',array('id' => 'frmRequest')); ?>
<div id="divscroll">
    <fieldset>
        <legend>List of Loan Request for Sending</legend>
        <table>
            <tr>
                <th><input type="checkbox"></th>
                <th>Loan Request Number</th>
                <th>Loan Application Number</th>
                <th>Borrower ID</th>
                <th>Borrower Name</th>
                <th>Present Address</th>
                <th>Area Code</th>
                <th>Amount Requested</th>
                <th>Loan Class</th>
                <th>Loan Type</th>
                <th>Loan Term</th>
                <th>Specific Date</th>
                <th></th>
            </tr>
                <?php foreach($loan_requests as $loan_request): ?>
            <tr>
                    <td><?php echo Form::checkbox('posted[]', $loan_request->id)?></td>
                    <td><?php echo $loan_request->lr_number; ?></td>
                    <td><?php echo $loan_request->la_number; ?></td>
                    <td><?php echo $loan_request->borrower_id; ?></td>
                    <td><?php echo $loan_request->fullname; ?></td>
                    <td><?php echo $loan_request->address; ?></td>
                    <td><?php echo $loan_request->code; ?></td>
                    <td><?php echo $loan_request->amount_requested; ?></td>
                    <td><?php echo $loan_request->loan_class; ?></td>
                    <td><?php echo $loan_request->loan_type; ?></td>
                    <td><?php echo $loan_request->loan_term; ?></td>
                    <td><?php echo $loan_request->requested_date_release; ?></td>
                    <td><?php echo HTML::anchor("loan_send/update/".$loan_request->id, "Edit"); ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td class="ui-state-default ui-corner-all" colspan="13">
                    <div><span id="deleteRequest" class="ui-icon ui-icon-trash"></span></div
                </td>
            </tr>
        </table>
        <?php echo $pagination; ?>
    </fieldset>
</div><!--End Id form-->
<input type="submit" value="Post for Approval"/>
<?php echo Form::open('loan_send/save'); ?>

<div id="confirmationDialog" title="Delete Loan Request"></div>