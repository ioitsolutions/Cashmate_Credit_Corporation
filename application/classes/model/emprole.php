<?php defined('SYSPATH') or die('No direct script access.');
class Model_Emprole extends ORM {
    protected $_table_name = 'employee_roles';
    
    protected $_belongs_to = array(
        'employee'  => array ('model' => 'employee', 'foreign_key' => 'employee_id' ),
        'role'      => array ('model' => 'role', 'foreign_key' => 'role_id' ),
    );
    
    public function rules(){
        
        return array(
          'role_password' => array(
              array('not_empty')
          ),
        );
    }
}