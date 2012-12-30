<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Incentives_Cutoff extends Controller_Template_User{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Performance Per Cut Off";
        $this->template->title_content = "Performance Per Cut Off";
        $this->template->styles .= HTML::style('media/styles/emp/performance.css');
        $this->template->sublinks = $this->get_incentives_links();
        $this->template->content = View::factory('employee/incentives/cutoff');
    }
    
    public function action_index(){
        
    }
}
?>
