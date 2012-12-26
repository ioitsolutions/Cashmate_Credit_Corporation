<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Login extends Controller_Template_Public{
   
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
            $area_id=Cookie::get('area_id');
            if($employees->area_id == $area_id && $employees->employee_id==$_POST['employee_id'])
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
        if($_POST)
        {
            $roles = ORM::factory('role')->where('role_password','=',$_POST['role_password'])->find('name','id','user_credential');
            $emp_role=ORM::factory('emprole')->where('employee_id','=',Cookie::get('employee_id'))->find('role_id');
            if($roles->id==$emp_role->role_id and $emp_role->employee_id==Cookie::get('employee_id'))
            {
                $role = Session::instance()->set('role_info',$roles->name);
                if($roles->user_credential==2)
                {
                    $this->redirect('adminhome'); 
                }
                else
                {
                    $this->redirect('userhome'); 
                }
            }
            else
            {
                echo"<script type = 'text/javascript'>alert('Wrong username/password');</script>";
            }
        }      
    }
}
?>
