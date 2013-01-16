<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Authentication_Menu extends Controller_Template_Admin{

    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Authentication";
        $this->template->styles .= HTML::style('media/styles/admin/authentication.css');
        $this->template->scripts .= HTML::script('media/scripts/admin/authentication.js');
        $this->template->sublinks = $this->get_authentication_links();
    }
    
    public function action_index(){
        $this->redirect('authentication_menu/list');
    }
    
    public function get_menu_details()
    {
        $menus=ORM::factory('menu')->find_all('id','name','description');
        return $menus;
    }
   
    public function action_list(){
        $view=View::factory('admin/authentication/menu/list');
        $view->menus=$this->get_menu_details();
        $this->template->title_content = "Menu - Administration";
        $this->template->content = $view;
    }
    
    public function action_create(){
        $view = View::factory('admin/authentication/menu/add')->bind('validator', $validator)->bind('errors', $errors);
        $this->template->title_content = "Role - Administration Add Menu";
        $this->template->content = $view;
        if($_POST)
        {
            $menu=ORM::factory('menu');
            $validator=$menu->validate_add(arr::extract($_POST,array('menu','description','calendar')));
            if($validator->check())
            {
                DB::insert('menus',array('menu_name','description','date_modified'))
                    ->values(array($_POST['menu'],$_POST['description'],$_POST['calendar']))->execute();
                $this->redirect('authentication_menu/list');
            }
            else
            {
                $errors = $validator->errors('errors');
            }
        }
    }
    
    public function action_update(){
        $menu_id=$this->request->param('id');
        $view = View::factory('admin/authentication/menu/edit')->bind('validator', $validator)->bind('errors', $errors);
        $view->menu=ORM::factory('menu')->where('id','=',$menu_id)->find('menu_name','description');
        $this->template->title_content = "Role - Administration Edit Role";
        $this->template->content = $view;
        if($_POST)
        {
            $menu=ORM::factory('menu');
            $validator=$menu->validate_update(arr::extract($_POST,array('menu','description','calendar')));
            if($validator->check())
            {
                DB::update('menus')->set(array('menu_name'=>$_POST['menu'],'description'=>$_POST['description'],'date_modified'=>$_POST['calendar']))->where('id','=',$menu_id)->execute();
                $this->redirect('authentication_menu/list');
            }
            else
            {
                $errors = $validator->errors('errors');
            } 
        }
    }
    
    public function action_delete()
    {
        $menu_id=$this->request->param('id');
        $view=View::factory('admin/authentication/menu/list');
        $view->menus=$this->get_menu_details();
        $this->template->title_content = "Menu - Administration";
        $this->template->content = $view;
        DB::delete('menus')->where('id','=',$menu_id)->execute();
        $this->redirect('authentication_menu/list');
    }
}
?>
