<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
    <?php $errors = isset($errors) ? $errors : array(); ?>
    <?php echo Form::open('bulletin_memo_branch/save/'. $memo->id); ?>	
	<div>
            <ul id="nav">
                <li><?php echo html::anchor('bulletin_memo_employee', 'Employee Memos') ?></li>
                <li><?php echo html::anchor('bulletin_memo_branch', 'Branch Memos', array('style' => 'background-color: #ffffff;padding: 10px 20px;text-decoration: none;line-height: 2.8em;color:#339900')) ?></li>
            </ul>
	</div>
    <fieldset id="borrower">
        <legend><?php echo $title_form; ?></legend>
		<div id="edit_body">
			<div id="edit_header">
				<p><?php echo $title_form; ?></p>
			</div>
			<table class="edit_content_table">
				<tr>
					<td>Type:</td>
					<td class="edit_align">
						<?php echo Form::select('type', array('1' => 'Specific','2' => 'Global'), $memo->type,array('class' => 'selectbox_edit')); ?>
					</td>
				</tr>
				<tr>
					<td>Branch: </td>
					<td class="edit_align">
						<?php echo Form::select('branch_id', $branches, $memo->branch_id,array('class' => 'selectbox_edit')); ?>
					</td>
				</tr>
				<tr>
					<td>Title:</td>
					<td class="edit_align">
                                            <input type="text" name="title" value="<?php echo $memo->title; ?>"/>
                                        </td>
				</tr>
				<tr>
					<td>Content: </td>
					<td class="edit_align">
                                            <textarea name="description" class="textarea_edit"><?php echo $memo->description; ?></textarea>
                                        </td>
				</tr>
				<tr>
					<td>Expiration Date:</td>
					<td class="edit_align">
                                            <input type="text" class="datepicker" name="expiration_date" value="<?php echo $memo->expiration_date; ?>"/>
                                        </td>
				</tr>
				<tr>
					<td></td>
					<td class="edit_align">
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
