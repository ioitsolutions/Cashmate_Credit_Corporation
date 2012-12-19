<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Loan_Type extends Controller_Template_Admin{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Loan";
        $this->template->styles .= HTML::style('media/styles/admin/loan.css');
        $this->template->sublinks = $this->get_loan_links();
    }
   
    public function action_index(){
        $this->redirect('loan_type/list');
    }
    
    public function action_list(){
        
        $this->template->title_content = "Loan Types";
        
        $this->template->content = View::factory('admin/loan/type/list');
    }
    
    public function action_create(){
        $view = View::factory('admin/loan/type/edit');
        
        $this->template->title_content = "Loan Types";
        $view->set('title_form','Add Loan Types');
        
        $this->template->content = $view;
    }
    
    public function action_update(){
        $view = View::factory('admin/loan/type/edit');
        
        $this->template->title_content = "Loan Types";
        $view->set('title_form','Edit Loan Type');
        
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        
    }
    
    public function action_save(){
        
    }
    
}
?>
