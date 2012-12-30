<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Login extends Controller_Template_Login{
    public function action_index(){
        $this->redirect('login/branch');        
    }
    
    public function action_branch(){
        $this->template->title = "Cashmate Credit Corporation: Log In";
        $this->template->title_content = "Branch: Log In";
        $this->template->sublinks = array();
        $this->template->content = View::factory('login/branch');
        if($_POST)
        {
            $branches = ORM::factory('branch')->where('branch_password','=',$_POST['branch_password'])->find('branch_id','branch_name','branch_code');
            if($branches->branch_code ==$_POST['branch_code'])
            {
                $branch_info[]=array('branch_id'=>$branches->branch_id,'branch_code'=>$_POST['branch_code']);
                $branch = Session::instance()->set('branch_info',$branch_info);
                Cookie::set('area_id',$branches->branch_id);
                Cookie::set('branch_name',$branches->branch_name);
                $this->redirect('login/employee');
            }
            else
            {
                echo"<script type = 'text/javascript'>alert('Wrong username/password');</script>";
            }
        } 
    }        

    public function action_employee(){ 
        $this->template->title = "Cashmate Credit Corporation: Log In";
        $this->template->title_content = "Employee: Log In";
        $this->template->sublinks = array();
        $this->template->content = View::factory('login/employee');
        if($_POST)
        {
            $employees = ORM::factory('employee')->where('employee_password','=',$_POST['employee_password'])->find('employee_id','first_name','middle_name','last_name','area_id');
            if($employees->area_id == Cookie::get('area_id') && $employees->employee_id==$_POST['employee_id'])
            {
                $employee_info[]=array('employee_id'=>$employees->employee_id,'area_id'=>$employees->area_id);
                $employee = Session::instance()->set('employee_info',$employee_info);
                Cookie::set('employee_id',$employees->employee_id);
                Cookie::set('first_name',$employees->first_name);
                Cookie::set('middle_name',$employees->middle_name);
                Cookie::set('last_name',$employees->last_name);
                $this->redirect('login/role'); 
            } 
            else
            {
                echo"<script type = 'text/javascript'>alert('Wrong username/password');</script>";
            }
        }   
    }
    
    public function action_role(){
        
        $this->template->title = "Cashmate Credit Corporation: Log In";
        $this->template->title_content = "Role: Log In";
        $this->template->sublinks = array();
        $this->template->content = View::factory('login/role'); 
        $pass_value[]=array();
        if($_POST)
        {
            $roles=ORM::factory('role')->where('role_password','=',$_POST['role_password'])->find('name','id');
            $emprole=ORM::factory('emprole')->where('employee_id','=',Cookie::get('employee_id'))->find('role_id');
            Session::instance()->set('role_info',$roles->name);
            
            if($emprole->role_id == $roles->id)
            {
                $menu_privileges=ORM::factory('menuprivilege')->select('menu_id','privilege_id')->where('employee_id', '=', Cookie::get('employee_id'))->group_by('menu_id')->find_all();
                foreach($menu_privileges as $menu_privilege)
                {
                    $menu_list=ORM::factory('menu')->select('menu_name','menu_id')->where('menu_id','=',$menu_privilege->menu_id)->group_by('menu_name')->find_all();
                    foreach($menu_list as $menus =>$menu)
                    {
                        echo $menu->menu_name;
                        $menu_pass_value[]=$menu->menu_name;
                        $submenus_list=ORM::factory('submenu')->select('submenu_name','submenu_id','menu_id')->where('menu_id','=',$menu->menu_id)->group_by('submenu_name')->find_all();
                        foreach($submenus_list as $submenus =>$submenu)
                        {
                            echo $submenu->submenu_name;
                            $submenu_pass_value[]=$submenu->submenu_name;
                        }
                    } 
                }
                Session::instance()->set('emp_menu',$menu_pass_value);
                Session::instance()->set('emp_submenu',$submenu_pass_value);
                $this->redirect('home'); 
            }
            else
            {
                echo"<script type='text/javascript'>alert('Invalid role password');</script>";
            }
        }      
    }
}
?>
