<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Bulletin_Quote extends Controller_Template_User{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Bulletin Contents";
        $this->template->styles .= HTML::style('media/styles/admin/bulletin.css');
        $this->template->scripts .= HTML::script('media/scripts/admin/bulletin.js');
        $this->template->sublinks = $this->get_bulletin_links();
   }
   
    public function action_index(){
        $this->redirect('bulletin_quote/list/?page=1');
    }
    
    public function action_list(){
        $quotes = ORM::factory('quote');
       
        $view = View::factory('admin/bulletin/quote/list');
        
        $paginator = new Pagination(array('total_items'=>$quotes->count_all()));
        $paginator->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action())); 
        $view->quotes = $quotes->offset($paginator->offset)->limit($paginator->items_per_page)->find_all()->as_array();
        $view->pagination = $paginator->render();
        
        $this->template->title_content = "Cashmate Bulletin: Quotes";
        
        $this->template->content = $view;
    }
    
    public function action_create(){
        
        $quote = ORM::factory('quote');
        
        $view = View::factory('admin/bulletin/quote/edit');
        
        $this->template->title_content = "Cashmate Bulletin: Add Quote";
        $view->set('title_form','Add Quote');
        $view->set('btn_title','Add');
        $view->set('task','Add');
        $view->set('quote',$quote);
        
        $this->template->content = $view;
    }
    
    public function action_update(){
        $quote_id = $this->request->param('id');
        $quote = ORM::factory('Quote',$quote_id);
        
        $view = View::factory('admin/bulletin/quote/edit');
        $view->set('quote',$quote);
       
        $this->template->title_content = "Cashmate Bulletin: Edit Quote";
        $view->set('title_form','Edit Quote');
        $view->set('btn_title','Save');
        $view->set('task','Save');
        
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        
        $quote_id = $this->request->param('id');
        $quote = ORM::factory('quote',$quote_id);
        
        if($quote->loaded()) {
            //$quote->delete();
            $this->redirect('bulletin_quote/list/?page=1');
        }
    }
    
    public function action_save(){
        
        $quote_id = $this->request->param('id');
        $quote = ORM::factory('quote', $quote_id);
        $quote->values($_POST);
        
        $errors = array();
        
        try{
            $quote->save();
            $this->redirect('bulletin_quote/list/?page=1');
        }catch(ORM_Validation_Exception $ex){
            $errors = $ex->errors('validation');
        }
            
        $view = View::factory('admin/bulletin/quote/edit');
        $view->set("quote", $quote);
        $view->set('errors', $errors);
        
        if($_POST['task'] == 'Add')
        {
            $this->template->title_content = "Cashmate Bulletin: Add Quote";
            $view->set('title_form','Add Quote');
            $view->set('btn_title','Add');
            $view->set('task','Add');
        }else{
            $this->template->title_content = "Cashmate Bulletin: Edit Quote";
            $view->set('title_form','Edit Quote');
            $view->set('btn_title','Save');
            $view->set('task','Save');
        }
        
        $this->template->content = $view;
    }
}
?>
