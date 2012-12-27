<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Borrower extends ORM{
    
    public function rules(){
        
        return array(
          'first_name' => array(
              array('not_empty'),
              array('alpha_dash'),
          ),
          'middle_name' => array(
              array('not_empty'),
              array('alpha_dash'),
          ),
          'last_name' => array(
              array('not_empty'),
              array('alpha_dash'),
          ),
          'date_of_birth' => array(
              array('not_empty'),
          ),
        );
    }
    
    public function labels() {
        return array(
            'first_name'         => 'First Name',
            'middle_name'       => 'Middle Name',
            'last_name'    => 'Last Name',
            'date_of_birth'      => 'Date of Birth'
        );
    }
}
?>
