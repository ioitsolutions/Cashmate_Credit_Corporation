<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Loanrequestapproval extends ORM{
    
    protected $_table_name = 'loan_requests_for_approvals';
    
    protected $_belongs_to = array(
        'document'      => array ('model' => 'document', 'foreign_key' => 'document_id' ),
        'loan_request'  => array ('model' => 'loanrequest', 'foreign_key' => 'loan_request_id' ),
    );
    
    
}
?>
