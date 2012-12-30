<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Template_Login extends Controller_Template{
    
    public $template = 'template/login';
    public function before(){
        parent::before();
        $this->template->meta = $this->get_meta();
        $this->template->styles = $this->get_styles();
        $this->template->scripts = $this->get_scripts();
    }
    
    protected function get_meta(){
        $data =  null;
        
        return $data;
    }
    
    protected function get_styles(){
        $data = null;
        $data .= HTML::style('media/styles/south-street/jquery-ui-1.9.2.custom.css');
        $data .= HTML::style('media/styles/globalstyle.css');
        
        return $data;
    }
    
    protected function get_scripts(){
        $data = null;
        $data .= HTML::script('media/scripts/jquery-1.8.3.js');
        $data .= HTML::script('media/scripts/jquery-ui-1.9.2.custom.js');
        
        return $data;
    }
}
?>