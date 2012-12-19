<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">

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
						<select class="selectbox_edit">
							<option value="">Specific</option>
							<option value="">Global</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Branch: </td>
					<td class="edit_align">
						<select class="selectbox_edit">
							<option value="">Alaminos</option>
							<option value="">Angeles</option>
							<option value="">Dagupan</option>
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
						<input type="submit" value="<?php echo $title_form; ?>"/>
						<input type="submit" value="Cancel">
					</td>
				</tr>
			</table>
		</div>
                  
    </fieldset>
</div>