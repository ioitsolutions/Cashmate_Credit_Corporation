<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Incentives_Custodian extends Controller_Template_User{
    
    public function before(){
        parent::before();
        $this->template->title = "Performance And Incentives: Daily Cash Custodian Report";
        $this->template->title_content = "Daily Cash Custodian Report";
        $this->template->styles .= HTML::style('media/styles/emp/performance.css');
        $this->template->sublinks = $this->get_incentives_links();
        $this->template->content = View::factory('employee/incentives/custodian');
    }
    
    public function action_index(){
        
    }
}
?>
