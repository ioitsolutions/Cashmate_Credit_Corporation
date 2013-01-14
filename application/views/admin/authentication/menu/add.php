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
					<td>Description:</td>
					<td class="edit_align"><input type="text" class="fields" name="Description"/></td>
				</tr>
                                <tr>
					<td class="edit_align">
						<input type="submit" value="Add"/>
						<input type="button" value="Cancel"/>
					</td>
				</tr>
			</table>
		</div>
                   
    </fieldset>
</form>