<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Loan_Voucher extends Controller_Template_Admin{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Loan Release Voucher";
        $this->template->title_content = "Loan Release Voucher";
        $this->template->styles .= HTML::style('media/styles/emp/loan.css');
        $this->template->sublinks = $this->get_loan_links();
        $this->template->content = View::factory('employee/loan/voucher');
   }
   
    public function action_index(){
       
    }
    
}
?>
