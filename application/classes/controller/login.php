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
    }
    
    public function action_employee(){
        $this->template->title = "Cashmate Credit Corporation: Log In";
        $this->template->title_content = "Employee: Log In";
        $this->template->sublinks = array();
        $this->template->content = View::factory('login/employee');
    }
    
    public function action_role(){
        $this->template->title = "Cashmate Credit Corporation: Log In";
        $this->template->title_content = "Role: Log In";
        $this->template->sublinks = array();
        $this->template->content = View::factory('login/role'); 
    }
}
?>
