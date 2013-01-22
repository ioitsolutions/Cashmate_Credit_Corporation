<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Loanapproval extends Model{
    
    protected $_table_name = 'loan_approvals';
    
    protected $_belongs_to = array(
        'document'  => array ('model' => 'document', 'foreign_key' => 'document_id' ),
        'lrfa'      => array ('model' => 'loanrequestapproval', 'foreign_key' => 'loan_request_for_approval_id' ),
    );
}
?>
