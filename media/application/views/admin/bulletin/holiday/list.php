<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
    <div id="list_display">				
        <fieldset id="borrower">
            <legend>List of Holidays</legend>                   
            <?php echo HTML::anchor("/bulletin_holiday/create", "Add Holiday"); ?>              
            <table id="branch_table_display" cellspacing="0">
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($holidays as $holiday): ?>
                <tr>
                    <td class="table_content"><?php echo $holiday->title; ?></td>
                    <td class="table_content"><?php echo date('M d',strtotime($holiday->date)); ?></td>
                    <td class="table_content"><?php echo $holiday->description; ?></td>
                    <td class="table_content"><?php echo HTML::anchor("/bulletin_holiday/update/".$holiday->id, "Edit"); ?></td>
                    <td class="table_content"><?php echo HTML::anchor("/bulletin_holiday/delete/".$holiday->id, "Delete"); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php echo $pagination; ?>
        </fieldset>
    </div>
</div>