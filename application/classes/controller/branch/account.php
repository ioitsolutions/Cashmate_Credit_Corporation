<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Branch_Account extends Controller_Template_Admin{
    
     public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Branch Administrator";
        $this->template->styles .= HTML::style('media/styles/admin/branch.css');
        $this->template->scripts .= HTML::script('media/scripts/admin/bulletin.js');
        $this->template->sublinks = $this->get_branch_links();
    }
   
    public function action_index(){
        $this->redirect('branch_account/list');
    }
    
    public function action_list(){
        $banks = ORM::factory('bank');
        
        $view = View::factory('admin/branch/account/list');
        
        $paginator = new Pagination(array('total_items'=>$banks->count_all()));
        $paginator->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action())); 
        $view->banks = $banks->offset($paginator->offset)->limit($paginator->items_per_page)->find_all()->as_array();
        $view->pagination = $paginator->render();
        
        $this->template->title_content = "Branch Administrator";
        $this->template->content = $view;
    }
    
    public function action_create(){
        $bank = ORM::factory('bank');
        $branches = ORM::factory('branch')->order_by('name')->find_all()->as_array('id', 'name');
        
        $view = View::factory('admin/branch/account/edit');
        $view->set('bank',$bank);
        $view->bind('branches', $branches);
        
        $this->template->title_content = "Branch Administrator: Add Bank Account";
        $view->set('title_form','Add Bank Account');
        $view->set('btn_title','Add');
        $view->set('task','Add');
        
        $this->template->content = $view;
    }
    
    public function action_update(){
        $bank_id = $this->request->param('id');
        $bank = ORM::factory('bank',$bank_id);
        $branches = ORM::factory('branch')->order_by('name')->find_all()->as_array('id', 'name');
        
        $view = View::factory('admin/branch/account/edit');
        $view->set('bank',$bank);
        $view->bind('branches', $branches);
        
        $this->template->title_content = "Branch Administrator: Edit Bank Account";
        $view->set('title_form','Edit Bank Account');
        $view->set('btn_title','Save');
        $view->set('task','Save');
        
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        $bank_id = $this->request->param('id');
        $bank = ORM::factory('bank',$bank_id);
        
        if($bank->loaded()) {
            //$bank->delete();
            $this->redirect('branch_account/list/?page=1');
        }
    }
    
    public function action_save(){
        $bank_id = $this->request->param('id');
        $bank = ORM::factory('bank', $bank_id);
        $bank->values($_POST);
        
        $errors = array();
        
        try{
            $bank->save();
            $this->redirect('branch_account/list/?page=1');
        }catch(ORM_Validation_Exception $ex){
            $errors = $ex->errors('validation');
        }
        
        $branches = ORM::factory('branch')->order_by('name')->find_all()->as_array('id', 'name');
        
        $view = View::factory('admin/branch/account/edit');
        $view->set("bank", $bank);
        $view->bind('branches', $branches);
        $view->set('errors', $errors);
        
        if($_POST['task'] == 'Add')
        {
            $this->template->title_content = "Branch Administrator: Add Bank Account";
            $view->set('title_form','Add Bank Account');
            $view->set('btn_title','Add');
            $view->set('task','Add');
        }else{
            $this->template->title_content = "Branch Administrator: Edit Bank Account";
            $view->set('title_form','Edit Bank Account');
            $view->set('btn_title','Save');
            $view->set('task','Save');
        }
        
        $this->template->content = $view;
    }
    
}
?>

