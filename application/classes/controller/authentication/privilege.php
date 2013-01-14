<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Authentication_Privilege extends Controller_Template_Admin{
    public $role="";
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Roles and Privileges";
        $this->template->styles .= HTML::style('media/styles/admin/authentication.css');
        $this->template->sublinks = $this->get_authentication_links();
    }
    
    public function action_index(){
        $this->redirect('authentication_privilege/list');
    }
   
    public function action_list(){
        $view=View::factory('admin/authentication/privilege/list');
        $view->roles=ORM::factory('role')->find_all('id','name');
        $view->menus=ORM::factory('menu')->find_all('id','menu_name');
        $this->template->title_content = "Roles and Privileges - Administration";
        $this->template->content = $view;
    }
    
    public function action_update(){
        $view = View::factory('admin/authentication/privilege/edit');
        $this->template->title_content = "Role - Administration Edit Role";
        $view->set('title_form','Edit Role Record');
        $view->set('btn_title','Save');
        $this->template->content = $view;
        if($_POST)
        {
            
        }
    }
}
?>
