<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Business extends ORM{
    
    protected $_belongs_to = array(
        'borrower'  => array ('model' => 'borrower', 'foreign_key' => 'borrower_id' ),
         'relationship'  => array ('model' => 'relationship', 'foreign_key' => 'relationship_id' ),
         );
}
?>
