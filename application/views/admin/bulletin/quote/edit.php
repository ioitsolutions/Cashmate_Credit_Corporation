<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
    <?php $errors = isset($errors) ? $errors : array(); ?>
    <?php echo Form::open('bulletin_quote/save/'. $quote->id); ?>
    <fieldset id="borrower">
        <legend><?php echo $title_form; ?></legend>
        <div id="edit_body">
			<div id="edit_header">
				<p><?php echo $title_form; ?></p>
			</div>
			<table class="edit_content_table">
                                <tr>
                                    <td></td>
                                    <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'value');?></span></td>
                                </tr>
				<tr>
					<td>Quote Value: </td>
					<td class="edit_align"><input type="text" name="value" value="<?php echo $quote->value; ?>"/></td>
				</tr>
                                <tr>
                                    <td></td>
                                    <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'explanation');?></span></td>
                                </tr>
				<tr>
					<td>Quote Explanation: </td>
					<td class="edit_align">
                                            <textarea class="textarea_edit" name="explanation"><?php echo $quote->explanation; ?></textarea>
                                        </td>
				</tr>
                                <tr>
                                    <td></td>
                                    <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'expiration_date');?></span></td>
                                </tr>
				<tr>
					<td>Expiration Date:</td>
					<td class="edit_align"><input class="datepicker"type="text" name="expiration_date" value="<?php echo $quote->expiration_date; ?>"/></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="<?php echo $btn_title; ?>"/>
						<input type="button" value="Cancel" />
					</td>
				</tr>
			</table>
		</div>
                <?php echo Form::hidden('task', $task) ?>
                <?php echo form::close(); ?>
	</fieldset>                    
</div>