<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Home extends Controller_Template_Admin{
    
    private $view;
    
    public function before(){
        parent::before();
        $this->view = View::factory('home');        
        $this->template->title = "Cashmate Credit Corporation: Home";
        $this->template->title_content = "Home: Bulletin Contents";
        $this->template->styles .= HTML::style('media/styles/home.css');
        $this->template->sublinks = array();
    }
    
    public function action_index(){
        $this->announcements_list();
        $this->memos_list();
        $this->branch_production_list();
        $this->top_performers_list();
        $this->branch_top_grossers_list();
        $this->news_list();
        $this->quotes_list();
        
        $this->template->content = $this->view;
    }
    
    public function announcements_list(){
        $announcements = ORM::factory('announcement')->limit(5)->find_all()->as_array();
        $this->view->announcements = $announcements;
    }
    
    public function memos_list(){
        $memos = ORM::factory('memo')->where('branch_id', 'IS NOT', NULL)->limit(5)->find_all()->as_array();
        $this->view->memos = $memos;
    }
    
    public function branch_production_list(){
        $branches = ORM::factory('branch')->limit(8)->find_all()->as_array();
        $this->view->branches = $branches;
    }
    
    public function top_performers_list(){
        $performers = ORM::factory('performer')->limit(3)->find_all()->as_array();
        $this->view->performers = $performers;
    }
    
    public function branch_top_grossers_list(){
        
    }
    
    public function news_list(){
        $news = ORM::factory('news')->limit(5)->find_all()->as_array();
        $this->view->news = $news;
    }
    
    public function quotes_list(){
        $quotes = ORM::factory('quote')->limit(5)->find_all()->as_array();
        $this->view->quotes = $quotes;
    }
}
?>
