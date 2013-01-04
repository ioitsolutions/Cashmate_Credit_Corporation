<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-28 09:37:21 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\orm\classes\Kohana\ORM.php [ 1097 ] in :
2012-12-28 09:37:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 09:42:03 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\orm\classes\Kohana\ORM.php [ 1097 ] in :
2012-12-28 09:42:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 09:43:20 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\authentication\role.php [ 9 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:9
2012-12-28 09:43:20 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(9): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\Cas...', 9, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:9
2012-12-28 09:46:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\controller\authentication\role.php [ 16 ] in :
2012-12-28 09:46:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 09:47:33 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\authentication\role.php [ 16 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:16
2012-12-28 09:47:33 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(16): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\Cas...', 16, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(9): Controller_Authentication_Role->get_role()
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:16
2012-12-28 09:48:28 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\authentication\role.php [ 16 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:16
2012-12-28 09:48:28 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(16): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\Cas...', 16, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(9): Controller_Authentication_Role->get_role()
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:16
2012-12-28 09:50:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::get_role() ~ APPPATH\classes\controller\authentication\role.php [ 10 ] in :
2012-12-28 09:50:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 09:50:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_role() ~ APPPATH\classes\controller\authentication\role.php [ 10 ] in :
2012-12-28 09:50:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 09:50:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_role() ~ APPPATH\classes\controller\authentication\role.php [ 10 ] in :
2012-12-28 09:50:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 09:51:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH\views\admin\authentication\role\edit.php [ 27 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:27
2012-12-28 09:51:38 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 27, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:27
2012-12-28 09:56:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\admin\authentication\role\edit.php [ 16 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:16
2012-12-28 09:56:34 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 16, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php(65): Kohana_View->__toString()
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:16
2012-12-28 09:57:55 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\authentication\role\edit.php [ 16 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:16
2012-12-28 09:57:55 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(16): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\Cas...', 16, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php(65): Kohana_View->__toString()
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:16
2012-12-28 09:58:30 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\authentication\role\edit.php [ 16 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:16
2012-12-28 09:58:30 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(16): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\Cas...', 16, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php(65): Kohana_View->__toString()
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:16
2012-12-28 10:06:33 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\admin\authentication\role\edit.php [ 15 ] in :
2012-12-28 10:06:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 10:08:58 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\controller\authentication\role.php [ 9 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:9
2012-12-28 10:08:58 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(9): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\wamp\www\Cas...', 9, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:9
2012-12-28 10:13:47 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\controller\authentication\role.php [ 9 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:9
2012-12-28 10:13:47 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(9): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\wamp\www\Cas...', 9, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:9
2012-12-28 10:22:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Template_Public' not found ~ APPPATH\classes\controller\login.php [ 3 ] in :
2012-12-28 10:22:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 10:22:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Template_Public' not found ~ APPPATH\classes\controller\login.php [ 3 ] in :
2012-12-28 10:22:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 10:31:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_login/branch' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-28 10:31:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 10:31:52 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_login/branch' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-28 10:31:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 10:33:12 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_cashmate_v3.logins' doesn't exist [ SHOW FULL COLUMNS FROM `logins` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php:358
2012-12-28 10:33:12 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('logins')
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(16): Kohana_ORM::factory('login')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php:358
2012-12-28 11:04:46 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') JOIN `employee` ON () JOIN `menu_privelege` ON () JOIN `menu` ON () JOIN `priv' at line 1 [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`role_password` AS `role_password`, `role`.`visible` AS `visible`, `role`.`user_credential` AS `user_credential`, `role`.`update_ts` AS `update_ts`, `role`.`update_user` AS `update_user` FROM `roles` AS `role` JOIN `employee_role` ON () JOIN `employee` ON () JOIN `menu_privelege` ON () JOIN `menu` ON () JOIN `privilege` ON (`employee`.`employee_id` = `00000000010`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:04:46 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(67): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:09:04 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') JOIN `employee` ON () JOIN `menu_privelege` ON () JOIN `menu` ON () JOIN `priv' at line 1 [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`role_password` AS `role_password`, `role`.`visible` AS `visible`, `role`.`user_credential` AS `user_credential`, `role`.`update_ts` AS `update_ts`, `role`.`update_user` AS `update_user` FROM `roles` AS `role` JOIN `employee_role` ON () JOIN `employee` ON () JOIN `menu_privelege` ON () JOIN `menu` ON () JOIN `privilege` ON (`employee`.`employee_id` = `00000000010`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:09:04 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(67): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:17:51 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_cashmate_v3.employee_role' doesn't exist [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`role_password` AS `role_password`, `role`.`visible` AS `visible`, `role`.`user_credential` AS `user_credential`, `role`.`update_ts` AS `update_ts`, `role`.`update_user` AS `update_user` FROM `roles` AS `role` JOIN `employee_role` ON (`role`.`id` = `employee_role`.`role_id`) JOIN `employee` ON (`employee_role`.`employee_id` = `employee`.`employee_id`) JOIN `menu_privelege` ON (`employee`.`employee_id` = `menu_privilege`.`employee_id`) JOIN `menu` ON (`menu_privilege`.`menu_id` = `menu`.`id`) JOIN `privilege` ON (`menu_privilege`.`privilege_id` = `privilege`.`id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:17:51 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:20:33 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_cashmate_v3.employee_role' doesn't exist [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`role_password` AS `role_password`, `role`.`visible` AS `visible`, `role`.`user_credential` AS `user_credential`, `role`.`update_ts` AS `update_ts`, `role`.`update_user` AS `update_user` FROM `roles` AS `role` JOIN `employee_role` ON (`role`.`id` = `employee_role`.`role_id`) JOIN `employee` ON (`employee_role`.`employee_id` = `employee`.`employee_id`) JOIN `menu_privelege` ON (`employee`.`employee_id` = `menu_privilege`.`employee_id`) JOIN `menu` ON (`menu_privilege`.`menu_id` = `menu`.`id`) JOIN `privilege` ON (`menu_privilege`.`privilege_id` = `privilege`.`id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:20:33 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:21:44 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_cashmate_v3.employee_role' doesn't exist [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`role_password` AS `role_password`, `role`.`visible` AS `visible`, `role`.`user_credential` AS `user_credential`, `role`.`update_ts` AS `update_ts`, `role`.`update_user` AS `update_user` FROM `roles` AS `role` JOIN `employee_role` ON (`role`.`id` = `employee_role`.`role_id`) JOIN `employee` ON (`employee_role`.`employee_id` = `employee`.`employee_id`) JOIN `menu_privelege` ON (`employee`.`employee_id` = `menu_privilege`.`employee_id`) JOIN `menu` ON (`menu_privilege`.`menu_id` = `menu`.`id`) JOIN `privilege` ON (`menu_privilege`.`privilege_id` = `privilege`.`id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:21:44 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:22:50 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_cashmate_v3.employee_role' doesn't exist [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`role_password` AS `role_password`, `role`.`visible` AS `visible`, `role`.`user_credential` AS `user_credential`, `role`.`update_ts` AS `update_ts`, `role`.`update_user` AS `update_user` FROM `roles` AS `role` JOIN `employee_role` ON (`role`.`id` = `employee_role`.`role_id`) JOIN `employee` ON (`employee_role`.`employee_id` = `employee`.`employee_id`) JOIN `menuprivelege` ON (`employee`.`employee_id` = `menu_privilege`.`employee_id`) JOIN `menu` ON (`menuprivilege`.`menu_id` = `menu`.`id`) JOIN `privilege` ON (`menu_privilege`.`privilege_id` = `privilege`.`id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:22:50 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:24:52 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_cashmate_v3.employee_role' doesn't exist [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`role_password` AS `role_password`, `role`.`visible` AS `visible`, `role`.`user_credential` AS `user_credential`, `role`.`update_ts` AS `update_ts`, `role`.`update_user` AS `update_user` FROM `roles` AS `role` JOIN `employee_role` ON (`role`.`id` = `employee_role`.`role_id`) JOIN `employee` ON (`employeerole`.`employee_id` = `employee`.`employee_id`) JOIN `menuprivelege` ON (`employee`.`employee_id` = `menu_privilege`.`employee_id`) JOIN `menu` ON (`menuprivilege`.`menu_id` = `menu`.`id`) JOIN `privilege` ON (`menu_privilege`.`privilege_id` = `privilege`.`id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:24:52 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:42:42 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php on line 77 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1846 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:1846
2012-12-28 11:42:42 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1846): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\Cas...', 1846, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_ORM->where('employee.employ...', '00000000010')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:1846
2012-12-28 11:43:34 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ROLE.ID JOIN `employee_role` ON () EMPLOYEEROLE.EMPLOYEE_ID JOIN `employee` ON (' at line 1 [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`role_password` AS `role_password`, `role`.`visible` AS `visible`, `role`.`user_credential` AS `user_credential`, `role`.`update_ts` AS `update_ts`, `role`.`update_user` AS `update_user` FROM `roles` AS `role` ROLE.ID JOIN `employee_role` ON () EMPLOYEEROLE.EMPLOYEE_ID JOIN `employee` ON () EMPLOYEE.EMPLOYEE_ID JOIN `menuprivelege` ON () MENUPRIVILEGE.MENU_ID JOIN `menu` ON () MENU_PRIVILEGE.PRIVILEGE_ID JOIN `privilege` ON () WHERE `employee`.`employee_id` = '00000000010' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:43:34 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(79): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:44:47 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ROLE.ID JOIN `employeerole` ON () EMPLOYEEROLE.EMPLOYEE_ID JOIN `employee` ON ()' at line 1 [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`role_password` AS `role_password`, `role`.`visible` AS `visible`, `role`.`user_credential` AS `user_credential`, `role`.`update_ts` AS `update_ts`, `role`.`update_user` AS `update_user` FROM `roles` AS `role` ROLE.ID JOIN `employeerole` ON () EMPLOYEEROLE.EMPLOYEE_ID JOIN `employee` ON () EMPLOYEE.EMPLOYEE_ID JOIN `menuprivelege` ON () MENUPRIVILEGE.MENU_ID JOIN `menu` ON () MENUPRIVILEGE.PRIVILEGE_ID JOIN `privilege` ON () WHERE `employee`.`employee_id` = '00000000010' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 11:44:47 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(79): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 12:10:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_employeerole' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-28 12:10:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 12:12:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_menuprivelege' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-28 12:12:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 12:13:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_menuprivelege' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-28 12:13:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 12:15:16 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ROLE.ID JOIN `` ON () EMPLOYEEROLE.EMPLOYEE_ID JOIN `` ON () EMPLOYEE.EMPLOYEE_I' at line 1 [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`role_password` AS `role_password`, `role`.`visible` AS `visible`, `role`.`user_credential` AS `user_credential`, `role`.`update_ts` AS `update_ts`, `role`.`update_user` AS `update_user` FROM `roles` AS `role` ROLE.ID JOIN `` ON () EMPLOYEEROLE.EMPLOYEE_ID JOIN `` ON () EMPLOYEE.EMPLOYEE_ID JOIN `` ON () MENUPRIVILEGE.MENU_ID JOIN `` ON () MENUPRIVILEGE.PRIVILEGE_ID JOIN `` ON () WHERE `employee`.`employee_id` = '00000000010' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 12:15:16 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(78): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 12:20:21 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`role_password` AS `role_password`, `role`.`visible` AS `visible`, `role`.`user_credential` AS `user_credential`, `role`.`update_ts` AS `update_ts`, `role`.`update_user` AS `update_user` FROM `roles` AS `role` JOIN `` ON (`role`.`id` = `employeerole`.`role_id`) JOIN `` ON (`employeerole`.`employee_id` = `employee`.`employee_id`) JOIN `` ON (`employee`.`employee_id` = `menu_privilege`.`employee_id`) JOIN `` ON (`menuprivilege`.`menu_id` = `menu`.`id`) JOIN `` ON (`menuprivilege`.`privilege_id` = `privilege`.`id`) WHERE `employee`.`employee_id` = '00000000010' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 12:20:21 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(83): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 12:22:32 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`role_password` AS `role_password`, `role`.`visible` AS `visible`, `role`.`user_credential` AS `user_credential`, `role`.`update_ts` AS `update_ts`, `role`.`update_user` AS `update_user` FROM `roles` AS `role` JOIN `` ON (`role`.`id` = `employeerole`.`role_id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 12:22:32 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(74): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 12:23:48 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`role_password` AS `role_password`, `role`.`visible` AS `visible`, `role`.`user_credential` AS `user_credential`, `role`.`update_ts` AS `update_ts`, `role`.`update_user` AS `update_user` FROM `roles` AS `role` JOIN `` ON (`role`.`id` = `employeerole`.`role_id`) JOIN `` ON (`employeerole`.`employee_id` = `employee`.`employee_id`) JOIN `` ON (`employee`.`employee_id` = `menu_privilege`.`employee_id`) JOIN `` ON (`menuprivilege`.`menu_id` = `menu`.`id`) JOIN `` ON (`menuprivilege`.`privilege_id` = `privilege`.`id`) WHERE `employee`.`employee_id` = '00000000010' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 12:23:48 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(83): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 12:25:59 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`role_password` AS `role_password`, `role`.`visible` AS `visible`, `role`.`user_credential` AS `user_credential`, `role`.`update_ts` AS `update_ts`, `role`.`update_user` AS `update_user` FROM `roles` AS `role` JOIN `` ON (`role`.`id` = `employeerole`.`role_id`) JOIN `` ON (`employeerole`.`employee_id` = `employee`.`employee_id`) JOIN `` ON (`employee`.`employee_id` = `menu_privilege`.`employee_id`) JOIN `` ON (`menuprivilege`.`menu_id` = `menu`.`id`) JOIN `` ON (`menuprivilege`.`privilege_id` = `privilege`.`id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 12:25:59 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(82): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 12:29:39 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'employeerole.employee_id' in 'on clause' [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`role_password` AS `role_password`, `role`.`visible` AS `visible`, `role`.`user_credential` AS `user_credential`, `role`.`update_ts` AS `update_ts`, `role`.`update_user` AS `update_user` FROM `roles` AS `role` JOIN `employee_roles` ON (`role`.`id` = `employee_roles`.`role_id`) JOIN `employees` ON (`employeerole`.`employee_id` = `employees`.`employee_id`) JOIN `employee_menu_privileges` ON (`employee`.`employee_id` = `employee_menu_privileges`.`employee_id`) JOIN `menus` ON (`menuprivilege`.`menu_id` = `menus`.`id`) JOIN `privileges` ON (`menuprivilege`.`privilege_id` = `privileges`.`id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 12:29:39 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(82): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 12:30:16 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'employee.employee_id' in 'on clause' [ SELECT `role`.`id` AS `id`, `role`.`name` AS `name`, `role`.`role_password` AS `role_password`, `role`.`visible` AS `visible`, `role`.`user_credential` AS `user_credential`, `role`.`update_ts` AS `update_ts`, `role`.`update_user` AS `update_user` FROM `roles` AS `role` JOIN `employee_roles` ON (`role`.`id` = `employee_roles`.`role_id`) JOIN `employees` ON (`employee_roles`.`employee_id` = `employees`.`employee_id`) JOIN `employee_menu_privileges` ON (`employee`.`employee_id` = `employee_menu_privileges`.`employee_id`) JOIN `menus` ON (`menuprivilege`.`menu_id` = `menus`.`id`) JOIN `privileges` ON (`menuprivilege`.`privilege_id` = `privileges`.`id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 12:30:16 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `role`.`...', 'Model_Role', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(82): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 12:31:21 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\login.php [ 93 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:93
2012-12-28 12:31:21 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(93): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\Cas...', 93, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:93
2012-12-28 12:44:26 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Role as array ~ APPPATH\classes\controller\login.php [ 80 ] in :
2012-12-28 12:44:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 13:02:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function find_all() ~ APPPATH\classes\controller\login.php [ 66 ] in :
2012-12-28 13:02:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 13:02:58 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role_id ~ APPPATH\classes\controller\login.php [ 67 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:67
2012-12-28 13:02:58 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(67): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\Cas...', 67, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:67
2012-12-28 13:05:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\classes\controller\login.php [ 66 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:66
2012-12-28 13:05:45 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 66, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:66
2012-12-28 13:09:35 --- CRITICAL: Kohana_Exception [ 0 ]: The employee_menu_privilege property does not exist in the Model_Menuprivilege class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 13:09:35 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('employee_menu_p...')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_ORM->__get('employee_menu_p...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 13:10:11 --- CRITICAL: Kohana_Exception [ 0 ]: The menuprivilege property does not exist in the Model_Menuprivilege class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 13:10:11 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('menuprivilege')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_ORM->__get('menuprivilege')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 13:11:07 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant employee_id - assumed 'employee_id' ~ APPPATH\classes\controller\login.php [ 77 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:77
2012-12-28 13:11:07 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\Cas...', 77, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:77
2012-12-28 13:31:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\views\template\user.php [ 48 ] in :
2012-12-28 13:31:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 13:32:35 --- CRITICAL: Kohana_Exception [ 0 ]: The menu_name property does not exist in the Model_Menuprivilege class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 13:32:35 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('menu_name')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_ORM->__get('menu_name')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 13:36:07 --- CRITICAL: Kohana_Exception [ 0 ]: The menu_name property does not exist in the Model_Menuprivilege class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 13:36:07 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('menu_name')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_ORM->__get('menu_name')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 13:39:38 --- CRITICAL: Kohana_Exception [ 0 ]: The menus property does not exist in the Model_Menuprivilege class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 13:39:38 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('menus')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_ORM->__get('menus')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 13:42:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_branch' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-28 13:42:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 13:43:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_branch' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-28 13:43:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 13:43:36 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_branch' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-28 13:43:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 13:44:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_branch' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-28 13:44:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 13:59:58 --- CRITICAL: Kohana_Exception [ 0 ]: The menu_name property does not exist in the Model_Menuprivilege class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 13:59:58 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('menu_name')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_ORM->__get('menu_name')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:05:05 --- CRITICAL: Kohana_Exception [ 0 ]: The menu_name property does not exist in the Model_Menuprivilege class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:05:05 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('menu_name')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_ORM->__get('menu_name')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:06:53 --- CRITICAL: Kohana_Exception [ 0 ]: The menu_name property does not exist in the Model_Menuprivilege class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:06:53 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('menu_name')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_ORM->__get('menu_name')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:23:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_privileges' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-28 14:23:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 14:29:43 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'branch.id' in 'where clause' [ SELECT `branch`.`branch_id` AS `branch_id`, `branch`.`branch_code` AS `branch_code`, `branch`.`branch_name` AS `branch_name`, `branch`.`branch_password` AS `branch_password`, `branch`.`branch_status` AS `branch_status`, `branch`.`web_status` AS `web_status`, `branch`.`update_ts` AS `update_ts`, `branch`.`update_user` AS `update_user`, `branch`.`minimum_quota` AS `minimum_quota`, `branch`.`effectivity_date` AS `effectivity_date` FROM `branches` AS `branch` WHERE `branch`.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 14:29:43 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `branch`...', false, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(637): Kohana_ORM->find()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('branch')
#5 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(21): Kohana_ORM->__get('branch')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php(69): Kohana_View->__toString()
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#12 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#13 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#14 [internal function]: Kohana_Controller->execute()
#15 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bulletin_Announcement))
#16 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#19 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 14:29:49 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Menu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:29:49 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Result.php(157): Kohana_ORM->__get('name')
#2 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(22): Kohana_Database_Result->as_array('id', 'name')
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Controller_Authentication_Role->get_menu()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:30:28 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\login.php [ 78 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:78
2012-12-28 14:30:28 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(78): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\Cas...', 78, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:78
2012-12-28 14:31:03 --- CRITICAL: Kohana_Exception [ 0 ]: The menu_name property does not exist in the Model_Menuprivilege class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:31:03 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('menu_name')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(87): Kohana_ORM->__get('menu_name')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:34:44 --- CRITICAL: Kohana_Exception [ 0 ]: The menu_name property does not exist in the Model_Menuprivilege class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:34:44 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('menu_name')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(87): Kohana_ORM->__get('menu_name')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:36:02 --- CRITICAL: Kohana_Exception [ 0 ]: The menu_name property does not exist in the Model_Menuprivilege class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:36:02 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('menu_name')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(87): Kohana_ORM->__get('menu_name')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:37:06 --- CRITICAL: Kohana_Exception [ 0 ]: The menu_name property does not exist in the Model_Menuprivilege class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:37:06 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('menu_name')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(88): Kohana_ORM->__get('menu_name')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:39:08 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Menu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:39:08 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Result.php(157): Kohana_ORM->__get('name')
#2 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(22): Kohana_Database_Result->as_array('id', 'name')
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Controller_Authentication_Role->get_menu()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 14:55:13 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\login.php [ 79 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:79
2012-12-28 14:55:13 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(79): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\Cas...', 79, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:79
2012-12-28 14:58:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH\classes\controller\login.php [ 79 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:79
2012-12-28 14:58:35 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 79, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:79
2012-12-28 14:59:01 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php on line 82 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1846 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:1846
2012-12-28 14:59:01 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1846): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\Cas...', 1846, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(82): Kohana_ORM->where(false)
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:1846
2012-12-28 15:12:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\classes\controller\login.php [ 81 ] in :
2012-12-28 15:12:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 15:38:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Login::get_links1() ~ APPPATH\classes\controller\template\login.php [ 11 ] in :
2012-12-28 15:38:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 15:39:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: links1 ~ APPPATH\views\template\user.php [ 42 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php:42
2012-12-28 15:39:24 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 42, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php:42
2012-12-28 15:44:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH\classes\controller\login.php [ 80 ] in :
2012-12-28 15:44:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 15:47:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\classes\controller\login.php [ 80 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:80
2012-12-28 15:47:43 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 80, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:80
2012-12-28 15:48:09 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$menu_name ~ APPPATH\classes\controller\login.php [ 80 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:80
2012-12-28 15:48:09 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(80): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\Cas...', 80, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:80
2012-12-28 15:52:47 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'menu_name' in 'field list' [ SELECT `menu_name`, `id`, `menu`.`id` AS `id`, `menu`.`module_name` AS `module_name`, `menu`.`description` AS `description`, `menu`.`date_modified` AS `date_modified` FROM `menus` AS `menu` WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 15:52:47 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `menu_na...', 'Model_Menu', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(79): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 15:53:04 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'menu_name' in 'field list' [ SELECT `menu_name`, `id`, `menu`.`id` AS `id`, `menu`.`module_name` AS `module_name`, `menu`.`description` AS `description`, `menu`.`date_modified` AS `date_modified` FROM `menus` AS `menu` WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 15:53:04 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `menu_na...', 'Model_Menu', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(79): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 15:58:30 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Menu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 15:58:30 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Result.php(157): Kohana_ORM->__get('name')
#2 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(22): Kohana_Database_Result->as_array('id', 'name')
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Controller_Authentication_Role->get_menu()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 16:00:13 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Menu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 16:00:13 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Result.php(157): Kohana_ORM->__get('name')
#2 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(22): Kohana_Database_Result->as_array('id', 'name')
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Controller_Authentication_Role->get_menu()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 16:01:11 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Menu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 16:01:11 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Result.php(157): Kohana_ORM->__get('name')
#2 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(22): Kohana_Database_Result->as_array('id', 'name')
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Controller_Authentication_Role->get_menu()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 16:10:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\template\user.php [ 47 ] in :
2012-12-28 16:10:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 16:26:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_privilege ~ APPPATH\classes\controller\login.php [ 76 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:76
2012-12-28 16:26:08 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 76, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:76
2012-12-28 16:30:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function isEmpty() ~ APPPATH\classes\controller\login.php [ 77 ] in :
2012-12-28 16:30:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 16:31:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function isEmpty() ~ APPPATH\classes\controller\login.php [ 77 ] in :
2012-12-28 16:31:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 16:31:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function isEmpty() ~ APPPATH\classes\controller\login.php [ 77 ] in :
2012-12-28 16:31:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 17:00:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'id' in 'where clause' [ SELECT `menu_name`, `menu_id`, `menu`.`menu_id` AS `menu_id`, `menu`.`menu_name` AS `menu_name`, `menu`.`description` AS `description`, `menu`.`date_modified` AS `date_modified` FROM `menus` AS `menu` WHERE `id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 17:00:46 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `menu_na...', 'Model_Menu', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(80): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 17:01:28 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Menu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 17:01:28 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(84): Kohana_ORM->__get('id')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 17:02:03 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Menu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 17:02:03 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(84): Kohana_ORM->__get('id')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 17:40:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pass_value ~ APPPATH\classes\controller\login.php [ 87 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:87
2012-12-28 17:40:18 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 87, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:87
2012-12-28 17:41:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pass_value ~ APPPATH\classes\controller\login.php [ 87 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:87
2012-12-28 17:41:15 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 87, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:87
2012-12-28 17:41:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pass_value ~ APPPATH\classes\controller\login.php [ 87 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:87
2012-12-28 17:41:41 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 87, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:87
2012-12-28 17:42:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pass_value ~ APPPATH\classes\controller\login.php [ 87 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:87
2012-12-28 17:42:18 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 87, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:87
2012-12-28 17:43:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pass_value ~ APPPATH\classes\controller\login.php [ 87 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:87
2012-12-28 17:43:04 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 87, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:87
2012-12-28 17:45:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pass_value ~ APPPATH\classes\controller\login.php [ 88 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:88
2012-12-28 17:45:54 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 88, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:88
2012-12-28 17:51:16 --- CRITICAL: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\classes\controller\login.php [ 89 ] in :
2012-12-28 17:51:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 17:52:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: submenu ~ APPPATH\classes\controller\login.php [ 91 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:91
2012-12-28 17:52:39 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 91, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:91
2012-12-28 17:54:00 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\login.php [ 92 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:92
2012-12-28 17:54:00 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(92): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\Cas...', 92, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:92
2012-12-28 17:54:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: submenu ~ APPPATH\classes\controller\login.php [ 92 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:92
2012-12-28 17:54:33 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(92): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 92, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:92
2012-12-28 17:54:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: submenu ~ APPPATH\classes\controller\login.php [ 92 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:92
2012-12-28 17:54:51 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(92): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 92, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:92
2012-12-28 17:55:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: submenu ~ APPPATH\classes\controller\login.php [ 91 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:91
2012-12-28 17:55:41 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 91, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:91
2012-12-28 17:56:29 --- CRITICAL: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\classes\controller\login.php [ 98 ] in :
2012-12-28 17:56:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 18:50:49 --- CRITICAL: Kohana_Exception [ 0 ]: The menu_name property does not exist in the Model_Submenu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 18:50:49 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('menu_name')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(89): Kohana_ORM->__get('menu_name')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 19:03:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\classes\controller\login.php [ 69 ] in :
2012-12-28 19:03:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 19:30:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_pass_value ~ APPPATH\classes\controller\login.php [ 81 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:81
2012-12-28 19:30:07 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(81): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 81, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:81
2012-12-28 19:32:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_pass_value ~ APPPATH\classes\controller\login.php [ 80 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:80
2012-12-28 19:32:48 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 80, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:80
2012-12-28 19:49:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\template\user.php [ 45 ] in :
2012-12-28 19:49:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 19:50:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\template\user.php [ 45 ] in :
2012-12-28 19:50:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 19:50:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\views\template\user.php [ 46 ] in :
2012-12-28 19:50:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 20:07:49 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\template\user.php [ 48 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php:48
2012-12-28 20:07:49 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php(48): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\Cas...', 48, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php:48
2012-12-28 20:16:30 --- CRITICAL: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\classes\controller\login.php [ 78 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:78
2012-12-28 20:16:30 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(78): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\Cas...', 78, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:78
2012-12-28 20:27:38 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\template\user.php [ 46 ] in :
2012-12-28 20:27:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 20:27:56 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\template\user.php [ 46 ] in :
2012-12-28 20:27:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 20:34:07 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\login.php [ 77 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:77
2012-12-28 20:34:07 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\Cas...', 77, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:77
2012-12-28 20:55:52 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'DISTINCTmenu_name' in 'field list' [ SELECT `DISTINCTmenu_name`, `menu_id`, `menu`.`menu_id` AS `menu_id`, `menu`.`menu_name` AS `menu_name`, `menu`.`description` AS `description`, `menu`.`date_modified` AS `date_modified` FROM `menus` AS `menu` WHERE `menu_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 20:55:52 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `DISTINC...', 'Model_Menu', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(74): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 21:16:41 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant TRU - assumed 'TRU' ~ APPPATH\classes\controller\login.php [ 78 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:78
2012-12-28 21:16:41 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(78): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\Cas...', 78, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:78
2012-12-28 21:19:19 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'DISTINCT menu_name' in 'field list' [ SELECT `DISTINCT menu_name`, `menu_id`, `menu`.`menu_id` AS `menu_id`, `menu`.`menu_name` AS `menu_name`, `menu`.`description` AS `description`, `menu`.`date_modified` AS `date_modified` FROM `menus` AS `menu` WHERE `menu_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 21:19:19 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `DISTINC...', 'Model_Menu', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(74): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-28 21:36:59 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$menu_name ~ APPPATH\classes\controller\login.php [ 77 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:77
2012-12-28 21:36:59 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(77): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\Cas...', 77, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_role()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:77
2012-12-28 21:43:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\template\user.php [ 61 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php:61
2012-12-28 21:43:03 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 61, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php:61
2012-12-28 21:53:36 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Menu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 21:53:36 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id')
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Result.php(157): Kohana_ORM->__get('id')
#2 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(22): Kohana_Database_Result->as_array('id', 'menu_name')
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Controller_Authentication_Role->get_menu()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 21:54:29 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Menu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 21:54:29 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id')
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Result.php(157): Kohana_ORM->__get('id')
#2 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(22): Kohana_Database_Result->as_array('id', 'menu_name')
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Controller_Authentication_Role->get_menu()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 21:55:18 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Menu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 21:55:18 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id')
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Result.php(157): Kohana_ORM->__get('id')
#2 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(22): Kohana_Database_Result->as_array('id', 'menu_name')
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Controller_Authentication_Role->get_menu()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 21:59:26 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Menu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 21:59:26 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id')
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Result.php(157): Kohana_ORM->__get('id')
#2 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(22): Kohana_Database_Result->as_array('id', 'menu_name')
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Controller_Authentication_Role->get_menu()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 22:00:28 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Menu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 22:00:28 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id')
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Result.php(157): Kohana_ORM->__get('id')
#2 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(22): Kohana_Database_Result->as_array('id', 'menu_name')
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Controller_Authentication_Role->get_menu()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 22:01:26 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Menu class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 22:01:26 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id')
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Result.php(157): Kohana_ORM->__get('id')
#2 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(22): Kohana_Database_Result->as_array('id', 'menu_name')
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Controller_Authentication_Role->get_menu()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-28 22:20:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Loan_Create::get_links2() ~ APPPATH\classes\controller\template\User.php [ 13 ] in :
2012-12-28 22:20:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 22:24:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Loan_Create::get_links() ~ APPPATH\classes\controller\template\User.php [ 12 ] in :
2012-12-28 22:24:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 22:24:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: link1 ~ APPPATH\views\template\user.php [ 51 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php:51
2012-12-28 22:24:48 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 51, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Loan_Create))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php:51
2012-12-28 22:49:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Loan_Send::get_loan_links() ~ APPPATH\classes\controller\loan\send.php [ 10 ] in :
2012-12-28 22:49:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 22:49:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Loan_Approval::get_loan_links() ~ APPPATH\classes\controller\loan\approval.php [ 10 ] in :
2012-12-28 22:49:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 22:51:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Loan_Check::get_loan_links() ~ APPPATH\classes\controller\loan\check.php [ 10 ] in :
2012-12-28 22:51:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 22:51:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Loan_Voucher::get_loan_links() ~ APPPATH\classes\controller\loan\voucher.php [ 10 ] in :
2012-12-28 22:51:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 22:51:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Loan_Collection::get_loan_links() ~ APPPATH\classes\controller\loan\collection.php [ 10 ] in :
2012-12-28 22:51:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-28 22:52:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Loan_Send::get_loan_links() ~ APPPATH\classes\controller\loan\send.php [ 10 ] in :
2012-12-28 22:52:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :