<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Loan_Create extends Controller_Template_Employee{
    
    public function before(){
        parent::before();
        $view = View::factory('employee/loan/create');
        $view->view_request = View::factory('employee/loan/request');
        $this->template->title = "Cashmate Credit Corporation: Create Loan Request";
        $this->template->title_content = "Create Loan Request";
        $this->template->styles .= HTML::style('media/styles/emp/loan.css');
        $this->template->scripts .= HTML::script('media/scripts/emp/loan.js');
        $this->template->sublinks = $this->get_loan_links();
        $this->template->content = $view;
        
   }
   
    public function action_index(){
        
    }
}
?>
