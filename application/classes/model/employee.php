<?php defined('SYSPATH') or die('No direct script access.');
class Model_Employee extends ORM {
    protected $_table_name = 'employees';
    protected $_belongs_to = array('employee' => array ());
    public function rules(){
        
        return array(
          'employee_id' => array(
              array('not_empty')
          ),
          'employee_password' => array(
              array('not_empty')
          ),
        );
    }
}
