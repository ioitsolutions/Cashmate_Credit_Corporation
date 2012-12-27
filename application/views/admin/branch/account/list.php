<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
	<div>
		<div id="list_display">
			<fieldset>
				<legend>List of Bank Accounts</legend>
                                <?php echo HTML::anchor("/branch_account/create", "Add Bank Account"); ?>
				<table id="branch_table_display" cellspacing="0">
					<tr>
						<th>Branch Name</th>
						<th>Bank Account No.</th>
						<th>Bank Name</th>
						<th>Default Date</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
                                        <?php foreach($banks as $bank): ?>
					<tr>
						<td class="table_content"><?php echo $bank->branch->name; ?></td>
						<td class="table_content"><?php echo $bank->account_no; ?></td>
						<td class="table_content"><?php echo $bank->name; ?></td>
                                                <td class="table_content"><?php echo date('M d, Y',  strtotime($bank->effectivity_date)); ?></td>
						<td class="table_content"><?php echo HTML::anchor("/branch_account/update/".$bank->id, "Edit"); ?></td>
						<td class="table_content"><?php echo HTML::anchor("/branch_account/delete/".$bank->id, "Delete"); ?></td>
					</tr>
                                        <?php endforeach; ?>
				</table>
                                <?php echo $pagination; ?>
			</fieldset>
		</div>
	</div>		
</div>		