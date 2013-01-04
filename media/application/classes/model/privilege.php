<?php defined('SYSPATH') or die('No direct script access.');
class Model_Privilege extends ORM {
    protected $_table_name = 'privileges';
    protected $_belongs_to = array('privileges' => array ());
}