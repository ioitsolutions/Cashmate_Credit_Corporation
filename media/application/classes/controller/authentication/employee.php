<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Authentication_Employee extends Controller_Template_User{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Authentication";
        $this->template->styles .= HTML::style('media/styles/admin/authentication.css');
        $this->template->sublinks = $this->get_authentication_links();
    }
   
    public function action_index(){
        $this->redirect('authentication_employee/list');
    }
    
    public function action_list(){
      
        $this->template->title_content = "Employee - Administration";
      
        $this->template->content = View::factory('admin/authentication/employee/list');
    }
    
    public function action_create(){
        $view = View::factory('admin/authentication/employee/add');        
        $this->template->title_content = "Employee - Administration Add Employee";
        $view->set('title_form','Add Employee Record');
        $view->set('btn_title','Add');
        $this->template->content = $view;
        if($_POST)
        {
            if($_POST['password']==$_POST['val_password'])
            {
                $emp_info=ORM::factory('addemp');
                $emp_info->employee_id=$_POST['emp_id'];
                $emp_info->first_name=$_POST['first_name'];
                $emp_info->middle_name=$_POST['mid_name'];
                $emp_info->last_name=$_POST['last_name'];
                $emp_info->contact_number=$_POST['cont_num'];
                $emp_info->address=$_POST['add'];
                $emp_info->employee_password=$_POST['password'];
                $emp_info->branch_id=$_POST['branch'];
                $emp_info->area_id=$_POST['area'];
                $emp_info->update_ts=$_POST['date'];
                $emp_info->visible=$_POST['status'];
                $emp_info->save();
            }
            else{}
            
        }  
    }
    
    public function action_update(){
        $view = View::factory('admin/authentication/employee/edit');
        
        $this->template->title_content = "Employee - Administration Edit Employee";
        $view->set('title_form','Edit Employee Record');
        $view->set('btn_title','Save');
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        
    }
    
    public function action_save(){
        
    }
}
?>
