<?php defined('SYSPATH') or die('No direct access allowed.');
class Controller_Logout extends Controller_Home{
    
    public function action_branch(){
        if(Cookie::get('role_info')=="Branch Manager" || Cookie::get('role_info')=="President" || Cookie::get('role_info')=="Administrator")
        {
            DB::update(ORM::factory('branch')->table_name())->set(array('web_status' => 0))->where('id', '=', Cookie::get('branch_id'))->execute();
            Cookie::delete('branch_id');
            Cookie::delete('first_name');
            Cookie::delete('middle_name');
            Cookie::delete('last_name');
            Cookie::delete('branch_name');
            Cookie::delete('role_info');
            Cookie::delete('branch_id');
            Cookie::delete('emp_error');
            Cookie::delete('role_error');
            Cookie::delete('branch_error');
            session::instance()->delete('emp_menu');
            session::instance()->delete('emp_submenu');
            $this->redirect('login/employee');
            
        }
        else
        {
            $this->redirect('home');
        }
    }
    public function action_employee(){
        Cookie::delete('branch_id');
        Cookie::delete('first_name');
        Cookie::delete('middle_name');
        Cookie::delete('last_name');
        Cookie::delete('branch_name');
        Cookie::delete('role_info');
        Cookie::delete('branch_id');
        Cookie::delete('emp_error');
        Cookie::delete('role_error');
        Cookie::delete('branch_error');
        session::instance()->delete('emp_menu');
        session::instance()->delete('emp_submenu');
        $this->redirect('login/employee');
    }
}
?>
