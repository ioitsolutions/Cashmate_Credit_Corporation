<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_LoanApplicationCollateral extends ORM
{
    
    protected $_table_name = 'loan_application_collaterals';
    
    protected $_belongs_to = array(
        'laa'  => array ('model' => 'loanapplicationappraisal', 'foreign_key' => 'loan_application_appraisal_id' ),
    );
    
}
?>
