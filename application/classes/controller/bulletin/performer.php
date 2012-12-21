<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Bulletin_Performer extends Controller_Template_Admin{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Bulletin Contents";
        $this->template->styles .= HTML::style('media/styles/admin/bulletin.css');
        $this->template->sublinks = $this->get_bulletin_links();
   }
   
    public function action_index(){
        $this->redirect('bulletin_performer/list/?page=1');
    }
    
    public function action_list(){
        
        $performers = ORM::factory('performer');
        
        $view = View::factory('admin/bulletin/performer/list');
        
        $paginator = new Pagination(array('total_items'=>$performers->count_all()));
        $paginator->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action())); 
        $view->performers = $performers->offset($paginator->offset)->limit($paginator->items_per_page)->find_all()->as_array();
        $view->pagination = $paginator->render();
        
        $this->template->title_content = "Cashmate Bulletin: Top Performers";
        $this->template->content = $view;
    }
    
    public function action_create(){
        
        $this->performer = ORM::factory('performer');
        $employees = ORM::factory('employee')->order_by('first_name')->find_all()->as_array('id', 'first_name');
        
        $view = View::factory('admin/bulletin/performer/edit');
        $view->set('performer',$this->performer);
        $view->bind('employees', $employees);
        
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
