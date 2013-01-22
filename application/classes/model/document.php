<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Document extends ORM{
    
    protected $_table_name = 'documents';
    
     protected $_belongs_to = array(
        'area'  => array ('model' => 'area', 'foreign_key' => 'area_id' ),
         );
}
?>
