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
        $employees = ORM::factory('employee')->select(array(Db::expr('CONCAT(first_name," ",middle_name," ",last_name)'),'fullname'))
                ->order_by('first_name')->find_all()->as_array('id','fullname');
        
        $view = View::factory('admin/bulletin/performer/edit');
        $view->set('performer',$this->performer);
        $view->bind('employees', $employees);
        
        $this->template->title_content = "Cashmate Bulletin: Add Top Performer";
        $view->set('title_form','Add Top Performer');
        $view->set('btn_title','Add');
        $view->set('task','Add');
        
        $this->template->content = $view;
    }
    
    public function action_update(){
        
        $performer_id = $this->request->param('id');
        $performer = ORM::factory('performer', $performer_id);
        $employees = ORM::factory('employee')->select(array(Db::expr('CONCAT(first_name," ",middle_name," ",last_name)'),'fullname'))
                ->order_by('first_name')->find_all()->as_array('id','fullname');
        
        $view = View::factory('admin/bulletin/performer/edit');
        $view->set('performer',$performer);
        $view->bind('employees', $employees);
        
        $this->template->title_content = "Cashmate Bulletin: Edit Top Performer";
        $view->set('title_form','Edit Top Performer');
        $view->set('btn_title','Save');
        $view->set('task','Save');
        
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        $performer_id = $this->request->param('id');
        $performer = ORM::factory('performer',$performer_id);
        
        if($performer->loaded()) {
            $performer->delete();
            $this->redirect('bulletin_performer/list/?page=1');
        }
    }
    
    public function action_save(){
        
        $performer_id = $this->request->param('id');
        $performer = ORM::factory('performer', $performer_id);
        $performer->values($_POST);
        
        $errors = array();
        
        try{
            $performer->save();
            $this->redirect('bulletin_performer/list/?page=1');
        }catch(ORM_Validation_Exception $ex){
            $errors = $ex->errors('validation');
        }
        
        $employees = ORM::factory('employee')->select(array(Db::expr('CONCAT(first_name," ",middle_name," ",last_name)'),'fullname'))
                ->order_by('first_name')->find_all()->as_array('id','fullname');
        
        $view = View::factory('admin/bulletin/performer/edit');
        $view->set("performer", $performer);
        $view->bind('employees', $employees);
        $view->set('errors', $errors);
        
        if($_POST['task'] == 'Add')
        {
            $this->template->title_content = "Cashmate Bulletin: Add Top Performer";
            $view->set('title_form','Add Top Performer');
            $view->set('btn_title','Add');
            $view->set('task','Add');
        }else{
            $this->template->title_content = "Cashmate Bulletin: Edit Top Performer";
            $view->set('title_form','Edit Top Performer');
            $view->set('btn_title','Save');
            $view->set('task','Save');
        }
        
        $this->template->content = $view;
    }
}
?>
