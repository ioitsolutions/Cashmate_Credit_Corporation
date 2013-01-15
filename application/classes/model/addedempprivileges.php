<?php defined('SYSPATH') or die('No direct script access.');
class Model_Addedempprivileges extends ORM {
    protected $_table_name = 'employee_menu_privileges';
    protected $_belongs_to = array(
        'employee' => array ('model'=>'employee','foreign_key'=>'employee_id'),
        'menu'=>array('model'=>'menu','foreign_key'=>'menu_id'),
        'privilege'=>array('model'=>'privilege','foreign_key'=>'privilege_id'));
    public function rules(){
    }
}