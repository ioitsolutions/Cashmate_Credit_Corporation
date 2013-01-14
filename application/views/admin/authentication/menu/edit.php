<?php defined('SYSPATH') or die('No direct access allowed.');?>
<form id="form" method="post">
    <?php echo Form::open('authentication_menu/update'); ?>
    <fieldset id="borrower">
        <legend>Edit Menu</legend>
        <div id="edit_body">
            <div id="edit_header">
		<p>Edit Menu Record</p>
            </div>
            <table class="edit_content_table">
                <tr>
                    <td>Menu Name:</td>
                    <td class="edit_align"><input type="text" name="menu_id" disabled class="fields" value="<?php echo $menu->id; ?>"/></td>
		</tr>
                <tr>
                    <td>Menu Name:</td>
                    <td class="edit_align"><input type="text" name="menu_name" class="fields" value="<?php echo $menu->menu_name; ?>"/></td>
		</tr>
		<tr>
                    <td>Description:</td>
                    <td class="edit_align"><input type="text" name="menu_description" class="fields" value="<?php echo $menu->description; ?>"/></td>
		</tr>
            </table><br/>
            <input type="submit" value="Edit"/>
            <input type="button" value="Cancel"/>
	</div>
    </fieldset>
</form>