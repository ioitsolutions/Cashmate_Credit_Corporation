<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Userhome extends Controller_Template_Employee{
    
    public function before(){
        parent::before();
        $this->announcement_list();
        $view = View::factory('userhome');
        $view->set('announcement_content',View::factory('admin/bulletin/announcement/list'));
        $view->set('memos_content', View::factory('admin/bulletin/memo/employee/list'));
        $view->set('top_performers_content', View::factory('admin/bulletin/performer/list'));
        
        
        $this->template->title = "Cashmate Credit Corporation: Home";
        $this->template->title_content = "Home: Bulletin Contents";
        $this->template->styles .= HTML::style('media/styles/home.css');
        $this->template->sublinks = array();
        $this->template->content = $view;
        
    }
    
    public function action_index(){
        
    }
    
    public function announcement_list(){
   
    }
}
?>