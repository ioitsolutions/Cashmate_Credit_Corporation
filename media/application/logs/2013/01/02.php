<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-02 19:30:56 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'password' in 'where clause' [ SELECT `branch`.`branch_id` AS `branch_id`, `branch`.`branch_code` AS `branch_code`, `branch`.`branch_name` AS `branch_name`, `branch`.`branch_password` AS `branch_password`, `branch`.`branch_status` AS `branch_status`, `branch`.`web_status` AS `web_status`, `branch`.`update_ts` AS `update_ts`, `branch`.`update_user` AS `update_user`, `branch`.`minimum_quota` AS `minimum_quota`, `branch`.`effectivity_date` AS `effectivity_date` FROM `branches` AS `branch` WHERE `password` = '' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2013-01-02 19:30:56 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `branch`...', false, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(15): Kohana_ORM->find('id', 'name', 'code')
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2013-01-02 19:36:55 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_cashmate_v3.employee_roles' doesn't exist [ SHOW FULL COLUMNS FROM `employee_roles` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php:358
2013-01-02 19:36:55 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('employee_roles')
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(66): Kohana_ORM::factory('emprole')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php:358
2013-01-02 20:09:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_pass_value ~ APPPATH\classes\controller\login.php [ 87 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:87
2013-01-02 20:09:01 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 87, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:87