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
                    <td>Menu ID:</td>
                    <td class="edit_align"><input type="text" name="menu_id" disabled class="fields" value="<?php echo $menu->id; ?>"/></td>
                    </tr>
                <tr>
                    <td>Menu Name:</td>
                    <td class="edit_align"><input type="text" name="menu" class="fields" value="<?php echo $menu->menu_name; ?>"/></td>
                </tr>
                <tr>
                    <td></td><td><label for="menu" class="error"/><?php echo Arr::get($errors, 'menu'); ?></td>
                </tr>
		<tr>
                    <td>Description:</td>
                    <td class="edit_align"><input type="text" name="description" class="fields" value="<?php echo $menu->description; ?>"/></td>
                </tr>
                <tr>
                    <td></td><td><label for="description" class="error"/><?php echo Arr::get($errors, 'description'); ?></td>
                </tr>
                <tr>
                    <td>Date Modified:</td>
                    <td class="edit_align"><input type="text" class="fields datepicker" name="calendar" value="<?php echo $menu->date_modified; ?>"/></td>
                </tr>
                <tr>
                    <td></td><td><label for="calendar" class="error"/><?php echo Arr::get($errors, 'calendar'); ?></td>
                </tr>
            </table><br/>
            <input type="submit" value="Edit"/>
            <input type="button" value="Cancel"onClick="window.location.href='http://localhost/Cashmate_Credit_Corporation/authentication_menu/list'"/>
	</div>
    </fieldset>
</form>