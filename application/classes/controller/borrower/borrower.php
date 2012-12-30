<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Borrower_Borrower extends Controller_Template_User{
    
        public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Borrowers Administrator";
        $this->template->styles .= HTML::style('media/styles/admin/borrower.css');
        $this->template->scripts .= HTML::script('media/scripts/admin/bulletin.js');
        $this->template->sublinks = array();
    }
   
    public function action_index(){
        $this->redirect('borrower_borrower/list/?page=1');
    }
    
    public function action_list(){
        $borrowers = ORM::factory('borrower')->where('visible', '=', '1');
        
        $view = View::factory('admin/borrower/list');
        
        $paginator = new Pagination(array('total_items'=>$borrowers->count_all()));
        $paginator->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action())); 
        $view->borrowers = $borrowers->offset($paginator->offset)->limit($paginator->items_per_page)->find_all()->as_array();
        $view->pagination = $paginator->render();
        
        $this->template->title_content = "Borrowers Administrator";
        $this->template->content = $view;
    }
    
    public function action_create(){
        
        $borrower = ORM::factory('borrower');
        
        $view = View::factory('admin/borrower/edit');
        $view->set('borrower', $borrower);
        
        $this->template->title_content = "Branch Administrator: Add Borrower";
        $view->set('title_form','Add Borrower');
        $view->set('btn_title','Add');
        $view->set('task','Add');
        
        $this->template->content = $view;
    }
    
    public function action_update(){
        
        $borrower_id = $this->request->param('id');
        $borrower = ORM::factory('borrower', $borrower_id);
        
        $view = View::factory('admin/borrower/edit');
        $view->set('borrower', $borrower);
        
        $this->template->title_content = "Branch Administrator: Edit Borrower";
        $view->set('title_form','Edit Borrower');
        $view->set('btn_title','Save');
        $view->set('task','Save');
        
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        $borrower_id = $this->request->param('id');
        $borrower = ORM::factory('borrower',$borrower_id);
        
        if($borrower->loaded()) {
            $borrower->visible = 0;
            //$borrower->save();
            $this->redirect('borrower_borrower/list/?page=1');
        }
    }
    
    public function action_save(){
        $borrower_id = $this->request->param('id');
        $borrower = ORM::factory('borrower', $borrower_id);
        $borrower->values($_POST);
        
        $errors = array();
        
        try{
            $borrower->save();
            $this->redirect('borrower_borrower/list/?page=1');
        }catch(ORM_Validation_Exception $ex){
            $errors = $ex->errors('validation');
        }
        
        $view = View::factory('admin/borrower/edit');
        $view->set("borrower", $borrower);
        $view->set('errors', $errors);
        
        if($_POST['task'] == 'Add')
        {
            $this->template->title_content = "Branch Administrator: Add Borrower";
            $view->set('title_form','Add Borrower');
            $view->set('btn_title','Add');
            $view->set('task','Add');
        }else{
            $this->template->title_content = "Branch Administrator: Edit Borrower";
            $view->set('title_form','Edit Borrower');
            $view->set('btn_title','Save');
            $view->set('task','Save');
        }
        
        $this->template->content = $view;
    }
    
}
?>
