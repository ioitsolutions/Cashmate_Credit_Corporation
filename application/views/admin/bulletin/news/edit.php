<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
    <?php $errors = isset($errors) ? $errors : array(); ?>
    <?php echo Form::open('bulletin_news/save/'. $news->id); ?>	
    <fieldset id="borrower">
        <legend><?php echo $title_form; ?></legend>
		<div id="edit_body">
			<div id="edit_header">
				<p><?php echo $title_form; ?></p>
			</div>
			<table class="edit_content_table">
				<tr>
					<td>Branch: </td>
					<td class="edit_align">
                                            <?php echo Form::select('branch_id', $branches, $news->branch_id,array('class' => 'selectbox_edit')); ?>
					</td>
				</tr>
                                <tr>
                                    <td></td>
                                    <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'title');?></span></td>
                                </tr>
				<tr>
					<td>Title:</td>
					<td class="edit_align"><input type="text" name="title" value="<?php echo $news->title; ?>"/></td>
				</tr>
                                <tr>
                                    <td></td>
                                    <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'description');?></span></td>
                                </tr>
				<tr>
					<td>Content:</td>
					<td class="edit_align"><textarea class="textarea_edit" name="description"><?php echo $news->description; ?></textarea></td>
				</tr>
                                <tr>
                                    <td></td>
                                    <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'expiration_date');?></span></td>
                                </tr>
				<tr>
					<td>Expiration Date:</td>
					<td class="edit_align"><input type="text" class="datepicker" name="expiration_date" value="<?php echo $news->expiration_date; ?>"/></td>
				</tr>
				<tr>
					<td>Type:</td>
					<td class="edit_align">
                                            <?php echo Form::select('type', array('1' => 'Specific','2' => 'Global'), $news->type,array('class' => 'selectbox_edit')); ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="<?php echo $btn_title; ?>"/>
						<input type="button" value="Cancel" onclick="history.back();" />
					</td>
				</tr>
			</table>
		</div>
                   
    </fieldset>
    <?php echo Form::hidden('task', $task) ?>
    <?php echo Form::close(); ?>
</div>