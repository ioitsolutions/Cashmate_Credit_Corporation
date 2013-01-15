<?php defined('SYSPATH') or die('No direct script access.');
class Model_Menuprivilege extends ORM {
    protected $_table_name = 'role_menu_privileges';
    protected $_belongs_to = array(
        'role' => array ('model'=>'role','foreign_key'=>'role_id'),
        'menu'=>array('model'=>'menu','foreign_key'=>'menu_id'),
        'privilege'=>array('model'=>'privilege','foreign_key'=>'privilege_id'));
}