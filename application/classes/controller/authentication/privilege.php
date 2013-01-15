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
        $pieces = explode(" ", $this->request->param('id'));
        if(!$_POST)
        {
            $menu_privilege=DB::select('status')->from('role_menu_privileges')->where('role_id','=',$pieces[0])->where('menu_id','=',$pieces[1])->where('privilege_id','=',$pieces[2])->execute();
            if($menu_privilege->count()==1)
                DB::update('role_menu_privileges')->set(array('status'=>0))->where('role_id','=',$pieces[0])->where('menu_id','=',$pieces[1])->where('privilege_id','=',$pieces[2])->execute();
            else if($menu_privilege->count()==0)
                DB::insert('role_menu_privileges', array('role_id','menu_id','privilege_id','status','date_modified'))
                ->values(array($pieces[0],$pieces[1],$pieces[2],0,  date("MM-dd-YYY")))->execute();
                $this->redirect('authentication_privilege/list/');
        }
    }
    public function action_Clear(){
        $pieces = explode(" ", $this->request->param('id'));
        if(!$_POST)
        {
            DB::update('role_menu_privileges')->set(array('status'=>1))->where('role_id','=',$pieces[0])->where('menu_id','=',$pieces[1])->execute();
            $this->redirect('authentication_privilege/list/');
        }
    }
}
?>
