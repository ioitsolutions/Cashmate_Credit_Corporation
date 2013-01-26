<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Loanapplicationappraisal extends ORM{
    
    protected $_table_name = 'loan_application_appraisals';
    
    protected $_belongs_to = array(
        'la'  => array ('model' => 'loanapplication', 'foreign_key' => 'loan_application_id' ),
        'employee'  => array ('model' => 'employee', 'foreign_key' => 'employee_id' ),
    );
    
}
?>
