<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<div id="form">
     <?php $errors = isset($errors) ? $errors : array(); ?>
    <?php echo Form::open('borrower_borrower/save/'. $borrower->id); ?>	
	<div id="edit_body">
		<div id="edit_header">
			<p><?php echo $title_form; ?></p>
		</div>
		<table class="edit_content_table" width=307>
                        <tr>
                            <td></td>
                            <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'first_name');?></span></td>
                        </tr>
			<tr>
				<td><p>First Name</p></td>
				<td style="text-align:right">
                                    <input type="text" name="first_name" value="<?php echo  $borrower->first_name; ?>"/>
                                </td>
			</tr>
                        <tr>
                            <td></td>
                            <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'middle_name');?></span></td>
                        </tr>
			<tr>
				<td><p>Middle Name</p></td>
				<td width=177 style="text-align:right">
                                    <input type="text" name="middle_name" value="<?php echo  $borrower->middle_name; ?>"/>
                                </td>
			</tr>
                        <tr>
                            <td></td>
                            <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'last_name');?></span></td>
                        </tr>
			<tr>
				<td><p>Last Name</p></td>
				<td style="text-align:right">
                                    <input type="text" name="last_name" value="<?php echo  $borrower->last_name; ?>"/>
                                </td>
			</tr>
                        <tr>
                            <td></td>
                            <td class="edit_align"><span class="error"><?php echo Arr::get($errors, 'date_of_birth');?></span></td>
                        </tr>
			<tr>
				<td><p>Date of Birth</p></td>
				<td style="text-align:right">
                                    <input type="text" class ="datepicker" name="date_of_birth" value="<?php echo  $borrower->date_of_birth; ?>"/>
                                </td>
			</tr>
		</table>
		<input type ="submit" value="<?php echo $btn_title; ?>"/>
		<input type ="button" value="Cancel"  />	
	</div>
    <?php echo Form::hidden('task', $task) ?>
    <?php echo Form::close(); ?>
</div>