<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Otherloan extends ORM{
    
    protected $_table_name = 'other_loans';
    
    protected $_belongs_to = array(
        'loan_application'  => array ('model' => 'loanapplication', 'foreign_key' => 'loan_application_id' ),
    );
}

?>
