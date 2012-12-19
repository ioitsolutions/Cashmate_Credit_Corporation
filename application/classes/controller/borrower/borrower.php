<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Borrower_Borrower extends Controller_Template_Admin{
    
        public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Borrowers Administrator";
        $this->template->styles .= HTML::style('media/styles/admin/borrower.css');
        $this->template->sublinks = array();
    }
   
    public function action_index(){
        $this->redirect('borrower_borrower/list');
    }
    
    public function action_list(){
        
        $this->template->title_content = "Borrowers Administrator";
        $this->template->content = View::factory('admin/borrower/list');
    }
    
    public function action_create(){
        $view = View::factory('admin/borrower/edit');
        
        $this->template->title_content = "Branch Administrator: Add Borrower";
        $view->set('title_form','Add Bank Account');
        
        $this->template->content = $view;
    }
    
    public function action_update(){
        $view = View::factory('admin/borrower/edit');
        
        $this->template->title_content = "Branch Administrator: Edit Borrower";
        $view->set('title_form','Edit Bank Account');
        
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        
    }
    
    public function action_save(){
        
    }
    
}
?>
