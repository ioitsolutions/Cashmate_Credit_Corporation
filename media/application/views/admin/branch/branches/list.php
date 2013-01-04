<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">	
	<div id="list_display">
		<fieldset>
			<legend>List of Branches</legend>
                        <?php echo HTML::anchor("/branch_branches/create", "Add Branch"); ?>
			<table id="branch_table_display" cellspacing="0">
				<tr>
					<th><input type="checkbox"></th>
					<th>Branch Code</th>
					<th>Branch Name</th>
					<th>Web Status</th>
					<th>Minimum Quota</th>
					<th>Default Date</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
                                <?php foreach($branches as $branch) : ?>
				<tr>
					<td class="table_content"><input type="checkbox"/></td>
					<td class="table_content"><?php echo $branch->code; ?></td>
					<td class="table_content"><?php echo $branch->name; ?></td>
					<td class="table_content"><?php if($branch->web_status == 1) echo 'Online'; else echo 'Offline'; ?></td>
					<td class="table_content"><?php echo number_format($branch->minimum_quota); ?></td>
					<td class="table_content"><?php echo date('M d, Y',strtotime($branch->effectivity_date)); ?></td>
					<td class="table_content"><?php echo HTML::anchor("/branch_branches/update/".$branch->id, "Edit"); ?></td>
					<td class="table_content"><?php echo HTML::anchor("/branch_branches/delete/".$branch->id, "Delete"); ?></td>
				</tr>
                                <?php endforeach; ?>
			</table>
                        <?php echo $pagination; ?>
		</fieldset>
	</div>
</div>