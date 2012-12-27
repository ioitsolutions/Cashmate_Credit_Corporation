<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
    <div id="list_display">				
        <fieldset id="borrower">
            <legend>List of News</legend>                    
            <?php echo HTML::anchor("bulletin_news/create/", "Add News"); ?>                 
            <table id="branch_table_display" cellspacing="0">
                <tr>
                    <th>Branch</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Type</th>
                    <th>Date Posted</th>
                    <th>Creator</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($news as $data) :?>
                <tr>
                    <td class="table_content"><?php echo $data->branch->name; ?></td>
                    <td class="table_content"><?php echo $data->title ;?></td>
                    <td class="table_content"><?php echo $data->description ;?></td>
                    <td class="table_content"><?php if ($data->type == 1) echo 'Specific'; else echo 'Global'; ?></td>
                    <td class="table_content"><?php echo date('M d, Y',strtotime($data->date_created)) ;?></td>
                    <td class="table_content"><?php echo $data->user_created ;?></td>
                    <td class="table_content"><?php echo HTML::anchor("bulletin_news/update/".$data->id, "Edit"); ?></td>
                    <td class="table_content"><?php echo HTML::anchor("bulletin_news/delete/".$data->id, "Delete"); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php echo $pagination; ?>
        </fieldset>
    </div>
</div>