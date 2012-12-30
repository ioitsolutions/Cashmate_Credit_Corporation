<?php defined('SYSPATH') or die('No direct script access.');
class Model_Menuprivilege extends ORM {
    protected $_table_name = 'role_menu_privileges';
    protected $_belongs_to = array('empmenuprivilege' => array());
}