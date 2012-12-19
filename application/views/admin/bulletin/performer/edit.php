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
					<td>Employee: </td>
					<td class="edit_align">
						<select class="selectbox_edit">
							<option value=""></option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Month:</td>
					<td class="edit_align">
						<select class="selectbox_edit">
							<option value="">January</option>
							<option value="">February</option>
							<option value="">March</option>
							<option value="">April</option>
							<option value="">May</option>
							<option value="">June</option>
							<option value="">July</option>
							<option value="">August</option>
							<option value="">September</option>
							<option value="">October</option>
							<option value="">November</option>
							<option value="">December</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Year: </td>
					<td class="edit_align">
						<select class="selectbox_edit">
							<option value="">2008</option>
							<option value="">2009</option>
							<option value="">2010</option>
							<option value="">2011</option>
							<option value="">2012</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Content:</td>
					<td class="edit_align"><textarea class="textarea_edit"></textarea></td>
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
