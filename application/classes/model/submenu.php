<?php defined('SYSPATH') or die('No direct script access.');
class Model_Submenu extends ORM {
    protected $_table_name = 'sub_menu';
    protected $_belongs_to = array('submenu' => array ());
    public function rules(){
        
        return array(
          'submenu_id' => array(
              array('not_empty')
          ),
          'submenu_name' => array(
              array('not_empty')
          ),
        );
    }
}
