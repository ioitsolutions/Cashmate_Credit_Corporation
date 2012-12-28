<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">
	<div id="edit_body">
		<div id="edit_header">
			<p><?php echo $title_form; ?></p>
		</div>
		<table class="edit_content_table">
			<tr>
				<td><p>Branch Code</p></td>
				<td style="text-align:right">
                                    <input type="text" name="code" value="<?php echo $branch->code; ?>"/>
                                </td>
			</tr>
			<tr>
				<td><p>Branch Name</p></td>
				<td width=177 style="text-align:right">
                                    <input type="text" name="name" value="<?php echo $branch->name; ?>"/>
                                </td>
			</tr>
			<tr>
				<td><p>Web Status</p></td>
				<td style="text-align:right">
                                    <?php echo Form::checkbox('web_status', 1, (bool) $branch->web_status); ?>
                                </td>
			</tr>
			<tr>
				<td><p>Minimum Quota</p></td>
				<td style="text-align:right">
                                    <input type="text" name="minimum_quota" value="<?php echo $branch->minimum_quota; ?>"/>
                                </td>
			</tr>
			<tr>
				<td><p>Default Date</p></td>
				<td style="text-align:right">
                                    <input type="text" name="effectivity_date" value="<?php echo $branch->effectivity_date; ?>"/>
                                </td>
			</tr>
			<tr>
				<td><p>Change Password</p></td>
				<td style="text-align:right">
                                    <input type="text" name="password" value="<?php echo $branch->password; ?>"/>
                                </td>
			</tr>
		</table>
		<input type ="button" value="<?php echo $btn_title; ?>"/>
		<input type ="button" value="Cancel"/>			
	</div>
</div>