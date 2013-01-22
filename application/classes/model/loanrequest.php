<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Loanrequest extends ORM{
    
    protected $_table_name = 'loan_requests';
    
    protected $_belongs_to = array(
        'loan_application'  => array ('model' => 'loanapplication', 'foreign_key' => 'loan_application_id' ),
        'document'          => array ('model' => 'document', 'foreign_key' => 'document_id' ),
    );
    
    
   
}
?>
