<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Bulletin_News extends Controller_Template_User{
    
public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Bulletin Contents";
        $this->template->styles .= HTML::style('media/styles/admin/bulletin.css');
        $this->template->scripts .= HTML::script('media/scripts/admin/bulletin.js');
        $this->template->sublinks = $this->get_bulletin_links();
   }
   
    public function action_index(){
        $this->redirect('bulletin_news/list/?page=1');
    }
    
    public function action_list(){
        
        $news = ORM::factory('news');
        
        $view = View::factory('admin/bulletin/news/list');
        
        $paginator = new Pagination(array('total_items'=>$news->count_all()));
        $paginator->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action())); 
        $view->news = $news->offset($paginator->offset)->limit($paginator->items_per_page)->find_all()->as_array();
        $view->pagination = $paginator->render();
        
        $this->template->title_content = "Cashmate Bulletin: News";
        $this->template->content = $view;
    }
    
    public function action_create(){
        
        $news = ORM::factory('news');
        $branches = ORM::factory('branch')->order_by('name')->find_all()->as_array('id', 'name');
        
        $view = View::factory('admin/bulletin/news/edit');
        $view->set('news',$news);
        $view->bind('branches', $branches);
        
        $this->template->title_content = "Cashmate Bulletin: Add News";
        $view->set('title_form','Add News');
        $view->set('btn_title','Add');
        $view->set('task','Add');
        
        $this->template->content = $view;
    }
    
    public function action_update(){
        
        $news_id = $this->request->param('id');
        $news = ORM::factory('news', $news_id);
        $branches = ORM::factory('branch')->order_by('name')->find_all()->as_array('id', 'name');
        
        $view = View::factory('admin/bulletin/news/edit');
        $view->set('news',$news);
        $view->bind('branches', $branches);
        
        $this->template->title_content = "Cashmate Bulletin: Edit News";
        $view->set('title_form','Edit News');
        $view->set('btn_title','Save');
        $view->set('task','Save');
        
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        $news_id = $this->request->param('id');
        $news = ORM::factory('news',$news_id);
        
        if($news->loaded()) {
            //$news->delete();
            $this->redirect('bulletin_news/list/?page=1');
        }
    }
    
    public function action_save(){
        $news_id = $this->request->param('id');
        $news = ORM::factory('news', $news_id);
        $news->values($_POST);
        
        $errors = array();
        
        try{
            $news->save();
            $this->redirect('bulletin_news/list/?page=1');
        }catch(ORM_Validation_Exception $ex){
            $errors = $ex->errors('validation');
        }
        
        $branches = ORM::factory('branch')->order_by('name')->find_all()->as_array('id', 'name');
        
        $view = View::factory('admin/bulletin/news/edit');
        $view->set("news", $news);
        $view->bind('branches', $branches);
        $view->set('errors', $errors);
        
        if($_POST['task'] == 'Add')
        {
            $this->template->title_content = "Cashmate Bulletin: Add News";
            $view->set('title_form','Add News');
            $view->set('btn_title','Add');
            $view->set('task','Add');
        }else{
            $this->template->title_content = "Cashmate Bulletin: Edit News";
            $view->set('title_form','Edit News');
            $view->set('btn_title','Save');
            $view->set('task','Save');
        }
        
        $this->template->content = $view;
    }
}
?>
