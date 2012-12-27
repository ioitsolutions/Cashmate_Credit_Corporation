<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Loan_Type extends Controller_Template_Admin{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Loan";
        $this->template->styles .= HTML::style('media/styles/admin/loan.css');
        $this->template->sublinks = $this->get_loan_links();
    }
   
    public function action_index(){
        $this->redirect('loan_type/list/?page=1');
    }
    
    public function action_list(){
        
        $rates = ORM::factory('rate');
        
        $view = View::factory('admin/loan/type/list');
        
        $paginator = new Pagination(array('total_items'=>$rates->count_all()));
        $paginator->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action())); 
        $view->rates = $rates->offset($paginator->offset)->limit($paginator->items_per_page)->find_all()->as_array();
        $view->pagination = $paginator->render();
        
        $this->template->title_content = "Loan Types";
        $this->template->content = $view;
    }
    
    public function action_create(){
        $view = View::factory('admin/loan/type/edit');
        
        $this->template->title_content = "Loan Types";
        $view->set('title_form','Add Loan Type');
        $view->set('btn_title','Add');
        $view->set('task','Add');
        
        $this->template->content = $view;
    }
    
    public function action_update(){
        
        $rate_id = $this->request->param('id');
        $rate = ORM::factory('rate',$rate_id);
        
        $view = View::factory('admin/loan/type/edit');
        $view->set('rate', $rate);
        
        $this->template->title_content = "Loan Types";
        $view->set('title_form','Edit Loan Type');
        $view->set('btn_title','Save');
        $view->set('task','Save');
        
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        $this->redirect('loan_type/list/?page=1');
    }
    
    public function action_save(){
        $rate_id = $this->request->param('id');
        $rate = ORM::factory('rate', $rate_id);
        $rate->values($_POST);
        
        $errors = array();
        
        try{
            $rate->save();
            $this->redirect('loan_type/list/?page=1');
        }catch(ORM_Validation_Exception $ex){
            $errors = $ex->errors('validation');
        }
         
        $view = View::factory('admin/loan/type/edit');
        $view->set("rate", $rate);
        $view->set('errors', $errors);
        
        if($_POST['task'] == 'Add')
        {
            $this->template->title_content = "Loan Types: Add Loan Type";
            $view->set('title_form','Add Loan Type');
            $view->set('btn_title','Add');
            $view->set('task','Add');
        }else{
            $this->template->title_content = "Loan Types: Edit Loan Type";
            $view->set('title_form','Edit Loan Type');
            $view->set('btn_title','Save');
            $view->set('task','Save');
        }
        
        $this->template->content = $view;
    }
    
}
?>
