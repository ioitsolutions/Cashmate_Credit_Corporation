<?php defined('SYSPATH') or die('No direct script access.');
class Model_Employee extends ORM {
    
    protected $_table_name = 'employees';
    protected $_belongs_to = array('employee' => array ());
    
    public function rules(){
        
        return array(
          'id' => array(
              array('not_empty'),
              array('required'),
          ),
          'employee_password' => array(
              array('not_empty'),
              array('required'),
          ),
        );
    }
    public function employee_id($id)
    {
        return ORM::factory('employee', array('id' => $id))->loaded();
    }
}
