<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Test_Rolemenuprivileges extends ORM{
    
    protected $_table_name = 'role_menu_privileges';
    
    protected $_belongs_to = array(
        'role'      => array ('model'=> 'test_role', 'foreign_key' => 'role_id'),
        'menu'      => array ('model'=> 'test_menu', 'foreign_key' => 'menu_id'),
        'privilege' => array ('model'=> 'test_privilege', 'foreign_key' => 'privilege_id')
        );
}
?>
