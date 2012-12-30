<?php defined('SYSPATH') or die('No direct script access.');
class Model_Branch extends ORM {
    protected $_table_name = 'branches';
    protected $_belongs_to = array('branches' => array ());
    public function rules(){
        
        return array(
          'branch_code' => array(
              array('not_empty')
          ),
          'branch_password' => array(
              array('not_empty')
          ),
        );
    }
}
