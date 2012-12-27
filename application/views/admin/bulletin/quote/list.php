<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
	<div id="list_display">
		<fieldset id="borrower">
            <legend>List of Quotes</legend>             
            <?php echo HTML::anchor("/bulletin_quote/create", "Add Quote"); ?>
            <table id="branch_table_display" cellspacing="0">
                <tr>
                    <th>Quote Value</th>
                    <th>Quote Explanation</th>
                    <th>Expiration Date</th>
                    <th>Date Posted</th>
                    <th>Creator</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($quotes as $quote): ?>
                <tr>
                    <td class="table_content"><?php echo $quote->value;?></td>
                    <td class="table_content"><?php echo $quote->explanation;?></td>
                    <td class="table_content"><?php echo date('M d, Y',strtotime($quote->expiration_date));?></td>
                    <td class="table_content"><?php echo date('M d, Y',strtotime($quote->date_created));?></td>
                    <td class="table_content"><?php echo $quote->user_created;?></td>
                    <td class="table_content"><?php echo HTML::anchor("bulletin_quote/update/".$quote->id, "Edit"); ?></td>
                    <td class="table_content"><?php echo HTML::anchor("bulletin_quote/delete/".$quote->id, "Delete"); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php echo $pagination; ?>
        </fieldset>
    </div>
</div>