<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<div id="form">
	<div id="list_display">
		<fieldset>
			<legend>List of Borrowers</legend>
                        <?php echo HTML::anchor("/borrower_borrower/create", "Add Borrower"); ?>
			<table id="branch_table_display" cellspacing="0">
				<tr>
					<th>Borrower Id</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Last Name</th>
					<th>Date of Birth</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
                                <?php foreach($borrowers as $borrower): ?>
				<tr>
					<td class="table_content"><?php echo $borrower->id ;?></td>
					<td class="table_content"><?php echo $borrower->first_name ;?></td>
					<td class="table_content"><?php echo $borrower->middle_name ;?></td>
					<td class="table_content"><?php echo $borrower->last_name ;?></td>
                                        <td class="table_content"><?php echo date('M d, Y',  strtotime($borrower->date_of_birth)) ;?></td>
					<td class="table_content"><?php echo HTML::anchor("/borrower_borrower/update/".$borrower->id, "Edit"); ?></td>
					<td class="table_content"><?php echo HTML::anchor("/borrower_borrower/delete/".$borrower->id, "Delete"); ?></td>
				</tr>
                                <?php endforeach; ?>
			</table>
                        <?php echo $pagination; ?>
		</fieldset>
	</div>
</div>