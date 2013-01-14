<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">				
	<div id="list_display">
		<fieldset>
			<legend>List of Menus</legend>
			<a href="create">Add a New Menu</a> 
			<table id="branch_table_display" cellspacing="0">
				<tr>
                                        <th>Menu ID</th>
					<th>Menu Name</th>
					<th>Description</th>
                                        <th></th>
                                        <th></th>
				</tr>
                                <?php foreach($menus as $menu){?>
                                    <tr>
                                        <td class="table_content"><?php echo $menu->id;?></td>
					<td class="table_content"><?php echo $menu->menu_name;?></td>
					<td class="table_content"><?php echo $menu->description;?></td>
                                        <td class="table_content"><a href="update"><?php echo HTML::anchor("/authentication_menu/update/".$menu->id, "Edit"); ?></a></td>
                                        <td class="table_content"><a href="delete"><?php echo HTML::anchor("/authentication_menu/delete/".$menu->id, "Delete"); ?></a></td>
                                    </tr>
                                <?php }?>
				
			</table>
		</fieldset>
	</div>
</div>