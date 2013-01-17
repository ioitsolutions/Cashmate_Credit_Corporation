<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Authentication_Employee extends Controller_Template_Admin{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Authentication";
        $this->template->styles .= HTML::style('media/styles/admin/authentication.css');
        $this->template->scripts .= HTML::script('media/scripts/admin/authentication.js');
        $this->template->sublinks = $this->get_authentication_links();
    }
   
    public function action_index(){
        $this->redirect('authentication_employee/list');
    }
    
    public function action_roles()
    {
        $roles=ORM::factory('role')->where('visible','=',0)->find_all('id','name');
        return $roles;
    }
    
    public function action_branches()
    {
        $branches=ORM::factory('branch')->find_all('id','name');
        return $branches;
    }
    
    public function action_areas()
    {
        $areas=ORM::factory('area')->find_all('id','name');
        return $areas;
    }
    
    public function get_employees()
    {
        $employees=ORM::factory('employee')->find_all('id','first_name','middle_name','last_name','address','contact_number','role_id' ,'branch_id','area_id','update_ts');
        return $employees;
    }
    
    public function action_list()
    {
        $view = View::factory('admin/authentication/employee/list');
        $view->employees=$this->get_employees();
        $view->branches=$this->action_branches();
        $view->areas=$this->action_areas();
        $view->roles=$this->action_roles();
        $this->template->title_content = "Employee - Administration";
        $this->template->content = $view;
    }
    
    public function action_create(){
        $view = View::factory('admin/authentication/employee/add')->bind('validator', $validator)->bind('errors', $errors); 
        $view->role_list=$this->action_roles();
        $view->branch_list=$this->action_branches();
        $view->area_list=$this->action_areas();
        $this->template->title_content = "Employee - Administration Add Employee";
        $view->set('title_form','Add Employee Record');
        $view->set('btn_title','Add');
        $this->template->content = $view;
        if($_POST)
        {
                $role=ORM::factory('role')->where('name','=',$_POST['role_list'])->find('id');
                $branch=ORM::factory('branch')->where('name','=',$_POST['branch_list'])->find('id');
                $area=ORM::factory('area')->where('name','=',$_POST['area_list'])->find('id');
                $employee=ORM::factory('employee');
                $validator=$employee->validate_add(arr::extract($_POST,array('emp_id','f_name','m_name','l_name','c_number','address','calendar','new_password','validate_password')));
                if($validator->check())
                {
                    if($_POST['new_password']==$_POST['validate_password'])
                    {
                        $password=hash('md5', $_POST['new_password']);
                       $sql= DB::insert('employees', array('first_name','middle_name','last_name','contact_number','address','employee_password','role_id','branch_id','area_id','visible','update_ts'))
                            ->values(array($_POST['f_name'],$_POST['m_name'],$_POST['l_name'],$_POST['c_number'],$_POST['address'],$password,$role->id,$branch->id,$area->id,$_POST['calendar'],$_POST['status']))
                            ->execute();
                       
                        DB::insert('employee_roles',array('employee_id','role_id'))
                                ->values(array($sql[0], $role->id))
                                ->execute();
                        $this->redirect('authentication_employee/list');
                    }
                }
                else
                {
                    $errors = $validator->errors('errors');
                }
        }  
    }
    
    public function action_update(){
        $emp_id=$this->request->param('id');
        Cookie::set('emp_edit_id',$emp_id);
        $view = View::factory('admin/authentication/employee/edit')->bind('validator', $validator)->bind('errors', $errors);
        $view->roles=$this->action_roles();
        $view->menus=$this->get_menu();
        $view->privileges=ORM::factory('addedempprivileges')->where('employee_id','=',$emp_id)->find_all('privilege_id','menu_id','status');
        $view->branches=$this->action_branches();
        $view->areas=$this->action_areas();
        $view->set('employee',ORM::factory('employee',$emp_id));
        $this->template->title_content = "Employee - Administration Edit Employee";
        $view->set('title_form','Edit Employee Record');
        $view->set('btn_title','Save');
        $this->template->content = $view;
        if($_POST)
        {
            if(isset($_POST['employee']))
            {
                $password=ORM::factory('employee')->where('id','=',$emp_id)->find('employee_password','branch_id','area_id','role_id');
                $employee=ORM::factory('employee');
                $role=ORM::factory('role')->where('name','=',$_POST['role'])->find('id');
                $branch=ORM::factory('branch')->where('name','=',$_POST['branch'])->find('id');
                $area=ORM::factory('area')->where('name','=',$_POST['area'])->find('id');
                $validator=$password->validate_update(arr::extract($_POST,array('emp_id','f_name','m_name','l_name','c_number','address','calendar')));
                if($validator->check())
                {
                    DB::update('employees')->set(array('first_name' => $_POST['f_name'],'middle_name'=>$_POST['m_name'],'last_name'=>$_POST['l_name'],'contact_number'=>$_POST['c_number'],'address'=>$_POST['address'],'role_id'=>$role->id,'branch_id'=>$branch->id,'area_id'=>$area->id,'visible'=>$_POST['status'],'update_ts'=>$_POST['calendar']))->where('id', '=', $_POST['emp_id'])->execute();
                    $this->redirect('authentication_employee/list');
                }
                else
                {
                    $errors = $validator->errors('errors');
                }
            }
            else if(isset($_POST['privilege']))
            {
                if(isset($_POST['view']))
                {
                    $menu_privilege=DB::select('status')->from('employee_menu_privileges')->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',1)->execute();
                    if($menu_privilege->count()==1)
                        DB::update('employee_menu_privileges')->set(array('status'=>0,'date_modified'=>date("Y-m-d H:i:s")))->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',1)->execute();
                    else if($menu_privilege->count()==0)
                        DB::insert('employee_menu_privileges', array('employee_id','menu_id','privilege_id','status','date_modified'))
                        ->values(array($emp_id,$_POST['menu'],1,0,  date("Y-m-d H:i:s")))->execute();
                }
                else if(!isset($_POST['view']))
                {
                    $menu_privilege=DB::select('status')->from('employee_menu_privileges')->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',1)->execute();
                    if($menu_privilege->count()==1)
                        DB::update('employee_menu_privileges')->set(array('status'=>1,'date_modified'=>date("Y-m-d H:i:s")))->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',1)->execute();
                    else if($menu_privilege->count()==0)
                        DB::insert('employee_menu_privileges', array('employee_id','menu_id','privilege_id','status','date_modified'))
                        ->values(array($emp_id,$_POST['menu'],1,1,  date("Y-m-d H:i:s")))->execute();
                }
                if(isset($_POST['save']))
                {
                    $menu_privilege=DB::select('status')->from('employee_menu_privileges')->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',2)->execute();
                    if($menu_privilege->count()==1)
                        DB::update('employee_menu_privileges')->set(array('status'=>0,'date_modified'=>date("Y-m-d H:i:s")))->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',2)->execute();
                    else if($menu_privilege->count()==0)
                        DB::insert('employee_menu_privileges', array('employee_id','menu_id','privilege_id','status','date_modified'))
                        ->values(array($emp_id,$_POST['menu'],2,0,  date("Y-m-d H:i:s")))
                        ->execute();
                }
                else if(!isset($_POST['save']))
                {
                    $menu_privilege=DB::select('status')->from('employee_menu_privileges')->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',2)->execute();
                    if($menu_privilege->count()==1)
                        DB::update('employee_menu_privileges')->set(array('status'=>1,'date_modified'=>date("Y-m-d H:i:s")))->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',2)->execute();
                    else if($menu_privilege->count()==0)
                        DB::insert('employee_menu_privileges', array('employee_id','menu_id','privilege_id','status','date_modified'))
                        ->values(array($emp_id,$_POST['menu'],2,1,  date("Y-m-d H:i:s")))
                        ->execute();
                }
                if(isset($_POST['edit']))
                {
                    $menu_privilege=DB::select('status')->from('employee_menu_privileges')->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',3)->execute();
                    if($menu_privilege->count()==1)
                        DB::update('employee_menu_privileges')->set(array('status'=>0,'date_modified'=>date("Y-m-d H:i:s")))->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',3)->execute();
                    else if($menu_privilege->count()==0)
                        DB::insert('employee_menu_privileges', array('employee_id','menu_id','privilege_id','status','date_modified'))
                        ->values(array($emp_id,$_POST['menu'],3,0,  date("Y-m-d H:i:s")))
                        ->execute();
                }
                else if(!isset($_POST['edit']))
                {
                    $menu_privilege=DB::select('status')->from('employee_menu_privileges')->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',3)->execute();
                    if($menu_privilege->count()==1)
                        DB::update('employee_menu_privileges')->set(array('status'=>1,'date_modified'=>date("Y-m-d H:i:s")))->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',3)->execute();
                    else if($menu_privilege->count()==0)
                        DB::insert('employee_menu_privileges', array('employee_id','menu_id','privilege_id','status','date_modified'))
                        ->values(array($emp_id,$_POST['menu'],3,1,  date("Y-m-d H:i:s")))
                        ->execute();
                }
                if(isset($_POST['print']))
                {
                    $menu_privilege=DB::select('status')->from('employee_menu_privileges')->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',4)->execute();
                    if($menu_privilege->count()==1)
                        DB::update('employee_menu_privileges')->set(array('status'=>0,'date_modified'=>date("Y-m-d H:i:s")))->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',4)->execute();
                    else if($menu_privilege->count()==0)
                        DB::insert('employee_menu_privileges', array('employee_id','menu_id','privilege_id','status','date_modified'))
                        ->values(array($emp_id,$_POST['menu'],4,0,  date("Y-m-d H:i:s")))
                        ->execute();
                    
                }
                else if(!isset($_POST['print']))
                {
                    $menu_privilege=DB::select('status')->from('employee_menu_privileges')->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',4)->execute();
                    if($menu_privilege->count()==1)
                        DB::update('employee_menu_privileges')->set(array('status'=>1))->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',4)->execute();
                    else if($menu_privilege->count()==0)
                        DB::insert('employee_menu_privileges', array('employee_id','menu_id','privilege_id','status','date_modified'))
                        ->values(array($emp_id,$_POST['menu'],4,1,  date("Y-m-d H:i:s")))
                        ->execute();
                }
                if(isset($_POST['post']))
                {
                    $menu_privilege=DB::select('status')->from('employee_menu_privileges')->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',5)->execute();
                    if($menu_privilege->count()==1)
                        DB::update('employee_menu_privileges')->set(array('status'=>0,'date_modified'=>date("Y-m-d H:i:s")))->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',5)->execute();
                    else if($menu_privilege->count()==0)
                        DB::insert('employee_menu_privileges', array('employee_id','menu_id','privilege_id','status','date_modified'))
                        ->values(array($emp_id,$_POST['menu'],5,0,  date("Y-m-d H:i:s")))
                        ->execute();
                }
                else if(!isset($_POST['post']))
                {
                    $menu_privilege=DB::select('status')->from('employee_menu_privileges')->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',5)->execute();
                    if($menu_privilege->count()==1)
                        DB::update('employee_menu_privileges')->set(array('status'=>1,'date_modified'=>date("Y-m-d H:i:s")))->where('employee_id','=',$emp_id)->where('menu_id','=',$_POST['menu'])->where('privilege_id','=',5)->execute();
                    else if($menu_privilege->count()==0)
                        DB::insert('employee_menu_privileges', array('employee_id','menu_id','privilege_id','status','date_modified'))
                        ->values(array($emp_id,$_POST['menu'],5,1,  date("Y-m-d H:i:s")))
                        ->execute();
                }
                $this->redirect('authentication_employee/update/'.Cookie::get('emp_edit_id'));
            }
        }
    }
    
    public function action_delete(){
        $emp_id=$this->request->param('id');
        $view = View::factory('admin/authentication/employee/list');
        $view->employees=$this->get_employees();
        $view->branches=$this->action_branches();
        $view->areas=$this->action_areas();
        $view->roles=$this->action_roles();
        $this->template->title_content = "Employee - Administration";
        $this->template->content = $view;
        DB::delete('employees')->where('id','=',$emp_id)->execute();
        $this->redirect('authentication_employee/list');
    }
    
    public function action_save(){
        
    }
    
    public function get_menu()
    {
        $menus=ORM::factory('menu')->find_all('menu_name','menu_id');
        return $menus;
    }
}
?>
