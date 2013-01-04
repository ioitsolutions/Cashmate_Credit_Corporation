<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<div id="form">
    <div id="list_display">
        <fieldset id="borrower">
            <legend>List of Announcements</legend>
         
            <?php echo HTML::anchor("/bulletin_announcement/create", "Add Announcement"); ?>
                    
            <table id="branch_table_display" cellspacing="0">
                <tr>
                    <th class="tbl_header">Branch</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($announcements as $announcement) : ?>
                <tr>
                    <td class="table_content"><?php echo $announcement->branch->name; ?></td>
                    <td class="table_content"><?php echo $announcement->title; ?></td>
                    <td class="table_content"><?php echo $announcement->content; ?></td>
                    <td class="table_content"><?php echo $announcement->start_date; ?></td>
                    <td class="table_content"><?php echo $announcement->end_date; ?></td>
                    <td class="table_content"><?php echo HTML::anchor("bulletin_announcement/update/".$announcement->id, "Edit"); ?></td>
                    <td class="table_content"><?php echo HTML::anchor("bulletin_announcement/delete/".$announcement->id, "Delete"); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
           <?php echo $pagination; ?>
        </fieldset>
    </div>
</div>