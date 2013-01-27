<?php defined('SYSPATH') or die('No direct access allowed.');?>
<?php echo Form::open('loan_send/save/'. $loan_request->id); ?>	
<table>
    <tr>
        <td>Loan Request Number: </td>
        <td><?php echo $loan_request->document->document_number;?></td>
    </tr>
    <tr>
        <td>Loan Application Number: </td>
        <td><?php echo $loan_request->loan_application->document->document_number;?></td>
    </tr>
    <tr>
        <td>Borrower ID: </td>
        <td><?php echo $loan_request->loan_application->borrower->id;?></td>
    </tr>
    <tr>
        <td>Borrower Name: </td>
        <td><?php echo $loan_request->loan_application->borrower->last_name.', '.$loan_request->loan_application->borrower->first_name.' '.$loan_request->loan_application->borrower->middle_name;?></td>
    </tr>
    <tr>
        <td>Amount Requested: </td>
        <td><input type="text" name="amount_requested" value="<?php echo $loan_request->amount_requested; ?>"/></td>
    </tr>
    <tr>
        <td>Loan Class:</td>
        <td><input type="text" name="loan_class" value="<?php echo $loan_request->loan_class; ?>"/></td>
    </tr>
    <tr>
        <td>Specific Date:</td>
        <td><input type="text" name="requested_date_release" value="<?php echo $loan_request->requested_date_release; ?>"/></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="submit" value="Save"/>
            <input type="button" name="cancel" value="Cancel"/>
        </td>
    </tr>
</table>
<?php echo Form::close(); ?>

