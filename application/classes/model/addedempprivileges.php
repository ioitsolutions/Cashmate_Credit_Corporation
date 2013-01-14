<?php defined('SYSPATH') or die('No direct script access.');
class Model_Addedempprivileges extends ORM {
    protected $_table_name = 'employee_menu_privileges';
    protected $_belongs_to = array('employee_menu_privileges' => array ());
    public function rules(){
    }
}