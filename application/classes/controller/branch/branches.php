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
        
        $branches = ORM::factory('branch');
        
        $view = View::factory('admin/branch/branches/list');
        
        $paginator = new Pagination(array('total_items'=>$branches->count_all()));
        $paginator->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action())); 
        $view->branches = $branches->offset($paginator->offset)->limit($paginator->items_per_page)->find_all()->as_array();
        $view->pagination = $paginator->render();
        
        $this->template->title_content = "Branch Administrator";
        $this->template->content = $view;
    }
    
    public function action_create(){
        
        $branch = ORM::factory('branch');
        
        $view = View::factory('admin/branch/branches/edit');
        $view->set('branch', $branch);
        
        $this->template->title_content = "Branch Administrator: Add Branch";
        $view->set('title_form','Add Branch');
        $view->set('btn_title','Add');
        $view->set('task','Add');
        
        $this->template->content = $view;
    }
    
    public function action_update(){
        
        $branch_id = $this->request->param('id');
        $branch = ORM::factory('branch', $branch_id);
        
        $view = View::factory('admin/branch/branches/edit');
        $view->set('branch', $branch);
        
        $this->template->title_content = "Branch Administrator: Edit Branch";
        $view->set('title_form','Edit Branch');
        $view->set('btn_title','Save');
        $view->set('task','Save');
        
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        
    }
    
    public function action_save(){
        
    }
    
}
?>
