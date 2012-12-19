<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Loan_Check extends Controller_Template_Employee{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Loan Release Check";
        $this->template->title_content = "Loan Release Check";
        $this->template->styles .= HTML::style('media/styles/emp/loan.css');
        $this->template->sublinks = $this->get_loan_links();
        $this->template->content = View::factory('employee/loan/check');        
   }
   
    public function action_index(){

    }
    
}
?>
