<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
				
	<div>
            <ul id="nav">
                <li><?php echo html::anchor('bulletin_memo_employee', 'Employee Memos',array('style' => 'background-color: #ffffff;padding: 10px 20px;text-decoration: none;line-height: 2.8em;color:#339900')) ?></li>
                <li><?php echo html::anchor('bulletin_memo_branch', 'Branch Memos') ?></li>
            </ul>
	</div>
    <fieldset id="borrower">
        <legend>Add Employee Memo</legend>
		<div id="edit_body">
			<div id="edit_header">
				<p>Edit Record</p>
			</div>
			<table class="edit_content_table">
				<tr>
					<td>Type:</td>
					<td class="edit_align">
						<select class="selectbox_edit">
							<option value="">Specific</option>
							<option value="">Global</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Employee: </td>
					<td class="edit_align">
						<select class="selectbox_edit">
							<option value=""></option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Title:</td>
					<td class="edit_align"><input type="text" name=""></td>
				</tr>
				<tr>
					<td>Content: </td>
					<td class="edit_align"><textarea class="textarea_edit"></textarea></td>
				</tr>
				<tr>
					<td>Expiration Date:</td>
					<td class="edit_align"><input type="text" name=""></td>
				</tr>
				<tr>
					<td></td>
					<td class="edit_align">
						<input type="submit" value="Add"/>
						<input type="submit" value="Cancel">
					</td>
				</tr>
			</table>
		</div>
                   
    </fieldset>
</div>
