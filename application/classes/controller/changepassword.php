<?php defined('SYSPATH') or die('No direct access allowed.');
class Controller_Changepassword extends Controller_Login
{
    public function action_employee()
    {
        $this->template->title = "Cashmate Credit Corporation: Change Employee Password";
        $this->template->title_content = "Employee: Change Password";
        $this->template->sublinks = array();
        $this->template->content = View::factory('changepassword/employee')->bind('validator', $validator)->bind('errors', $errors);
        if($_POST)
        {
                $employee=ORM::factory('employee')->where('id','=',Cookie::get('id'))->find('employee_password');
                $validator=$employee->validate_changepassword(arr::extract($_POST,array('old_password','new_password','validate_password')));
                if($validator->check())
                {
                    if($_POST['new']==$_POST['validate'])
                    {
                        $old=hash('md5', $_POST['current']);
                        if($employee->employee_password==$old)
                        {
                            $hash=hash('md5', $_POST['new_password']);
                            DB::update('employees')->set(array('employee_password'=>$hash,'update_ts'=>date("Y-m-d H:i:s")))->where('id','=',Cookie::get('id'))->execute();
                            Cookie::delete('error');
                            $this->redirect('home');
                        }
                        else
                        {
                            Cookie::set('error','Current password provided does not exist in the database');
                            $this->redirect('changepassword/employee');
                        }
                    }
                }
                else
                {
                    Cookie::delete('error');
                    $errors = $validator->errors('errors');
                }
        }
    }
    public function action_branch()
    {
        $this->template->title = "Cashmate Credit Corporation: Change Branch Password";
        $this->template->title_content = "Branch: Change Password";
        $this->template->sublinks = array();
        $this->template->content = View::factory('changepassword/branch')->bind('validator', $validator)->bind('errors', $errors);
        if($_POST)
        {
                if(Cookie::get('role_info')=="Branch Manager" || Cookie::get('role_info')=="President" || Cookie::get('role_info')=="Administrator")
                {
                    $branch=ORM::factory('branch')->find('password');
                    $validator=$branch->validate_changepassword(arr::extract($_POST,array('old_password','new_password','validate_password')));
                    if($validator->check())
                    {
                        if($_POST['new_password']==$_POST['validate_password'])
                        {
                          $old=hash('md5', $_POST['new_password']);
                            if($branch->password==$old)
                            {
                                $hash=hash('md5', $_POST['new']);
                                DB::update('branches')->set(array('password'=>$hash,'update_ts'=>date("Y-m-d H:i:s")))->where('id','=',Cookie::get('branch_id'))->execute();
                                Cookie::delete('error');
                                $this->redirect('home');
                            }
                            else
                            {
                                Cookie::set('error','Current password provided does not exist in the database');
                                $this->redirect('changepassword/branch');
                            }
                        }
                    }
                    else
                    {
                        Cookie::delete('error');
                        $errors = $validator->errors('errors');
                    }
                }
        }
    }
}
?>
