<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
	<div id="list_display">
		<div>
			<ul id="nav">
				<li><?php echo html::anchor('bulletin_memo_employee', 'Employee Memos',array('style' => 'background-color: #ffffff;padding: 10px 20px;text-decoration: none;line-height: 2.8em;color:#339900')) ?></li>
                                <li><?php echo html::anchor('bulletin_memo_branch', 'Branch Memos') ?></li>
			</ul>
		</div>
		<fieldset id="borrower">
			<legend>List of Employee Memos</legend>
			<?php echo HTML::anchor("/bulletin_memo_employee/create", "Add Employee Memo"); ?>                 
			<table id="branch_table_display" cellspacing="0">
				<tr>
					<th>Employee</th>
					<th>Title</th>
					<th>Content</th>
					<th>Type</th>
					<th>Expiration Date</th>
					<th>Date Posted</th>
					<th>Creator</th>
					<th></th>
					<th></th>
				</tr>
                                <?php foreach ($memos as $memo) : ?>
				<tr>
					<td class="table_content"><?php echo $memo->employee->first_name .' '.$memo->employee->middle_name .' '.$memo->employee->last_name  ;?></td>
					<td class="table_content"><?php echo $memo->title ;?></td>
					<td class="table_content"><?php echo $memo->description ;?></td>
					<td class="table_content"><?php if($memo->type == 1) echo 'Specific'; else echo 'Global';?></td>
					<td class="table_content"><?php echo date('M d, Y',strtotime($memo->expiration_date)) ;?></td>
					<td class="table_content"><?php echo date('M d, Y',strtotime($memo->date_created)) ;?></td>
					<td class="table_content"><?php echo $memo->creator->last_name .', '.$memo->creator->first_name .' '. $memo->creator->middle_name; ?></td>
					<td class="table_content"><?php echo HTML::anchor("bulletin_memo_employee/update/".$memo->id, "Edit"); ?></td>
					<td class="table_content"><?php echo HTML::anchor("bulletin_memo_employee/delete/".$memo->id, "Delete"); ?></td>
				</tr>
                                <?php endforeach; ?>
			</table>
                        <?php echo $pagination; ?>
		</fieldset>
	</div>
</div>