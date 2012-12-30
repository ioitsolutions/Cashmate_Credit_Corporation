<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Loan_Status extends Controller_Template_User{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Loan";
        $this->template->styles .= HTML::style('media/styles/admin/loan.css');
        $this->template->sublinks = $this->get_loanrequest_links();
    }
   
    public function action_index(){
        $this->redirect('loan_status/list');
    }
    
    public function action_list(){
       
        $this->template->title_content = "Loan Status";
        
        $this->template->content = View::factory('admin/loan/status/list');
    }
    
    public function action_create(){
        $view = View::factory('admin/loan/status/edit');
        
        $this->template->title_content = "Loan Status";
        $view->set('title_form','Add Loan Status');
        
        $this->template->content = $view;
    }
    
    public function action_update(){
        $view = View::factory('admin/loan/status/edit');
        
        $this->template->title_content = "Loan Status";
        $view->set('title_form','Edit Loan Status');
        
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        
    }
    
    public function action_save(){
        
    }
    
}
?>
