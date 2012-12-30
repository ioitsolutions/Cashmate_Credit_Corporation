<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Branch_Area extends Controller_Template_User{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Branch Administrator";
        $this->template->styles .= HTML::style('media/styles/admin/branch.css');
        $this->template->scripts .= HTML::script('media/scripts/admin/bulletin.js');
        $this->template->sublinks = $this->get_branch_links();
    }
   
    public function action_index(){
        $this->redirect('branch_area/list/?page=1');
    }
    
    public function action_list(){
        $areas = ORM::factory('area');
        
        $view = View::factory('admin/branch/area/list');
        
        $paginator = new Pagination(array('total_items'=>$areas->count_all()));
        $paginator->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action())); 
        $view->areas = $areas->offset($paginator->offset)->limit($paginator->items_per_page)->find_all()->as_array();
        $view->pagination = $paginator->render();
        
        $this->template->title_content = "Branch Administrator";
        $this->template->content = $view;
    }
    
    public function action_create(){
        $area = ORM::factory('area');
        $branches = ORM::factory('branch')->order_by('name')->find_all()->as_array('id', 'name');
        
        $view = View::factory('admin/branch/area/edit');
        $view->set('area',$area);
        $view->bind('branches', $branches);
        
        $this->template->title_content = "Branch Administrator: Add Area";
        $view->set('title_form','Add Area');
        $view->set('btn_title','Add');
        $view->set('task','Add');
        
        $this->template->content = $view;
    }
    
    public function action_update(){
        
        $area_id = $this->request->param('id');
        $area = ORM::factory('area', $area_id);
        $branches = ORM::factory('branch')->order_by('name')->find_all()->as_array('id', 'name');
        
        $view = View::factory('admin/branch/area/edit');
        $view->set('area',$area);
        $view->bind('branches', $branches);
        
        $this->template->title_content = "Branch Administrator: Edit Area";
        $view->set('title_form','Edit Area');
        $view->set('btn_title','Save');
        $view->set('task','Save');
        
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        $area_id = $this->request->param('id');
        $area = ORM::factory('area', $area_id);
        
        if($area->loaded()) {
            //$area->delete();
            $this->redirect('branch_area/list/?page=1');
        }
    }
    
    public function action_save(){
        $area_id = $this->request->param('id');
        $area = ORM::factory('area', $area_id);
        $area->values($_POST);
        
        $errors = array();
        
        try{
            $area->save();
            $this->redirect('branch_area/list/?page=1');
        }catch(ORM_Validation_Exception $ex){
            $errors = $ex->errors('validation');
        }
        
        $branches = ORM::factory('branch')->order_by('name')->find_all()->as_array('id', 'name');
        
        $view = View::factory('admin/branch/area/edit');
        $view->set("area", $area);
        $view->bind('branches', $branches);
        $view->set('errors', $errors);
        
        if($_POST['task'] == 'Add')
        {
            $this->template->title_content = "Branch Administrator: Add area";
            $view->set('title_form','Add area');
            $view->set('btn_title','Add');
            $view->set('task','Add');
        }else{
            $this->template->title_content = "Branch Administrator: Edit area";
            $view->set('title_form','Edit area');
            $view->set('btn_title','Save');
            $view->set('task','Save');
        }
        
        $this->template->content = $view;
    }
    
}
?>
