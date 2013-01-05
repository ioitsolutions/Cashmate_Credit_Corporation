<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Loan_Inquiry extends Controller_Template_Admin{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Loan Inquiry";
        $this->template->title_content = "Loan Inquiry";
        $this->template->styles .= HTML::style('media/styles/emp/inquiry.css');
        $this->template->sublinks = array();
        $this->template->content = View::factory('employee/loan/inquiry');        
   }
   
    public function action_index(){

    }
}
?>
