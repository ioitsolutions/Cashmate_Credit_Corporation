<?php defined('SYSPATH') or die('No direct access allowed.');?>
<form id="form" method="get">	
    <?php echo Form::open('authentication_privilege/update'); ?>
	<div id="list_display">
		<fieldset>
			<legend>List of Default Roles and Privileges</legend>
			<table id="branch_table_display" cellspacing="0">
				<tr>
					<th style="width:105px;">Role Name</th>
					<th style="width:150px;">Menu Name</th>
					<th style="width:50px;;">View</th>
					<th style="width:50px;">Save/Create</th>
					<th style="width:50px;">Edit</th>
					<th style="width:50px;">Post</th>
					<th style="width:50px;">Print</th>
                                        <th style="width:30px;"></th>
				</tr></table>
                                <?php foreach($roles as $role){?>
                                <table id="branch_table_display" cellspacing="0">
                                    <tr>
                                        <td class="table_content"  onclick ="togglePrivilege('<?php echo str_replace (" ", "", $role->name ) ?>')" style="color:white;background-color:#339900;font-weight:bold;width:100px;"><?php echo $role->name;?></td>
                                        <td class="table_content"  style="background-color:#339900;width:150px;"></td>
                                        <td class="table_content"  style="background-color:#339900;width:50px;"></td>
                                        <td class="table_content"  style="background-color:#339900;width:50px;"></td>
                                        <td class="table_content"  style="background-color:#339900;width:50px;"></td>
                                        <td class="table_content"  style="background-color:#339900;width:50px;"></td>
                                        <td class="table_content"  style="background-color:#339900;width:50px;"></td>
                                        <td class="table_content"  style="background-color:#339900;width:50px;"></td>
                                    </tr></table>
                        <div id="<?php echo str_replace (" ", "", $role->name );?>" onclick ="togglePrivilege(this.id)" for='menu' style='display:none;width:945px;'><table id="branch_table_display" cellspacing="0">
                                    <?php foreach($menus as $menu){
                                        $view="";
                                        $save="";
                                        $edit="";
                                        $print="";
                                        $post="";
                                        $privileges=ORM::factory('menuprivilege')->where('role_id','=',$role->id)->where('menu_id','=',$menu->id)->find_all('privilege_id','status');
                                        foreach($privileges as $privilege)
                                        {
                                            if($privilege->privilege_id==1 && $privilege->status==0)
                                                $view="checked";
                                            if($privilege->privilege_id==2 && $privilege->status==0)
                                                $save="checked";
                                            if($privilege->privilege_id==3 && $privilege->status==0)
                                                $edit="checked";
                                            if($privilege->privilege_id==4 && $privilege->status==0)
                                                $print="checked";
                                            if($privilege->privilege_id==5 && $privilege->status==0)
                                                $post="checked";
                                        }
                                        $link='/Cashmate_Credit_Corporation/authentication_privilege/update/'.$role->id." ".$menu->id;
                                        $link2=HTML::anchor("/authentication_privilege/clear/".$role->id." ".$menu->id, "Clear");
                                        echo"<tr id='menu'>
                                            <td class='table_content' style='width:100px;'></td>
                                            <td class='table_content' style='width:150px;'>$menu->menu_name</td>
                                            <td class='table_content' style='width:45px;'><input type='checkbox' $view value='$link 1' onClick='if (this.checked) { window.location = this.value;}' onClick='if (!this.checked) {window.location = this.value 1;}' id='view'/></td>
                                            <td class='table_content' style='width:70px;'><input type='checkbox' $save value='$link 2' onClick='if (this.checked) { window.location = this.value;}' id='save'/></td>
                                            <td class='table_content' style='width:50px;'><input type='checkbox' $edit value='$link 3' onClick='if (this.checked) { window.location = this.value;}' id='edit'/></td>
                                            <td class='table_content' style='width:50px;'><input type='checkbox' $print value='$link 4' onClick='if (this.checked) { window.location = this.value;}' id='print'/></td>
                                            <td class='table_content' style='width:50px;'><input type='checkbox' $post value='$link 5' onClick='if (this.checked) { window.location = this.value;}' id='post'/></td>
                                            <td class='table_content' style='width:20px;'><a href='clear'>$link2</a></td>
                                        </tr>";
                                     }?> 
                                     </table></div>
                                <?php }?>                                
			</table>
		</fieldset>
	</div>
</form>