<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Loan_Approval extends Controller_Template_User{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Loan Request for Approval";
        $this->template->title_content = "Loan Request for Approval";
        $this->template->styles .= HTML::style('media/styles/emp/loan.css');
        $this->template->sublinks = $this->get_loanrequest_links();
        $this->template->content = View::factory('employee/loan/approval');
   }
   
    public function action_index(){
    }
    
}
?>
