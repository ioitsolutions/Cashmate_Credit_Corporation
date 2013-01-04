<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
    <?php $errors = isset($errors) ? $errors : array(); ?>
    <?php echo Form::open('loan_type/save/'. $rate->id); ?>	
	<div id="edit_body">
		<div id="edit_header">
			<p><?php echo $title_form; ?></p>
		</div>
		<table class="edit_content_table">
                        <tr>
                            <td></td>
                            <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'class');?></span></td>
                        </tr>
			<tr>
				<td><p>Class</p></td>
				<td style="text-align:right">
                                    <input type="text" name="class" value="<?php echo $rate->class; ?>"/>
                                </td>
			</tr>
                        <tr>
                            <td></td>
                            <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'description');?></span></td>
                        </tr>
			<tr>
				<td><p>Description</p></td>
				<td width=177 style="text-align:right">
                                    <input type="text" name="description" value="<?php echo $rate->description; ?>"/>
                                </td>
			</tr>
                        <tr>
                            <td></td>
                            <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'value');?></span></td>
                        </tr>
			<tr>
				<td><p>Value</p></td>
				<td style="text-align:right">
                                    <input type="text" name="value" value="<?php echo $rate->value; ?>"/>
                                </td>
			</tr>
		</table>
		<input type ="submit" value="<?php echo $btn_title; ?>"/>
		<input type ="button" value="Cancel" onclick="history.back();" />			
	</div>
    <?php echo Form::hidden('task', $task) ?>
    <?php echo Form::close(); ?>
</div>