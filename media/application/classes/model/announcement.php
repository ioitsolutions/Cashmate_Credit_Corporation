<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Announcement extends ORM{
    /* */
    protected $_belongs_to = array('branch' => array ());
    
    public function rules(){
        
        return array(
          'title' => array(
              array('not_empty')
          ),
          'content' => array(
              array('not_empty')
          ),
          'start_date' => array(
              array('not_empty')
          ),
          'end_date' => array(
              array('not_empty')
          ),
        );
    }
    
    public function labels() {
        return array(
            'title'         => 'Title',
            'content'       => 'Content',
            'start_date'    => 'Start Date',
            'end_date'      => 'End Date'
        );
    }
}
?>
