<?php defined('SYSPATH') or die('No direct access allowed.');?>

<form id="form"	method="post">	
    <?php echo Form::open('authentication_menu/create/'); ?>
    <fieldset id="borrower">
        <legend>Add Employee</legend>
        <div id="edit_body">
			<div id="edit_header">
				<p>Add Employee Record</p>
			</div>
			<table class="edit_content_table">
				<tr>
					<td>Menu:</td>
					<td class="edit_align"><input type="text" class="fields" name="menu"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="menu" class="error"/><?php echo Arr::get($errors, 'menu'); ?></td>
                                </tr>
				<tr>
					<td>Description:</td>
					<td class="edit_align"><input type="text" class="fields" name="description"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="description" class="error"/><?php echo Arr::get($errors, 'description'); ?></td>
                                </tr>
                                <tr>
					<td>Date Created:</td>
					<td class="edit_align"><input type="text" id="datepicker" class="fields datepicker" name="calendar"/></td>
                                </tr>
                                <tr>
                                    <td></td><td><label for="calendar" class="error"/><?php echo Arr::get($errors, 'calendar'); ?></td>
                                </tr>
                                <tr>
					<td class="edit_align">
						<input type="submit" value="Add"/>
						<input type="button" value="Cancel"onClick="window.location.href='http://localhost/Cashmate_Credit_Corporation/authentication_menu/list'"/>
					</td>
				</tr>
			</table>
		</div>
                   
    </fieldset>
</form>