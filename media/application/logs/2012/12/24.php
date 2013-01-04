<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-24 00:45:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function Like() ~ APPPATH\classes\controller\login.php [ 23 ] in :
2012-12-24 00:45:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-24 00:49:06 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2012-12-24 00:49:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\wamp\www\Cas...', 33, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #88, 'branch_password')
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('branch_password')
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(26): Kohana_Database_Result->offsetGet('branch_password')
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in :
2012-12-24 01:07:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function CAST() ~ APPPATH\classes\controller\login.php [ 23 ] in :
2012-12-24 01:07:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-24 01:09:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: branch_id ~ APPPATH\classes\controller\login.php [ 24 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:24
2012-12-24 01:09:36 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 24, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:24
2012-12-24 01:10:36 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2012-12-24 01:10:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\wamp\www\Cas...', 33, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #88, 'branch_password')
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('branch_password')
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(27): Kohana_Database_Result->offsetGet('branch_password')
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in :
2012-12-24 01:24:53 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2012-12-24 01:24:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\wamp\www\Cas...', 33, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #88, 'branch_password')
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('branch_password')
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(27): Kohana_Database_Result->offsetGet('branch_password')
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in :
2012-12-24 02:00:28 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_cashmate_v3.logins' doesn't exist [ SHOW FULL COLUMNS FROM `logins` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php:358
2012-12-24 02:00:28 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('logins')
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(23): Kohana_ORM::factory('login')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php:358
2012-12-24 02:21:56 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_cashmate_v3.logins' doesn't exist [ SHOW FULL COLUMNS FROM `logins` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php:358
2012-12-24 02:21:56 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('logins')
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(23): Kohana_ORM::factory('login')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php:358
2012-12-24 02:43:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\controller\login.php [ 24 ] in :
2012-12-24 02:43:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-24 02:51:00 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\login.php [ 28 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:28
2012-12-24 02:51:00 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(28): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\Cas...', 28, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:28
2012-12-24 02:52:52 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\login.php [ 28 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:28
2012-12-24 02:52:52 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(28): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\Cas...', 28, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:28
2012-12-24 03:11:51 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in :
2012-12-24 03:11:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-24 03:12:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function alert() ~ APPPATH\classes\controller\login.php [ 30 ] in :
2012-12-24 03:12:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-24 03:13:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function alert() ~ APPPATH\classes\controller\login.php [ 30 ] in :
2012-12-24 03:13:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-24 03:15:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function alert() ~ APPPATH\classes\controller\login.php [ 30 ] in :
2012-12-24 03:15:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-24 03:16:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\classes\controller\login.php [ 30 ] in :
2012-12-24 03:16:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-24 03:59:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: branch_password ~ APPPATH\views\login\branch.php [ 27 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\login\branch.php:27
2012-12-24 03:59:14 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\login\branch.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 27, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\public.php(23): Kohana_View->__toString()
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\login\branch.php:27
2012-12-24 04:02:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: branch_id ~ APPPATH\views\login\branch.php [ 25 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\login\branch.php:25
2012-12-24 04:02:38 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\login\branch.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\Cas...', 25, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\public.php(23): Kohana_View->__toString()
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\login\branch.php:25
2012-12-24 04:17:43 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_cashmate_v3.logins' doesn't exist [ SHOW FULL COLUMNS FROM `logins` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php:358
2012-12-24 04:17:43 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('logins')
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(23): Kohana_ORM::factory('login')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php:358
2012-12-24 04:18:44 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_cashmate_v3.logins' doesn't exist [ SHOW FULL COLUMNS FROM `logins` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php:358
2012-12-24 04:18:44 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('logins')
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(17): Kohana_ORM::factory('login')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php:358
2012-12-24 04:26:23 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_cashmate_v3.logins' doesn't exist [ SHOW FULL COLUMNS FROM `logins` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php:358
2012-12-24 04:26:23 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('logins')
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(15): Kohana_ORM::factory('login')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php:358
2012-12-24 21:07:54 --- CRITICAL: Database_Exception [ 1146 ]: Table 'db_cashmate_v3.logins' doesn't exist [ SHOW FULL COLUMNS FROM `logins` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php:358
2012-12-24 21:07:54 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('logins')
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(15): Kohana_ORM::factory('login')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\MySQL.php:358
2012-12-24 21:09:20 --- CRITICAL: Kohana_Exception [ 0 ]: The count_all property does not exist in the Model_Login class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-24 21:09:20 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('count_all')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(17): Kohana_ORM->__get('count_all')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-24 21:36:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: branch_password ~ APPPATH\classes\controller\login.php [ 16 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:16
2012-12-24 21:36:28 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\Cas...', 16, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php:16
2012-12-24 21:37:48 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'employee_password' in 'where clause' [ SELECT `login`.`branch_id` AS `branch_id`, `login`.`branch_code` AS `branch_code`, `login`.`branch_name` AS `branch_name`, `login`.`branch_password` AS `branch_password`, `login`.`branch_status` AS `branch_status`, `login`.`web_status` AS `web_status`, `login`.`update_ts` AS `update_ts`, `login`.`update_user` AS `update_user`, `login`.`minimum_quota` AS `minimum_quota`, `login`.`effectivity_date` AS `effectivity_date` FROM `branches` AS `login` WHERE `employee_password` = '5f4dcc3b5aa765d61d8327deb882cf99' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-24 21:37:48 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `login`....', false, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(33): Kohana_ORM->find('first_name', 'middle_name', 'last_name', 'area_id')
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_employee()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-24 21:47:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH\classes\controller\login.php [ 33 ] in :
2012-12-24 21:47:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-24 22:13:05 --- CRITICAL: Kohana_Exception [ 0 ]: The count_all property does not exist in the Model_Branch class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-24 22:13:05 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('count_all')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\login.php(23): Kohana_ORM->__get('count_all')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(84): Controller_Login->action_branch()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-24 23:22:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\controller\login.php [ 40 ] in :
2012-12-24 23:22:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :