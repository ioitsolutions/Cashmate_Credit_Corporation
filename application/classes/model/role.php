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
    
    public function roles()
    {
        return array(
            'name'=>array(
                array('not_empty')
            ),
        );
    }
}
