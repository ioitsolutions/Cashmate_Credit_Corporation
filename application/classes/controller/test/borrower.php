<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Test_Borrower extends Controller_Template_Admin
{
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Borrowers Administrator";
        $this->template->styles .= HTML::style('media/styles/admin/borrower.css');
        $this->template->scripts .= HTML::script('media/scripts/admin/bulletin.js');
        $this->template->sublinks = array();
    }
    
    public function action_index()
    {
            $this->template->title_content = "TEst Borrower";
            $view = View::factory('test/borrower');
            
            $borrowers_list = ORM::factory('borrower')
                    ->where('id','=',19)
                    ->find_all();
            
           $rel = ORM::factory('relationship')->find_all();
           
           $top_performers = ORM::factory('performer')->find_all();
           
           $role_privileges = ORM::factory('emppriviliges')->find_all();
           
            
            $sample_join = ORM::factory('emppriviliges')
                    ->select(
                              'r.name'
                            )
                    ->join(array('roles','r'),'INNER')
                    ->on('role_id', '=', 'r.id')
                    ->find_all();
            
            
            $view->set('datas', $borrowers_list);
            $view->set('relationships', $rel);
            $view->set('top_performers', $top_performers);
            $view->set('infos', $role_privileges);
            $view->set('joins', $sample_join);
            
            $this->template->content = $view;
        
    }
}
?>
