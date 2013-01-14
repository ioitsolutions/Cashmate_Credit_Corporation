<?php defined('SYSPATH') or die('No direct access allowed.');?>
<div id="form">				
	<div id="list_display">
		<fieldset>
			<legend>List of Default Roles and Privileges</legend>
			<table id="branch_table_display" cellspacing="0">
				<tr>
					<th>Role Name</th>
					<th>Menu Name</th>
					<th>View</th>
					<th>Save/Create</th>
					<th>Edit</th>
					<th>Post</th>
					<th>Print</th>
				</tr>
                                <?php foreach($roles as $role){?>
                                    <tr>
                                        <td class="table_content"  style="color:white;background-color:#339900;font-weight:bold;"><?php echo $role->name;?></td>
                                        <td class="table_content"  style="background-color:#339900;"></td>
                                        <td class="table_content"  style="background-color:#339900;"></td>
                                        <td class="table_content"  style="background-color:#339900;"></td>
                                        <td class="table_content"  style="background-color:#339900;"></td>
                                        <td class="table_content"  style="background-color:#339900;"></td>
                                        <td class="table_content"  style="background-color:#339900;"></td>
                                    </tr>
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
                                        echo"<tr>
                                            <td class='table_content'></td>
                                            <td class='table_content'>$menu->menu_name</td>
                                            <td class='table_content'><input type='checkbox' onclick='saveChange($role->id,$menu->id,this.value)' $view value='1' name='view' id='view'/></td>
                                            <td class='table_content'><input type='checkbox' onclick='saveChange($role->id,$menu->id,this.value)' $save value='2' name='save' id='save'/></td>
                                            <td class='table_content'><input type='checkbox' onclick='saveChange($role->id,$menu->id,this.value)' $edit value='3' name='edit' id='edit'/></td>
                                            <td class='table_content'><input type='checkbox' onclick='saveChange($role->id,$menu->id,this.value)' $print value='4' name='print' id='print'/></td>
                                            <td class='table_content'><input type='checkbox' onclick='saveChange($role->id,$menu->id,this.value)' $post value='5' name='post' id='post'/></td>
                                        </tr>";
                                     }?>            
                                <?php }?>                                
			</table>
		</fieldset>
	</div>
</div>