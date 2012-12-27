<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_News extends ORM{
    
    protected $_belongs_to = array('branch' => array ());
    
    public function rules(){
        
        return array(
          'title' => array(
              array('not_empty')
          ),
          'description' => array(
              array('not_empty')
          ),
          'expiration_date' => array(
              array('not_empty')
          ),
        );
    }
    
    public function labels() {
        return array(
            'title'         => 'Title',
            'description'       => 'Content',
            'expiration_date'    => 'Expiration Date',
        );
    }
}
?>
