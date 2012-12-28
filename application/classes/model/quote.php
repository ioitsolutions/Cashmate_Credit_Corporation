<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Quote extends ORM{
    
    protected $_belongs_to = array(
        'creator'  => array ('model' => 'employee', 'foreign_key' => 'user_created' ),
    );
    
    public function rules(){
        
        return array(
          'value' => array(
              array('not_empty')
          ),
          'explanation' => array(
              array('not_empty')
          ),
          'expiration_date' => array(
              array('not_empty')
          ),
        );
    }
    
    public function labels() {
        return array(
            'value'       => 'Value',
            'explanation'       => 'Explanation',
            'expiration_date'       => 'Expiration Date',
        );
    }
    
}
?>
