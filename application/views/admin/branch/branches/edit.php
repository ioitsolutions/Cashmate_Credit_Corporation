<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
	<div id="edit_body">
		<div id="edit_header">
			<p><?php echo $title_form; ?></p>
		</div>
		<table class="edit_content_table">
			<tr>
				<td><p>Branch Code</p></td>
				<td style="text-align:right"><input type="text"></input></td>
			</tr>
			<tr>
				<td><p>Branch Name</p></td>
				<td width=177 style="text-align:right"><input type="text"></input></td>
			</tr>
			<tr>
				<td><p>Web Status</p></td>
				<td style="text-align:right"><input type="checkbox"></td>
			</tr>
			<tr>
				<td><p>Minimum Quota</p></td>
				<td style="text-align:right"><input type="text"></input></td>
			</tr>
			<tr>
				<td><p>Default Date</p></td>
				<td style="text-align:right"><input type="text"></input></td>
			</tr>
			<tr>
				<td><p>Change Password</p></td>
				<td style="text-align:right"><input type="text"></input></td>
			</tr>
		</table>
		<input type ="button" value="<?php echo $title_form; ?>"/>
		<input type ="button" value="Cancel"/>			
	</div>
</div>