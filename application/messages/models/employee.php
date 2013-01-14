<?php defined('SYSPATH') or die('No direct script access.');
return array(
    'id' => array
        (
        'required'=>'Employee ID requires a value',
        'not_empty'=>'Employee ID must not be empty'
        ),
    'employee_password' => array
        (
        'required'=>'Employee password requires a value',
        'not_empty'=>'Employee password must not be empty'
        ),
);
?>
