<?php defined('SYSPATH') or die('No direct script access.');
class Model_Emprole extends ORM {
    protected $_table_name = 'employee_roles';
    protected $_belongs_to = array('emprole' => array ());
    public function rules(){
        
        return array(
          'role_password' => array(
              array('not_empty')
          ),
        );
    }
}