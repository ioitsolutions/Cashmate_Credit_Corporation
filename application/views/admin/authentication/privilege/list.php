<?php defined('SYSPATH') or die('No direct access allowed.');?>
<form id="form" method="get">	
    <?php echo Form::open('authentication_privilege/update'); ?>
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
                                        <th></th>
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
                                        $link='/Cashmate_Credit_Corporation/authentication_privilege/update/'.$role->id." ".$menu->id;
                                        $link2=HTML::anchor("/authentication_privilege/clear/".$role->id." ".$menu->id, "Clear");
                                        echo"<tr>
                                            <td class='table_content'></td>
                                            <td class='table_content'>$menu->menu_name</td>
                                            <td class='table_content'><input type='checkbox' $view value='$link 1' onClick='if (this.checked) { window.location = this.value;}' onClick='if (!this.checked) {window.location = this.value 1;}' id='view'/></td>
                                            <td class='table_content'><input type='checkbox' $save value='$link 2' onClick='if (this.checked) { window.location = this.value;}' id='save'/></td>
                                            <td class='table_content'><input type='checkbox' $edit value='$link 3' onClick='if (this.checked) { window.location = this.value;}' id='edit'/></td>
                                            <td class='table_content'><input type='checkbox' $print value='$link 4' onClick='if (this.checked) { window.location = this.value;}' id='print'/></td>
                                            <td class='table_content'><input type='checkbox' $post value='$link 5' onClick='if (this.checked) { window.location = this.value;}' id='post'/></td>
                                            <td class='table_content'><a href='clear'>$link2</a></td>
                                        </tr>";
                                     }?>            
                                <?php }?>                                
			</table>
		</fieldset>
	</div>
</form>