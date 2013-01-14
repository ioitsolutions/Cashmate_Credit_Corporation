<?php defined('SYSPATH') or die('No direct access allowed.');
class Controller_Login extends Controller_Template_Login{
    public function action_index(){
        $this->redirect('login/employee');        
    }

    public function action_employee(){
        $this->template->title = "Cashmate Credit Corporation: Log In";
        $this->template->title_content = "Employee: Log In";
        $this->template->sublinks = array();
        $this->template->content = View::factory('login/employee')->set('values', $_POST)->bind('errors', $errors);
        if($_POST)
        {     
            $employees = ORM::factory('employee')->where('id','=',$_POST['id'])->where('employee_password','=',$_POST['employee_password'])->find('id','first_name','middle_name','last_name','branch_id'); 
            try
            { 
                if($employees->id != "" || $employees->id != NULL)
                {
                    $area=ORM::factory('area')->where('id','=',$employees->area_id)->find('code');
                    Cookie::set('id',$employees->id);
                    Cookie::set('area_code',$area->code);
                    echo"<script>alert('".$area->code."')</script>";
                    Cookie::set('branch_id',$employees->branch_id);
                    Cookie::set('first_name',$employees->first_name);
                    Cookie::set('middle_name',$employees->middle_name);
                    Cookie::set('last_name',$employees->last_name);
                    $this->redirect('login/role'); 
                } 
                else
                    Cookie::set('emp_error','**Invalid Employee ID or Password**');
            }
            catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('models/employee');
            }   
        }   
    }
    
    public function action_role(){
        
        $this->template->title = "Cashmate Credit Corporation: Log In";
        $this->template->title_content = "Role: Log In";
        $this->template->sublinks = array();
        $this->template->content = View::factory('login/role')->set('values', $_POST)->bind('errors', $errors);
        $pass_value[]=array();
        if($_POST)
        {
            $roles=ORM::factory('role')->where('role_password','=',$_POST['role_password'])->find('name','id');
            $emprole=ORM::factory('emprole')->where('employee_id','=',Cookie::get('id'))->find('role_id');
            Cookie::set('role_info',$roles->name);
            try
            {
                if($emprole->role_id == $roles->id && ($roles->id != "" || $roles->id != NULL))
                {
                    $menu_privileges=ORM::factory('menuprivilege')->select('menu_id','privilege_id')->where('role_id', '=', $roles->id)->group_by('menu_id')->find_all();
                    foreach($menu_privileges as $menu_privilege)
                    {
                        $menu_list=ORM::factory('menu')->select('menu_name','id')->where('id','=',$menu_privilege->menu_id)->group_by('menu_name')->find_all();
                        foreach($menu_list as $menus =>$menu)
                        {
                            $menu_pass_value[]=$menu->menu_name;
                            $submenus_list=ORM::factory('submenu')->select('submenu_name','submenu_id','menu_id')->where('menu_id','=',$menu->id)->group_by('submenu_name')->find_all();
                            foreach($submenus_list as $submenus =>$submenu)
                            {
                                $submenu_pass_value[]=$submenu->submenu_name;
                            }
                        } 
                    }
                    Session::instance()->set('emp_menu',$menu_pass_value);
                    Session::instance()->set('emp_submenu',$submenu_pass_value);

                    $branches = ORM::factory('branch')->where('id','=',Cookie::get('branch_id'))->find('web_status','name');
                    if($branches->web_status==0)
                        $this->redirect('login/branch');
                    else if($branches->web_status==1)
                    {
                        Cookie::set('branch_name',$branches->name);
                        Cookie::set('branch_id',$branches->id);
                        Cookie::set('branch_code',$branches->code);
                        $this->redirect('home');
                    }
                }
                else
                {
                    Cookie::delete('id');
                    Cookie::delete('branch_id');
                    Cookie::delete('first_name');
                    Cookie::delete('middle_name');
                    Cookie::delete('last_name');
                    $this->redirect('login/employee');
                }   
            }
            catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('models');
            } 
        }      
    }
    
    public function action_branch(){
        $this->template->title = "Cashmate Credit Corporation: Log In";
        $this->template->title_content = "Branch: Log In";
        $this->template->sublinks = array();
        $this->template->content = View::factory('login/branch')->set('values', $_POST)->bind('errors', $errors);;
        if($_POST)
        {
            $branches = ORM::factory('branch')->where('code','=',$_POST['branch_code'])->where('password','=',$_POST['branch_password'])->find('id','name');
            try
            {
                if($branches->name != "" || $branches->name != NULL)
                {
                    if(Cookie::get('role_info')=="Branch Manager")
                    {
                        
                        if(!empty($branches))
                        {
                            Cookie::set('branch_name',$branches->name);
                            Cookie::set('branch_id',$branches->id);
                            Cookie::set('branch_code',$branches->code);
                            DB::update(ORM::factory('branch')->table_name())->set(array('web_status' => 1))->where('id', '=', $branches->id)->execute();
                            $this->redirect('home');
                        }
                    }
                    else
                    {
                        echo"<script type='text/javascript'>alert('You don't have the privilege to perform this task);</script>";
                    }
                }
                else
                    Cookie::set('branch_error','**Invalid Branch ID or Password**');
                
            }
            catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('models');
            } 
        } 
    }
}
?>
