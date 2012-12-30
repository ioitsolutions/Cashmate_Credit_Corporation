<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Bulletin_Holiday extends Controller_Template_User{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Bulletin Contents";
        $this->template->styles .= HTML::style('media/styles/admin/bulletin.css');
        $this->template->scripts .= HTML::script('media/scripts/admin/bulletin.js');
        $this->template->sublinks = $this->get_bulletin_links();
    }
   
    public function action_index(){
        $this->redirect('bulletin_holiday/list/?page=1');
    }
    
    public function action_list(){
      
        $holidays = ORM::factory('holiday');
        
        $view = View::factory('admin/bulletin/holiday/list');
        
        $paginator = new Pagination(array('total_items'=>$holidays->count_all()));
        $paginator->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action())); 
        $view->holidays = $holidays->offset($paginator->offset)->limit($paginator->items_per_page)->find_all()->as_array();
        $view->pagination = $paginator->render();
        
        $this->template->title_content = "Cashmate Bulletin: Holidays";
        $this->template->content = $view;
    }
    
    public function action_create(){
        
        $holiday = ORM::factory('holiday');
        
        $view = View::factory('admin/bulletin/holiday/edit');
        $view->set('holiday',$holiday);
        
        $this->template->title_content = "Cashmate Bulletin: Add Holiday";
        $view->set('title_form','Add Holiday');
        $view->set('btn_title','Add');
        $view->set('task','Add');
        
        $this->template->content = $view;
    }
    
    public function action_update(){
        
        $holiday_id = $this->request->param('id');
        $holiday = ORM::factory('holiday', $holiday_id);
        
        $view = View::factory('admin/bulletin/holiday/edit');
        $view->set('holiday',$holiday);
        
        $this->template->title_content = "Cashmate Bulletin: Edit Holiday";
        $view->set('title_form','Edit Holiday');
        $view->set('btn_title','Save');
        $view->set('task','Save');
        
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        $holiday_id = $this->request->param('id');
        $holiday = ORM::factory('holiday',$holiday_id);
        
        if($holiday->loaded()) {
            //$holiday->delete();
            $this->redirect('bulletin_holiday/list/?page=1');
        }
    }
    
    public function action_save(){
        $holiday_id = $this->request->param('id');
        $holiday = ORM::factory('holiday', $holiday_id);
        $holiday->values($_POST);
        
        $errors = array();
        
        try{
            $holiday->save();
            $this->redirect('bulletin_holiday/list/?page=1');
        }catch(ORM_Validation_Exception $ex){
            $errors = $ex->errors('validation');
        }
        
        $view = View::factory('admin/bulletin/holiday/edit');
        $view->set("holiday", $holiday);
        $view->set('errors', $errors);
        
        if($_POST['task'] == 'Add')
        {
            $this->template->title_content = "Cashmate Bulletin: Add holiday";
            $view->set('title_form','Add holiday');
            $view->set('btn_title','Add');
            $view->set('task','Add');
        }else{
            $this->template->title_content = "Cashmate Bulletin: Edit holiday";
            $view->set('title_form','Edit holiday');
            $view->set('btn_title','Save');
            $view->set('task','Save');
        }
        
        $this->template->content = $view;
    }
    
}
?>
