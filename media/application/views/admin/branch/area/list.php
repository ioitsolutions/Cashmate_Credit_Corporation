<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
    <div id="list_display">
            <fieldset>
                    <legend>List of Areas</legend>
                    <?php echo HTML::anchor("branch_area/create", "Add Area"); ?>
                    <table id = "branch_table_display" cellspacing="0">
                            <tr>
                                    <th>Branch Name</th>
                                    <th>Area Code</th>
                                    <th>Area Name</th>
                                    <th>Default Date</th>
                                    <th></th>
                                    <th></th>
                            </tr>
                            <?php foreach($areas as $area) : ?>
                            <tr>
                                    <td class="table_content"><?php echo $area->branch->name; ?></td>
                                    <td class="table_content"><?php echo $area->code; ?></td>
                                    <td class="table_content"><?php echo $area->name; ?></td>
                                    <td class="table_content"><?php echo date('M d, Y',  strtotime($area->effectivity_date)); ?></td>
                                    <td class="table_content"><?php echo HTML::anchor("branch_area/update/".$area->id, "Edit"); ?></a></td>
                                    <td class="table_content"><?php echo HTML::anchor("branch_area/delete/".$area->id, "Delete"); ?></td>
                            </tr>
                            <?php endforeach; ?>
                    </table>
                    <?php echo $pagination; ?>
            </fieldset>
    </div>
</div>	