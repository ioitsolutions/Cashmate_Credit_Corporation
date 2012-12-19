<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Branch_Branches extends Controller_Template_Admin{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Branch Administrator";
        $this->template->styles .= HTML::style('media/styles/admin/branch.css');
        $this->template->sublinks = $this->get_branch_links();
    }
   
    public function action_index(){
        $this->redirect('branch_branches/list');
    }
    
    public function action_list(){
     
        $this->template->title_content = "Branch Administrator";
        $this->template->content = View::factory('admin/branch/branches/list');
    }
    
    public function action_create(){
        $view = View::factory('admin/branch/branches/edit');
   
        $this->template->title_content = "Branch Administrator: Add Branch";
        $view->set('title_form','Add Branch');
   
        $this->template->content = $view;
    }
    
    public function action_update(){
        $view = View::factory('admin/branch/branches/edit');
      
        $this->template->title_content = "Branch Administrator: Edit Branch";
        $view->set('title_form','Edit Branch');
       
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        
    }
    
    public function action_save(){
        
    }
    
}
?>
