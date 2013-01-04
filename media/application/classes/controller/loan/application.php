<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Loan_Application extends Controller_Template_User{
    
   public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Loan Application Form";
        $this->template->title_content = "Loan Application Form";
        $this->template->styles .= HTML::style('media/styles/emp/application.css');
        $this->template->sublinks = array();
        $this->template->content = View::factory('employee/loan/application');
   }
 
    public function action_index(){
       
    }
}
?>
