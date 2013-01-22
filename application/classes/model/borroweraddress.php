<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Borroweraddress extends ORM{
     protected $_table_name = 'borrowers_addresses';
     
     protected $_belongs_to = array(
         'area'      => array ('model' => 'area', 'foreign_key' => 'area_id' ),
         'borrower'  => array ('model' => 'borrower', 'foreign_key' => 'borrower_id' ),
         );
}
?>
