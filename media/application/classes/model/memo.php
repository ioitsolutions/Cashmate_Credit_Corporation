<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Memo extends ORM{
    
   protected  $_belongs_to = array(
        'employee'  => array ('model' => 'employee', 'foreign_key' => 'employee_id' ),
        'branch'    => array ('model' => 'branch', 'foreign_key' => 'branch_id' ),
        'creator'  => array ('model' => 'employee', 'foreign_key' => 'user_created' ),
    );
    
}
?>
