<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Area extends ORM{
    
    protected $_belongs_to = array('branch' => array ());
    
    public function rules(){
        
        return array(
          'code' => array(
              array('not_empty')
          ),
          'name' => array(
              array('not_empty')
          ),
          'effectivity_date' => array(
              array('not_empty')
          ),
        );
    }
    
    public function labels() {
        return array(
            'code'         => 'Area Code',
            'name'       => 'Area Name',
            'effectivity_date'    => 'Default Date',
        );
    }
}
?>
