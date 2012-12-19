<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Home extends Controller_Template_Admin{
    
    public function before(){
        parent::before();
        $this->announcement_list();
        $view = View::factory('home');
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
        $announcements = ORM::factory('announcement');
        
        $view = View::factory('admin/bulletin/announcement/list');
        
        $paginator = new Pagination(array('total_items'=>$announcements->count_all()));
        $paginator->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action())); 
        $view->announcements = $announcements->offset($paginator->offset)->limit($paginator->items_per_page)->find_all()->as_array();
        $view->pagination = $paginator->render();
        
    }
}
?>
