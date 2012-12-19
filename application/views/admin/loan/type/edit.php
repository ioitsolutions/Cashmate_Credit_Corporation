<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
	<div id="edit_body">
		<div id="edit_header">
			<p><?php echo $title_form; ?></p>
		</div>
		<table class="edit_content_table">
			<tr>
				<td><p>Class</p></td>
				<td style="text-align:right"><input type="text"></input></td>
			</tr>
			<tr>
				<td><p>Description</p></td>
				<td width=177 style="text-align:right"><input type="text"></input></td>
			</tr>
			<tr>
				<td><p>Value</p></td>
				<td style="text-align:right"><input type="text"></input></td>
			</tr>
		</table>
		<input type ="button" value="<?php echo $title_form; ?>"/>
		<input type ="button" value="Cancel"/>			
	</div>
</div>