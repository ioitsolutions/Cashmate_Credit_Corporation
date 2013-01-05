<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Loan_Request extends Controller_Template_Admin{
     /*Loan View Request*/
    
   public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Loan Request List";
        $this->template->title_content = "Loan Request for Posting";
        $this->template->styles .= HTML::style('media/styles/emp/loan.css');
        $this->template->sublinks = array();
        $this->template->content = View::factory('employee/loan/request');
   }
   
    public function action_index(){
      
    }
}
?>
