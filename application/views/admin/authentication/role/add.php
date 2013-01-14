<?php defined('SYSPATH') or die('No direct access allowed.');?>
<form id="form" method="post">	
    <?php echo Form::open('authentication_role/create'); ?>
    <fieldset id="privilege">
        <legend>Add Role Privileges</legend>
        <div id="edit_body">
			<div id="edit_header">
				<p>Add Role Privileges</p>
			</div>
			<table class="edit_content_table">
				<tr>
					<td>Role Name:</td>
					<td class="edit_align" id="role">
                                            <input type="text" class="fields" name="role"/>
                                        </td>
				</tr>
                                <tr>
                                    <td>Status:</td>
                                    <td class="edit_align" id="status">
                                        <select class="fields">
                                            <option value="0">Visible</option>
                                            <option value="1">Hidden</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
					<td>Date Created:</td>
					<td class="edit_align"><input type="text" class="fields" id="datepicker" name="calendar"/></td>
                                        <script>
                                            $(function() {
                                            $( "#datepicker" ).datepicker();
                                            });
                                        </script>
				</tr>
                                <tr>
                                    <td>Role Password:</td>
                                    <td class="edit_align"><input type="password" class="fields" name="password"/></td>
                                </tr>
                                <tr>
                                    <td>Re-type Role Password:</td>
                                    <td class="edit_align"><input type="password" class="fields" name="confirm_password"/></td>
                                </tr>
			</table><br/>
                        <input type="submit" value="Add"/>
                        <input type="button" value="Cancel"/>
		</div> 
    </fieldset>
</form>