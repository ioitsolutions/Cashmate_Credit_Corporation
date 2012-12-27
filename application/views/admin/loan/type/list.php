<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
	<div id="list_display">
		<fieldset>
			<legend>Loan Types</legend>
			<table id="branch_table_display" cellspacing="0">
				<tr>
					<th>Class</th>
					<th>Description</th>
					<th>Value</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
                                <?php foreach($rates as $rate) :?>
				<tr>
					<td class="table_content"><?php echo $rate->class;?></td>
					<td class="table_content"><?php echo $rate->description;?></td>
					<td class="table_content"><?php echo $rate->value;?></td>
					<td class="table_content"><?php echo HTML::anchor("/loan_type/update/".$rate->id, "Edit"); ?></td>
					<td class="table_content"><?php echo HTML::anchor("/loan_type/delete/".$rate->id, "Delete"); ?></td>
				</tr>
                                <?php endforeach; ?>
			</table>
                        <?php echo $pagination; ?>
		</fieldset>
	</div>
</div>		