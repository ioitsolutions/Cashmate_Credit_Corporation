<?php defined('SYSPATH') or die('No direct script access.');
class Model_Employeerole extends ORM {
    protected $_table_name = 'employee_roles';
    protected $_belongs_to = array(
        'employee'  => array ('model' => 'employee', 'foreign_key' => 'employee_id' ),
        'role'      => array ('model' => 'role', 'foreign_key' => 'role_id' ),
    );
}