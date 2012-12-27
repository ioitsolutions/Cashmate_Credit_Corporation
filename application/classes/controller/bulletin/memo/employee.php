<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Bulletin_Memo_Employee extends Controller_Template_Admin{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Bulletin Contents";
        $this->template->styles .= HTML::style('media/styles/admin/bulletin.css');
        $this->template->scripts .= HTML::script('media/scripts/admin/bulletin.js');
        $this->template->sublinks = $this->get_bulletin_links();
   }
   
    public function action_index(){
        $this->redirect('bulletin_memo_employee/list/?page=1');
    }
    
    public function action_list(){
        
        $memos = ORM::factory('memo');
        
        $view = View::factory('admin/bulletin/memo/employee/list');
        $this->template->title_content = "Cashmate Bulletin: Memos";
        
        $paginator = new Pagination(array('total_items'=>$memos->where('employee_id', 'IS NOT', NULL)->count_all()));
        $paginator->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action())); 
        $view->memos = $memos->where('employee_id', 'IS NOT', NULL)->offset($paginator->offset)->limit($paginator->items_per_page)->find_all()->as_array();
        $view->pagination = $paginator->render();
        
        $this->template->content = $view;
    }
    
    public function action_create(){
        
        $memo = ORM::factory('memo');
        $employees = ORM::factory('employee')->select(array(Db::expr('CONCAT(first_name," ",middle_name," ",last_name)'),'fullname'))
                ->order_by('first_name')->find_all()->as_array('id','fullname');
        
        $view = View::factory('admin/bulletin/memo/employee/edit');
        $view->set('memo', $memo);
        $view->bind('employees', $employees);
        
        $this->template->title_content = "Cashmate Bulletin: Add Memo";
        $view->set('title_form','Add Employee Memo');
        $view->set('btn_title','Add');
        $view->set('task','Add');
        
        $this->template->content = $view;
    }
    
    public function action_update(){
        
        $memo_id = $this->request->param('id');
        $memo = ORM::factory('memo', $memo_id);
        $employees = ORM::factory('employee')->select(array(Db::expr('CONCAT(first_name," ",middle_name," ",last_name)'),'fullname'))
                ->order_by('first_name')->find_all()->as_array('id','fullname');
        
        $view = View::factory('admin/bulletin/memo/employee/edit');
        $view->set('memo', $memo);
        $view->bind('employees', $employees);
        
        $this->template->title_content = "Cashmate Bulletin: Edit Memo";
        $view->set('title_form','Edit Employee Memo');
        $view->set('btn_title','Save');
        $view->set('task','Save');
        
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        $memo_id = $this->request->param('id');
        $memo = ORM::factory('memo',$memo_id);
        
        if($memo->loaded()) {
            //$memo->delete();
            $this->redirect('bulletin_memo_employee/list/?page=1');
        }
    }
    
    public function action_save(){
        $memo_id = $this->request->param('id');
        $memo = ORM::factory('memo', $memo_id);
        $memo->values($_POST);
        
        $errors = array();
        
        try{
            $memo->branch_id = NULL;
            $memo->save();
            $this->redirect('bulletin_memo_employee/list/?page=1');
        }catch(ORM_Validation_Exception $ex){
            $errors = $ex->errors('validation');
        }
        
        $employees = ORM::factory('employee')->select(array(Db::expr('CONCAT(first_name," ",middle_name," ",last_name)'),'fullname'))
                ->order_by('first_name')->find_all()->as_array('id','fullname');
        
        $view = View::factory('admin/bulletin/memo/employee/edit');
        $view->set("memo", $memo);
        $view->bind('employees', $employees);
        $view->set('errors', $errors);
        
        if($_POST['task'] == 'Add')
        {
            $this->template->title_content = "Cashmate Bulletin: Add Memo";
            $view->set('title_form','Add Employee Memo');
            $view->set('btn_title','Add');
            $view->set('task','Add');
        }else{
            $this->template->title_content = "Cashmate Bulletin: Edit Memo";
            $view->set('title_form','Edit Employee Memo');
            $view->set('btn_title','Save');
            $view->set('task','Save');
        }
        
        $this->template->content = $view;
    }
}
?>
