<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Template_Public extends Controller_Template{
    
    public $template = 'template/public';
    
    public function before(){
        parent::before();
        $this->template->meta = $this->get_meta();
        $this->template->styles = $this->get_styles();
        $this->template->scripts = $this->get_scripts();
    }
    
    public function get_meta(){
        $data =  null;
        
        return $data;
    }
    
    public function get_styles(){
        $data = null;
        $data .= HTML::style('media/styles/globalstyle.css');
        
        return $data;
    }
    
    public function get_scripts(){
        $data = null;
        $data .= HTML::script('media/scripts/filename');
    }
}
?>
