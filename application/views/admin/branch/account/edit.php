<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
    <?php $errors = isset($errors) ? $errors : array(); ?>
    <?php echo Form::open('branch_account/save/'. $bank->id); ?>	
	<div id="edit_body">
		<div id="edit_header">
			<p><?php echo $title_form; ?></p>
		</div>
		<table class="edit_content_table">
			<tr>
				<td><p>Branch Name</p></td>
				<td width=177 style="text-align:right"><?php echo Form::select('branch_id', $branches, $bank->branch_id,array('class' => 'selectbox_edit')); ?></td>
			</tr>
                        <tr>
                            <td></td>
                            <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'account_no');?></span></td>
                        </tr>
			<tr>
				<td><p>Bank Account No.</p></td>
				<td style="text-align:right"><input type="text" name="account_no" value="<?php echo $bank->account_no; ?>"/></td>
			</tr>
                        <tr>
                            <td></td>
                            <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'name');?></span></td>
                        </tr>
			<tr>
				<td><p>Bank Name</p></td>
				<td style="text-align:right"><input type="text" name="name" value="<?php echo $bank->name;?>"/></td>
			</tr>
                        <tr>
                            <td></td>
                            <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'effectivity_date');?></span></td>
                        </tr>
			<tr>
				<td><p>Default Date</p></td>
				<td style="text-align:right"><input class="datepicker" name="effectivity_date" type="text" value="<?php echo $bank->effectivity_date; ?>"/></td>
			</tr>			
		</table>
		<input type ="submit" value="<?php echo $btn_title; ?>"/>
		<input type ="button" value="Cancel"  />		
	</div>
    <?php echo Form::hidden('task', $task) ?>
    <?php echo Form::close(); ?>
</div>	