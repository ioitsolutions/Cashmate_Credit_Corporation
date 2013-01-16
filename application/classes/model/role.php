<?php defined('SYSPATH') or die('No direct script access.');
class Model_Role extends ORM {
    
    protected $_table_name = 'roles';
    protected $_belongs_to = array('role' => array ());
    
    public function rules(){
        
        return array(
          'role_password' => array(
              array('not_empty')
          ),
            'name'=>array(
                array('not_empty')
            ),
        );
    }
    
    public function validate_login($arr) {
        return Validation::factory($arr)
            ->rule('role_password', 'not_empty');
    }
    
    public function validate_update($arr) {
        return Validation::factory($arr)
            ->rule('role', 'not_empty')
            ->rule('new_password', 'not_empty')
            ->rule('validate_password', 'not_empty')
            ->rule('calendar', 'not_empty');
    }
    
    public function validate_add($arr) {
        return Validation::factory($arr)
            ->rule('role', 'not_empty')
            ->rule('new_password', 'not_empty')
            ->rule('validate_password', 'not_empty')
            ->rule('calendar', 'not_empty');
    }
    
    public function roles()
    {
        return array(
            'name'=>array(
                array('not_empty')
            ),
        );
    }
}
