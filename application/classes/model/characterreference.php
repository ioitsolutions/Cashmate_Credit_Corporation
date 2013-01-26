<?php defined('SYSPATH') or die('No direct access allowed.');


class Model_Characterreference extends ORM{
       protected $_table_name = 'character_references';
    
       protected $_belongs_to = array(
         'loan_application'  => array ('model' => 'loanapplication', 'foreign_key' => 'loan_application_id' ),
        );
}
?>
