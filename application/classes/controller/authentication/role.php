<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Authentication_Role extends Controller_Template_Admin{

    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Authentication";
        $this->template->styles .= HTML::style('media/styles/admin/authentication.css');
        $this->template->scripts .= HTML::script('media/scripts/admin/authentication.js');
        $this->template->sublinks = $this->get_authentication_links();
    }
    
    public function get_role()
    {
        $roles=ORM::factory('role')->find_all('id','name','update_ts','visible');
        return $roles;      
    }
   
    public function action_index(){
        $this->redirect('authentication_role/list');
    }
    
    public function action_list(){
        $view=View::factory('admin/authentication/role/list');
        $view->roles=$this->get_role();
        $this->template->title_content = "Role - Administration";
        $this->template->content = $view;
    }
    
    public function action_create(){
        $view = View::factory('admin/authentication/role/add');
        $this->template->title_content = "Role - Administration Add Role";
        $view->set('title_form','Add Role Record');
        $view->set('btn_title','Add');
        $this->template->content = $view;
        if($_POST)
        {
            if($_POST['password']==$_POST['confirm_password'])
            {
                 DB::insert('roles', array('name','role_password','visible','update_ts','update_user'))
                        ->values(array($_POST['role'],$_POST['password'],0,$_POST['calendar'],''))->execute();
            }
        }
    }
    
    public function action_update()
    {
        $role_id=$this->request->param('id');
        $view = View::factory('admin/authentication/role/edit');
        $view->role=ORM::factory('role')->where('id','=',$role_id)->find('id','name','update_ts');
        $this->template->title_content = "Role - Administration Edit Role";
        $view->set('title_form','Edit Role Record');
        $view->set('btn_title','Save');
        $this->template->content = $view;
        if($_POST)
        {
            if($_POST['password']==$_POST['confirm_password'])
            {
                DB::update('roles')->set(array('name'=>$_POST['role'],'update_ts'=>$_POST['calendar'],'role_password'=>$_POST['password'],'visible'=>$_POST['visible']))->where('id','=',$role_id)->execute();
                $this->redirect('authentication_role/list');
            }
        }
    }
    
    public function action_delete(){
        $role_id=$this->request->param('id');
        $view=View::factory('admin/authentication/role/list');
        $view->roles=$this->get_role();
        $this->template->title_content = "Role - Administration";
        $this->template->content = $view;
        DB::delete('roles')->where('id','=',$role_id)->execute();
        $this->redirect('authentication_role/list');
    }
    
    public function action_viewemployee(){
        $view = View::factory('admin/authentication/role/viewemp');
        $this->template->title_content = "Role - Administration View Role Employee";
        $this->template->content = $view;
    }
}
?>
