<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Holiday extends ORM{
    
        public function rules(){
        
        return array(
          'title' => array(
              array('not_empty')
          ),
          'description' => array(
              array('not_empty')
          ),
          'date' => array(
              array('not_empty')
          ),
        );
    }
    
    public function labels() {
        return array(
            'title'         => 'Title',
            'description'   => 'Description',
            'date'    => 'Date',
        );
    }
    
}
?>
