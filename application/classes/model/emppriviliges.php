<?php defined('SYSPATH') or die('No direct script access.');
class Model_Emppriviliges extends ORM {
    protected $_table_name = 'role_menu_privileges';
    protected $_belongs_to = array(
        'role' => array ('model'=>'role','foreign_key'=>'role_id'),
        'menu'=>array('model'=>'menu','foreign_key'=>'menu_id'),
        'privilege'=>array('model'=>'privilege','foreign_key'=>'privilege_id'));
    public function rules(){
         return array(
          'id' => array(
              array('not_empty')
          ),
          'employee_id'=>array(
              array('not_empty')
          ),
          'role_id' => array(
              array('not_empty')
          ),
          'menu_id' => array(
              array('not_empty')
          ),
          'privilege_id' => array(
              array('not_empty')
          ),
          'date_modified' => array(
              array('not_empty')
          ),
        );
    }
}