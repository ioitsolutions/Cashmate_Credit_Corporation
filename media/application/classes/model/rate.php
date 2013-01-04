<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Rate extends ORM{
    
    public function rules(){
        
        return array(
          'class' => array(
              array('not_empty'),
              array('numeric'),
          ),
          'description' => array(
              array('not_empty')
          ),
          'value' => array(
              array('not_empty'),
              array('decimal'),
          ),
        );
    }
    
    public function labels() {
        return array(
            'class'         => 'Class',
            'description'       => 'Description',
            'value'    => 'Value',
        );
    }
}
?>
