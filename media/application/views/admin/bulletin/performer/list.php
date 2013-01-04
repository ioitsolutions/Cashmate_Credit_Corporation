<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
    <div id="list_display">			
        <fieldset id="borrower">
            <legend>List of Top Performers</legend>                 
                <?php echo HTML::anchor("/bulletin_performer/create", "Add Top Performer"); ?>                
                <table id="branch_table_display" cellspacing="0">
                        <tr>
                                <th>Employee</th>
                                <th>Month</th>
                                <th>Year</th>
                                <th>Content</th>
                                <th>Date Posted</th>
                                <th>Creator</th>
                                <th></th>
                                <th></th>
                        </tr>
                        <?php foreach ($performers as $performer) : ?>
                        <tr>
                                <td class="table_content"><?php echo $performer->employee->last_name .', '.$performer->employee->first_name .' '. $performer->employee->middle_name; ?></td>
                                <td class="table_content"><?php echo date("F", mktime(0, 0, 0, $performer->month, 10)); ?></td>
                                <td class="table_content"><?php echo $performer->year; ?></td>
                                <td class="table_content"><?php echo $performer->content; ?></td>
                                <td class="table_content"><?php echo date("M d, Y",strtotime($performer->date_created)); ?></td>
                                <td class="table_content"><?php echo $performer->creator->last_name .', '.$performer->creator->first_name .' '. $performer->creator->middle_name; ?></td>
                                <td class="table_content"><?php echo HTML::anchor("bulletin_performer/update/".$performer->id, "Edit"); ?></td>
                                <td class="table_content"><?php echo HTML::anchor("bulletin_performer/delete/".$performer->id, "Delete"); ?></td>
                        </tr> 
                        <?php endforeach; ?>
                </table>
                <?php echo $pagination; ?>
        </fieldset>
    </div>
</div>