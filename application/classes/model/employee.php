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
          ),
          'employee_password' => array(
              array('not_empty'),
          ),
        );
    }
    
    public function validate_login($arr) {
        return Validation::factory($arr)
            ->rule('id', 'not_empty')
            ->rule('employee_password', 'not_empty');
    }
    
    public function validate_changepassword($arr)
    {
        return Validation::factory($arr)
            ->rule('old_password', 'not_empty')
            ->rule('new_password', 'not_empty')
            ->rule('validate_password', 'not_empty');
    }
    
    public function validate_add($arr)
    {
        return Validation::factory($arr)
            ->rule('f_name', 'not_empty')
            ->rule('m_name', 'not_empty')
            ->rule('l_name', 'not_empty')
            ->rule('c_number', 'not_empty')
            ->rule('address', 'not_empty')
            ->rule('calendar', 'not_empty')
            ->rule('new_password', 'not_empty')
            ->rule('validate_password', 'not_empty');
    }
    
    public function validate_update($arr)
    {
        return Validation::factory($arr)
            ->rule('f_name', 'not_empty')
            ->rule('m_name', 'not_empty')
            ->rule('l_name', 'not_empty')
            ->rule('c_number', 'not_empty')
            ->rule('address', 'not_empty')
            ->rule('calendar', 'not_empty');
    }
    
    public function employee_id($id)
    {
        return ORM::factory('employee', array('id' => $id))->loaded();
    }
}
