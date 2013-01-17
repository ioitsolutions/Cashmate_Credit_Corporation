<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Test_Role extends Controller_Template_Admin
{
    public function action_index()
    {
        $this->template->title = "Test Role Menu Privileges";
        $this->template->title_content = "Test Role Menu Privileges";
        $this->template->sublinks = array();
        
        $role_menu_privileges = ORM::factory('test_rolemenuprivileges')
                ->distinct('id')
                ->find_all();        
        
        $view = View::factory('test/role');
        
        $view->set('role_menu_privileges', $role_menu_privileges);
        
        $this->template->content = $view;
    }
}
?>
