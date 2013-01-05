<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Loan_Send extends Controller_Template_Admin{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Loan Request List";
        $this->template->title_content = "Loan Request List";
        $this->template->styles .= HTML::style('media/styles/emp/loan.css');
        $this->template->sublinks = $this->get_loan_links();
        $this->template->content = View::factory('employee/loan/send');
   }
   
    public function action_index(){
      
    }
    
}
?>
