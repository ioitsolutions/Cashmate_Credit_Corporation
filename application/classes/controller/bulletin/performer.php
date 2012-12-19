<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Bulletin_Performer extends Controller_Template_Admin{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Bulletin Contents";
        $this->template->styles .= HTML::style('media/styles/admin/bulletin.css');
        $this->template->sublinks = $this->get_bulletin_links();
   }
   
    public function action_index(){
        $this->redirect('bulletin_performer/list');
    }
    
    public function action_list(){
       
        $this->template->title_content = "Cashmate Bulletin: Top Performers";
        
        $this->template->content = View::factory('admin/bulletin/performer/list');
    }
    
    public function action_create(){
        $view = View::factory('admin/bulletin/performer/edit');
       
        $this->template->title_content = "Cashmate Bulletin: Add Top Performer";
        $view->set('title_form','Add Top Performer');
        
        $this->template->content = $view;
    }
    
    public function action_update(){
        $view = View::factory('admin/bulletin/performer/edit');
        
        $this->template->title_content = "Cashmate Bulletin: Edit Top Performer";
        $view->set('title_form','Edit Top Performer');
        
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        
    }
    
    public function action_save(){
        
    }
}
?>
