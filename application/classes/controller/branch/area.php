<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Branch_Area extends Controller_Template_Admin{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Branch Administrator";
        $this->template->styles .= HTML::style('media/styles/admin/branch.css');
        $this->template->sublinks = $this->get_branch_links();
    }
   
    public function action_index(){
        $this->redirect('branch_area/list');
    }
    
    public function action_list(){
      
        $this->template->title_content = "Branch Administrator";
        $this->template->content = View::factory('admin/branch/area/list');
    }
    
    public function action_create(){
        $view = View::factory('admin/branch/area/edit');
    
        $this->template->title_content = "Branch Administrator: Add Area";
        $view->set('title_form','Add Area');

        $this->template->content = $view;
    }
    
    public function action_update(){
        $view = View::factory('admin/branch/area/edit');
 
        $this->template->title_content = "Branch Administrator: Edit Area";
        $view->set('title_form','Edit Area');
   
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        
    }
    
    public function action_save(){
        
    }
    
}
?>
