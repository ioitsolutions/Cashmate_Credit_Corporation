<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Bank extends ORM{
    
    protected $_table_name = 'bank_accounts';
    protected $_belongs_to = array('branch' => array ());
    
    public function rules(){
        
        return array(
          'account_no' => array(
              array('not_empty')
          ),
          'name' => array(
              array('not_empty')
          ),
          'effectivity_date' => array(
              array('not_empty')
          ),
        );
    }
    
    public function labels() {
        return array(
            'account_no'         => 'Bank Account No.',
            'name'       => 'Bank Name',
            'effectivity_date'    => 'Default Date',
        );
    }
}
?>
