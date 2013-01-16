<?php defined('SYSPATH') or die('No direct script access.');
class Model_Menu extends ORM {
    protected $_table_name = 'menus';
    protected $_belongs_to = array('menus' => array ());
    public function rules(){
        
        return array(
          'id' => array(
              array('not_empty')
          ),
          'menu_name' => array(
              array('not_empty')
          ),
          'id' => array(
              array('not_empty')
          ),
        );
    }
    
    public function validate_add($arr)
    {
        return Validation::factory($arr)
            ->rule('menu', 'not_empty')
            ->rule('description', 'not_empty')
            ->rule('calendar', 'not_empty');
    }
    
    public function validate_update($arr)
    {
        return Validation::factory($arr)
            ->rule('menu', 'not_empty')
            ->rule('description', 'not_empty')
            ->rule('calendar', 'not_empty');
    }
}