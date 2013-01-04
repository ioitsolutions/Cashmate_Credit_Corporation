<?php defined('SYSPATH') or die('No direct access allowed.');
class Controller_Logout extends Controller_Home{
    
    public function action_branch(){
        if(Cookie::get('role_info')=="Branch Manager")
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
            //Cookie::delete('emp_menu');
            //Cookie::delete('emp_submenu');
            $this->redirect('login/employee');
            
        }
        else
        {
            echo"<script type='text/javascript'>alert('You dount have privilege to perform this task');</script>";
            //$this->redirect('home');
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
        //Cookie::delete('emp_menu');
        //Cookie::delete('emp_submenu');
        $this->redirect('login/employee');
    }
}
?>
