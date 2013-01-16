<?php defined('SYSPATH') or die('No direct script access.');
class Model_Branch extends ORM {
    
    protected $_table_name = 'branches';
    protected $_belongs_to = array('branches' => array ());
    
    public function rules(){
        
        return array(
          'code' => array(
              array('not_empty')
          ),
          'password' => array(
              array('not_empty')
          ),
            'name'=>array(
                array('not_empty')
            ),
        );
    }
    
    public function validate_login($arr) {
        return Validation::factory($arr)
            ->rule('branch_code', 'not_empty')
            ->rule('password', 'not_empty');
    }
    
    public function validate_changepassword($arr) {
        return Validation::factory($arr)
            ->rule('old_password', 'not_empty')
            ->rule('new_password', 'not_empty')
            ->rule('validate_password', 'not_empty');
    }
}
