<?php defined('SYSPATH') or die('No direct access allowed.');
class Controller_Changepassword extends Controller_Login
{
    public function action_employee()
    {
        $this->template->title = "Cashmate Credit Corporation: Change Employee Password";
        $this->template->title_content = "Employee: Change Password";
        $this->template->sublinks = array();
        $this->template->content = View::factory('changepassword/employee');
        if($_POST)
        {
            if($_POST['new']==$_POST['validate'])
            {
                $employee=ORM::factory('employee')->where('id','=',Cookie::get('id'))->find('employee_password');
                $old=$hash=hash('md5', $_POST['current']);
                if($employee->employee_password==$old)
                {
                    $hash=hash('md5', $_POST['new']);
                    DB::update('employees')->set(array('employee_password'=>$hash))->where('id','=',Cookie::get('id'))->execute();
                    $this->redirect('home');
                }
            }
        }
    }
    public function action_branch()
    {
        $this->template->title = "Cashmate Credit Corporation: Change Branch Password";
        $this->template->title_content = "Branch: Change Password";
        $this->template->sublinks = array();
        $this->template->content = View::factory('changepassword/branch');
        if($_POST)
        {
            if($_POST['new']==$_POST['validate'])
            {
                if(Cookie::get('role_info')=="Branch Manager" || Cookie::get('role_info')=="President" || Cookie::get('role_info')=="Administrator")
                {
                    $role=ORM::factory('branch')->where('id','=',Cookie::get('branch_id'))->find('password');
                    $old=hash('md5', $_POST['current']);
                    if($role->password==$old)
                    {
                        $hash=hash('md5', $_POST['new']);
                        DB::update('branches')->set(array('password'=>$hash))->where('id','=',Cookie::get('branch_id'))->execute();
                        $this->redirect('home');
                    }
                }
            }
        }
    }
}
?>
