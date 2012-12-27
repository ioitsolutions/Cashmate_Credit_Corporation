<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
	<div id="list_display">
               
        <div>
            <ul id="nav">
                <li><?php echo html::anchor('bulletin_memo_employee', 'Employee Memos') ?></li>
                <li><?php echo html::anchor('bulletin_memo_branch', 'Branch Memos', array('style' => 'background-color: #ffffff;padding: 10px 20px;text-decoration: none;line-height: 2.8em;color:#339900')) ?></li>
            </ul>
		</div>
        <fieldset id="borrower">
            <legend>List of Branch Memos</legend>
                  
            <?php echo HTML::anchor("/bulletin_memo_branch/create", "Add Branch Memo"); ?> 
                   
            <table id="branch_table_display" cellspacing="0">
				<tr>
                    <th>Branch</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Expiration Date</th>
                    <th>Date Posted</th>
                    <th>Creator</th>
                    <th></th>
                    <th></th>
                </tr>
                 <?php foreach($memos as $memo) : ?>
                <tr>
                    <td class="table_content"><?php echo $memo->branch->name; ?></td>
                    <td class="table_content"><?php echo $memo->title ;?></td>
                    <td class="table_content"><?php echo $memo->description ;?></td>
                    <td class="table_content"><?php if($memo->type == 1) echo 'Specific'; else echo 'Global';?></td>
                    <td class="table_content"><?php echo date('M d, Y',strtotime($memo->expiration_date)) ;?></td>
                    <td class="table_content"><?php echo date('M d, Y',strtotime($memo->date_created)) ;?></td>
                    <td class="table_content"><?php echo $memo->user_created ;?></td>
                    <td class="table_content"><?php echo HTML::anchor("/bulletin_memo_branch/update/".$memo->id, "Edit"); ?> </td>
                    <td class="table_content"><?php echo HTML::anchor("/bulletin_memo_branch/delete/".$memo->id, "Delete"); ?> </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php echo $pagination; ?>
        </fieldset>
    </div>
</div>