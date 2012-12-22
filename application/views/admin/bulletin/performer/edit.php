<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
    <?php $errors = isset($errors) ? $errors : array(); ?>
    <?php echo Form::open('bulletin_performer/save/'. $performer->id); ?>	
	<fieldset id="borrower">
        <legend><?php echo $title_form; ?></legend>
        <div id="edit_body">
			<div id="edit_header">
				<p><?php echo $title_form; ?></p>
			</div>
			<table class="edit_content_table">
				<tr>
					<td>Employee: </td>
					<td class="edit_align">
                                            <?php echo Form::select('employee_id', $employees, $performer->employee_id,array('class' => 'selectbox_edit')); ?>
					</td>
				</tr>
				<tr>
					<td>Month:</td>
					<td class="edit_align">
                                            <?php echo Form::select('month', Date::months(Date::MONTHS_LONG),$performer->month,array('class' => 'selectbox_edit')); ?>
					</td>
				</tr>
				<tr>
					<td>Year: </td>
					<td class="edit_align">
                                            <?php echo Form::select('year', Date::years(2008,date('Y')),$performer->year,array('class' => 'selectbox_edit')); ?>
					</td>
				</tr>
                                <tr>
                                    <td></td>
                                    <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'content');?></span></td>
                                </tr>
				<tr>
					<td>Content:</td>
					<td class="edit_align">
                                            <textarea name="content" class="textarea_edit"><?= $performer->content ?></textarea>
                                        </td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="<?php echo $btn_title; ?>"/>
						<input type="submit" value="Cancel">
					</td>
				</tr>
			</table>
		</div>
                    
    </fieldset>
    <?php echo Form::hidden('task', $task) ?>
    <?php echo Form::close(); ?>
</div>
