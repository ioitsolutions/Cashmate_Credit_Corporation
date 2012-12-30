<?php defined('SYSPATH') or die('No direct script access.');
class Model_Addemp extends ORM {
    protected $_table_name = 'employees';
    protected $_belongs_to = array('employees' => array ());
    public function rules(){
        
        return array(
          'id' => array(
              array('not_empty')
          ),
          'name' => array(
              array('not_empty')
          ),
        );
    }
}