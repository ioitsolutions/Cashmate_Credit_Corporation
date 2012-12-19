<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Bulletin_Announcement extends Controller_Template_Admin{
    
    public function before(){
        parent::before();
        
        $this->template->title = "Cashmate Credit Corporation: Bulletin Contents";
        $this->template->styles .= HTML::style('media/styles/admin/bulletin.css');
        $this->template->scripts .= HTML::script('media/scripts/admin/bulletin.js');
        $this->template->sublinks = $this->get_bulletin_links();
   }
   
    public function action_index(){
        $this->redirect('bulletin_announcement/list/?page=1');
    }
    
    public function action_list(){
        
        $announcements = ORM::factory('announcement');
        
        $view = View::factory('admin/bulletin/announcement/list');
        
        $paginator = new Pagination(array('total_items'=>$announcements->count_all()));
        $paginator->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action())); 
        $view->announcements = $announcements->offset($paginator->offset)->limit($paginator->items_per_page)->find_all()->as_array();
        $view->pagination = $paginator->render();
        
        $this->template->title_content = "Cashmate Bulletin: Announcements";
        $this->template->content = $view;
    }
    
    public function action_create(){
        
        $this->announcement = ORM::factory('announcement');
        $branches = ORM::factory('branch')->order_by('name')->find_all()->as_array('id', 'name');
        
        $view = View::factory('admin/bulletin/announcement/edit');
        $view->set('announcement',$this->announcement);
        $view->bind('branches', $branches);
        
        $this->template->title_content = "Cashmate Bulletin: Add Announcement";
        $view->set('title_form','Add Announcement');
        $view->set('btn_title','Add');
        $view->set('task','Add');
        $this->template->content = $view;
    }
    
    public function action_update(){
        
        $announcement_id = $this->request->param('id');
        $announcement = ORM::factory('announcement', $announcement_id);
        $branches = ORM::factory('branch')->order_by('name')->find_all()->as_array('id', 'name');
        
        $view = View::factory('admin/bulletin/announcement/edit');
        $view->set('announcement',$announcement);
        $view->bind('branches', $branches);
        
        $this->template->title_content = "Cashmate Bulletin: Edit Announcement";
        $view->set('title_form','Edit Announcement');
        $view->set('btn_title','Save');
        $view->set('task','Save');
        $this->template->content = $view;
    }
    
    
    public function action_delete(){
        
        $announcement_id = $this->request->param('id');
        $announcement = ORM::factory('announcement',$announcement_id);
        
        if($announcement->loaded()) {
            $announcement->delete();
            $this->redirect('bulletin_announcement/list/?page=1');
        }
    }
    
    public function action_save(){
        
        $announcement_id = $this->request->param('id');
        $announcement = ORM::factory('announcement', $announcement_id);
        $announcement->values($_POST);
        
        $errors = array();
        
        try{
            $announcement->save();
            $this->redirect('bulletin_announcement/list/?page=1');
        }catch(ORM_Validation_Exception $ex){
            $errors = $ex->errors('validation');
        }
        
        $branches = ORM::factory('branch')->order_by('name')->find_all()->as_array('id', 'name');
        
        $view = View::factory('admin/bulletin/announcement/edit');
        $view->set("announcement", $announcement);
        $view->bind('branches', $branches);
        $view->set('errors', $errors);
        
        if($_POST['task'] == 'Add')
        {
            $this->template->title_content = "Cashmate Bulletin: Add Announcement";
            $view->set('title_form','Add Announcement');
            $view->set('btn_title','Add');
            $view->set('task','Add');
        }else{
            $this->template->title_content = "Cashmate Bulletin: Edit Announcement";
            $view->set('title_form','Edit Announcement');
            $view->set('btn_title','Save');
            $view->set('task','Save');
        }
        
        $this->template->content = $view;
    }
}
?>