<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Coborrower extends ORM{
    
    protected $_table_name = 'co_borrowers';
    
    protected $_belongs_to = array(
         'loan_application'  => array ('model' => 'loanapplication', 'foreign_key' => 'loan_application_id' ),
        );
}
?>
