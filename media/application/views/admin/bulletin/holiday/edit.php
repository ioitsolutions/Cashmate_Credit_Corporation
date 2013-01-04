<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
    <?php $errors = isset($errors) ? $errors : array(); ?>
    <?php echo Form::open('bulletin_holiday/save/'. $holiday->id); ?>	
    <fieldset id="borrower">
        <legend><?php echo $title_form; ?></legend>
        <div id="edit_body">
			<div id="edit_header">
				<p><?php echo $title_form; ?></p>
			</div>
			<table class="edit_content_table">
                                <tr>
                                        <td></td>
                                        <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'title');?></span></td>
                                </tr>
				<tr>
					<td>Title:</td>
					<td class="edit_align"><input type="text" name="title" value="<?php echo $holiday->title; ?>"/></td>
				</tr>
                                <tr>
                                        <td></td>
                                        <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'date');?></span></td>
                                </tr>
                                <tr>
					<td>Date:</td>
					<td class="edit_align"><input type="text" name="date" class="datepicker" value="<?php echo $holiday->date; ?>"/></td>
				</tr>
                                <tr>
                                        <td></td>
                                        <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'description');?></span></td>
                                </tr>
				<tr>
					<td>Description:</td>
					<td class="edit_align"><textarea class="textarea_edit" name="description"><?php echo $holiday->description; ?></textarea></td>
                                </tr>
				<tr>
					<td></td>
					<td class="edit_align">
						<input type="submit" value="<?php echo $btn_title; ?>"/>
						<input type="button" value="Cancel" />
					</td>
				</tr>
			</table>
		</div>
                   
    </fieldset>
     <?php echo Form::hidden('task', $task) ?>
    <?php echo Form::close(); ?>
</div>