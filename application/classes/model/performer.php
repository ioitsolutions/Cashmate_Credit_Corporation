<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Performer extends ORM{
    protected $_table_name = 'top_performers';
    protected $_belongs_to = array('employee' => array ());
    
    public function rules(){
        
        return array(
          'content' => array(
              array('not_empty')
          ),
        );
    }
    
    public function labels() {
        return array(
            'content'       => 'Content',
        );
    }
}
?>
