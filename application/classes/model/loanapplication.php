<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Loanapplication extends ORM{
    
    protected $_table_name = 'loan_applications';
    
    protected $_belongs_to = array(
        'borrower'  => array ('model' => 'borrower', 'foreign_key' => 'borrower_id' ),
        'document'  => array ('model' => 'document', 'foreign_key' => 'document_id' ),
        'area'  => array ('model' => 'area', 'foreign_key' => 'area_id' ),
    );
    
    protected $_has_many = array(
        'coborrower' => array(),
        );
}
?>
