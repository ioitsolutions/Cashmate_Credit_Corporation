<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
			
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
						<select class="selectbox_edit">
							<option value="">Alaminos</option>
							<option value="">Angeles</option>
							<option value="">Dagupan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Title:</td>
					<td class="edit_align"><input type="text" name=""/></td>
				</tr>
				<tr>
					<td>Content:</td>
					<td class="edit_align"><textarea class="textarea_edit"></textarea></td>
				</tr>
				<tr>
					<td>Expiration Date:</td>
					<td class="edit_align"><input type="text" name=""></td>
				</tr>
				<tr>
					<td>Type:</td>
					<td class="edit_align">
						<select>
							<option value="">Specific</option>
							<option value="">Global</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="<?php echo $title_form; ?>"/>
						<input type="submit" value="Cancel">
					</td>
				</tr>
			</table>
		</div>
                   
    </fieldset>
</div>