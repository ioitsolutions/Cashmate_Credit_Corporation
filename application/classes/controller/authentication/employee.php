<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Authentication_Employee extends Controller_Template_Admin{
    
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
