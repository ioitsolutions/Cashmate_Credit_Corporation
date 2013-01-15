<?php defined('SYSPATH') or die('No direct script access.');
class Model_Employee extends ORM {
    
    protected $_table_name = 'employees';
    protected $_belongs_to = array(
        'role' => array ('model'=>'role','foreign_key'=>'role_id'),
        'branch'=>array('model'=>'branch','foreign_key'=>'branch_id'),
        'area'=>array('model'=>'area','foreign_key'=>'area_id'));
    
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
