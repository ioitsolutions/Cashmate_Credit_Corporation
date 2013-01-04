<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-26 18:12:54 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'branch.id' in 'where clause' [ SELECT `branch`.`branch_id` AS `branch_id`, `branch`.`branch_code` AS `branch_code`, `branch`.`branch_name` AS `branch_name`, `branch`.`branch_password` AS `branch_password`, `branch`.`branch_status` AS `branch_status`, `branch`.`web_status` AS `web_status`, `branch`.`update_ts` AS `update_ts`, `branch`.`update_user` AS `update_user`, `branch`.`minimum_quota` AS `minimum_quota`, `branch`.`effectivity_date` AS `effectivity_date` FROM `branches` AS `branch` WHERE `branch`.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-26 18:12:54 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `branch`...', false, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(637): Kohana_ORM->find()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('branch')
#5 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(21): Kohana_ORM->__get('branch')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(61): Kohana_View->__toString()
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
2012-12-26 18:12:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Authentication_Role::get_authentication_links() ~ APPPATH\classes\controller\authentication\role.php [ 9 ] in :
2012-12-26 18:12:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 18:13:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Template_Employee' not found ~ APPPATH\classes\controller\loan\create.php [ 3 ] in :
2012-12-26 18:13:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 18:14:22 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'branch.id' in 'where clause' [ SELECT `branch`.`branch_id` AS `branch_id`, `branch`.`branch_code` AS `branch_code`, `branch`.`branch_name` AS `branch_name`, `branch`.`branch_password` AS `branch_password`, `branch`.`branch_status` AS `branch_status`, `branch`.`web_status` AS `web_status`, `branch`.`update_ts` AS `update_ts`, `branch`.`update_user` AS `update_user`, `branch`.`minimum_quota` AS `minimum_quota`, `branch`.`effectivity_date` AS `effectivity_date` FROM `branches` AS `branch` WHERE `branch`.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-26 18:14:22 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `branch`...', false, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(637): Kohana_ORM->find()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('branch')
#5 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(21): Kohana_ORM->__get('branch')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(61): Kohana_View->__toString()
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
2012-12-26 18:16:47 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'branch.id' in 'where clause' [ SELECT `branch`.`branch_id` AS `branch_id`, `branch`.`branch_code` AS `branch_code`, `branch`.`branch_name` AS `branch_name`, `branch`.`branch_password` AS `branch_password`, `branch`.`branch_status` AS `branch_status`, `branch`.`web_status` AS `web_status`, `branch`.`update_ts` AS `update_ts`, `branch`.`update_user` AS `update_user`, `branch`.`minimum_quota` AS `minimum_quota`, `branch`.`effectivity_date` AS `effectivity_date` FROM `branches` AS `branch` WHERE `branch`.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-26 18:16:47 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `branch`...', false, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(637): Kohana_ORM->find()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('branch')
#5 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(21): Kohana_ORM->__get('branch')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(61): Kohana_View->__toString()
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
2012-12-26 18:16:53 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'branch.id' in 'where clause' [ SELECT `branch`.`branch_id` AS `branch_id`, `branch`.`branch_code` AS `branch_code`, `branch`.`branch_name` AS `branch_name`, `branch`.`branch_password` AS `branch_password`, `branch`.`branch_status` AS `branch_status`, `branch`.`web_status` AS `web_status`, `branch`.`update_ts` AS `update_ts`, `branch`.`update_user` AS `update_user`, `branch`.`minimum_quota` AS `minimum_quota`, `branch`.`effectivity_date` AS `effectivity_date` FROM `branches` AS `branch` WHERE `branch`.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-26 18:16:53 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `branch`...', false, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(637): Kohana_ORM->find()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('branch')
#5 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(21): Kohana_ORM->__get('branch')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(61): Kohana_View->__toString()
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
2012-12-26 18:20:37 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'branch.id' in 'where clause' [ SELECT `branch`.`branch_id` AS `branch_id`, `branch`.`branch_code` AS `branch_code`, `branch`.`branch_name` AS `branch_name`, `branch`.`branch_password` AS `branch_password`, `branch`.`branch_status` AS `branch_status`, `branch`.`web_status` AS `web_status`, `branch`.`update_ts` AS `update_ts`, `branch`.`update_user` AS `update_user`, `branch`.`minimum_quota` AS `minimum_quota`, `branch`.`effectivity_date` AS `effectivity_date` FROM `branches` AS `branch` WHERE `branch`.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-26 18:20:37 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `branch`...', false, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(637): Kohana_ORM->find()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('branch')
#5 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(21): Kohana_ORM->__get('branch')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(61): Kohana_View->__toString()
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
2012-12-26 18:26:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Adminhome::get_links() ~ APPPATH\classes\controller\template\admin.php [ 12 ] in :
2012-12-26 18:26:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 18:29:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: links1 ~ APPPATH\views\template\admin.php [ 42 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php:42
2012-12-26 18:29:17 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 42, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adminhome))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php:42
2012-12-26 18:33:36 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Template_Employee' not found ~ APPPATH\classes\controller\loan\application.php [ 3 ] in :
2012-12-26 18:33:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 18:37:10 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'branch.id' in 'where clause' [ SELECT `branch`.`branch_id` AS `branch_id`, `branch`.`branch_code` AS `branch_code`, `branch`.`branch_name` AS `branch_name`, `branch`.`branch_password` AS `branch_password`, `branch`.`branch_status` AS `branch_status`, `branch`.`web_status` AS `web_status`, `branch`.`update_ts` AS `update_ts`, `branch`.`update_user` AS `update_user`, `branch`.`minimum_quota` AS `minimum_quota`, `branch`.`effectivity_date` AS `effectivity_date` FROM `branches` AS `branch` WHERE `branch`.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-26 18:37:10 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `branch`...', false, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(637): Kohana_ORM->find()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('branch')
#5 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(21): Kohana_ORM->__get('branch')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(65): Kohana_View->__toString()
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
2012-12-26 18:37:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Template_Employee' not found ~ APPPATH\classes\controller\loan\application.php [ 3 ] in :
2012-12-26 18:37:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 18:37:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Template_Employee' not found ~ APPPATH\classes\controller\incentives\custodian.php [ 3 ] in :
2012-12-26 18:37:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 18:38:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Template_Employee' not found ~ APPPATH\classes\controller\loan\inquiry.php [ 3 ] in :
2012-12-26 18:38:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 18:59:14 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Template_Admin' not found ~ APPPATH\classes\controller\loan\type.php [ 3 ] in :
2012-12-26 18:59:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 18:59:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Template_Admin' not found ~ APPPATH\classes\controller\loan\type.php [ 3 ] in :
2012-12-26 18:59:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 19:05:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Loan_Type::get_loan_links() ~ APPPATH\classes\controller\loan\type.php [ 9 ] in :
2012-12-26 19:05:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 19:06:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Loan_Create::get_loan_links() ~ APPPATH\classes\controller\loan\create.php [ 13 ] in :
2012-12-26 19:06:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 19:06:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Loan_Create::get_loan_links() ~ APPPATH\classes\controller\loan\create.php [ 13 ] in :
2012-12-26 19:06:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 19:07:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Loan_Create::get_loan_links() ~ APPPATH\classes\controller\loan\create.php [ 13 ] in :
2012-12-26 19:07:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 19:09:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Loan_Create::get_loan_links() ~ APPPATH\classes\controller\loan\create.php [ 13 ] in :
2012-12-26 19:09:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 19:10:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Template_Admin' not found ~ APPPATH\classes\controller\adminhome.php [ 3 ] in :
2012-12-26 19:10:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 19:10:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Template_Admin' not found ~ APPPATH\classes\controller\adminhome.php [ 3 ] in :
2012-12-26 19:10:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 19:26:54 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'branch.id' in 'where clause' [ SELECT `branch`.`branch_id` AS `branch_id`, `branch`.`branch_code` AS `branch_code`, `branch`.`branch_name` AS `branch_name`, `branch`.`branch_password` AS `branch_password`, `branch`.`branch_status` AS `branch_status`, `branch`.`web_status` AS `web_status`, `branch`.`update_ts` AS `update_ts`, `branch`.`update_user` AS `update_user`, `branch`.`minimum_quota` AS `minimum_quota`, `branch`.`effectivity_date` AS `effectivity_date` FROM `branches` AS `branch` WHERE `branch`.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-26 19:26:54 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `branch`...', false, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(637): Kohana_ORM->find()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('branch')
#5 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(21): Kohana_ORM->__get('branch')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\user.php(65): Kohana_View->__toString()
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
2012-12-26 19:44:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: announcement ~ APPPATH\views\admin\authentication\role\edit.php [ 3 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:3
2012-12-26 19:44:49 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 3, Array)
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
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:3
2012-12-26 19:58:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_menu' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-26 19:58:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 20:00:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH\views\admin\authentication\role\edit.php [ 24 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:24
2012-12-26 20:00:12 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 24, Array)
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
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:24
2012-12-26 20:03:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH\views\admin\authentication\role\edit.php [ 24 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:24
2012-12-26 20:03:49 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 24, Array)
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
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:24
2012-12-26 20:08:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH\views\admin\authentication\role\edit.php [ 24 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:24
2012-12-26 20:08:39 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 24, Array)
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
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:24
2012-12-26 20:09:41 --- CRITICAL: View_Exception [ 0 ]: The requested view authentication/role/edit could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php:137
2012-12-26 20:09:41 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(137): Kohana_View->set_filename('authentication/...')
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(30): Kohana_View->__construct('authentication/...', NULL)
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('authentication/...')
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\template\User.php(8): Kohana_Controller_Template->before()
#4 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(6): Controller_Template_User->before()
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php:137
2012-12-26 20:11:26 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Menu as array ~ SYSPATH\classes\Kohana\HTML.php [ 129 ] in :
2012-12-26 20:11:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 20:12:14 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Menu as array ~ SYSPATH\classes\Kohana\HTML.php [ 129 ] in :
2012-12-26 20:12:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 20:12:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH\classes\controller\authentication\role.php [ 17 ] in :
2012-12-26 20:12:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 20:18:15 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\authentication\role\edit.php [ 14 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:14
2012-12-26 20:18:15 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(14): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\Cas...', 14, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:14
2012-12-26 20:21:57 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'name' in 'order clause' [ SELECT `menu`.`id` AS `id`, `menu`.`menu_name` AS `menu_name`, `menu`.`description` AS `description`, `menu`.`date_modified` AS `date_modified` FROM `menus` AS `menu` ORDER BY `name` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-26 20:21:57 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `menu`.`...', 'Model_Menu', Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(16): Kohana_ORM->find_all()
#4 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(10): Controller_Authentication_Role->get_menu()
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-26 20:30:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\admin\authentication\role\edit.php [ 14 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:14
2012-12-26 20:30:07 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 14, Array)
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
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:14
2012-12-26 20:38:08 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Menu as array ~ SYSPATH\classes\Kohana\HTML.php [ 129 ] in :
2012-12-26 20:38:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 20:54:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: url ~ APPPATH\views\admin\authentication\role\edit.php [ 15 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 20:54:39 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 15, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 20:58:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: url ~ APPPATH\views\admin\authentication\role\edit.php [ 15 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 20:58:42 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 15, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:05:54 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\authentication\role.php [ 10 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:10
2012-12-26 21:05:54 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(10): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\Cas...', 10, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:10
2012-12-26 21:07:16 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\authentication\role.php [ 10 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:10
2012-12-26 21:07:16 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(10): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\Cas...', 10, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:10
2012-12-26 21:07:29 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\authentication\role.php [ 10 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:10
2012-12-26 21:07:29 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(10): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\wamp\www\Cas...', 10, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:10
2012-12-26 21:07:58 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\authentication\role.php [ 10 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:10
2012-12-26 21:07:58 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(10): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\wamp\www\Cas...', 10, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:10
2012-12-26 21:08:12 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\authentication\role.php [ 10 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:10
2012-12-26 21:08:12 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(10): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\wamp\www\Cas...', 10, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:10
2012-12-26 21:09:57 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\authentication\role.php [ 11 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:09:57 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\Cas...', 11, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:10:08 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\authentication\role.php [ 11 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:10:08 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\Cas...', 11, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:18:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\admin\authentication\role\edit.php [ 14 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:14
2012-12-26 21:18:53 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 14, Array)
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
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:14
2012-12-26 21:20:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\admin\authentication\role\edit.php [ 15 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:20:23 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 15, Array)
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
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:20:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\admin\authentication\role\edit.php [ 15 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:20:34 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 15, Array)
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
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:21:49 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\authentication\role\edit.php [ 15 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:21:49 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(15): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\Cas...', 15, Array)
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
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:21:55 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\authentication\role\edit.php [ 15 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:21:55 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(15): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\Cas...', 15, Array)
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
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:26:07 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\authentication\role\edit.php [ 15 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:26:07 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(15): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\Cas...', 15, Array)
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
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:26:13 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\authentication\role\edit.php [ 15 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:26:13 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(15): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\Cas...', 15, Array)
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
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:26:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Form::action() ~ APPPATH\views\admin\authentication\role\edit.php [ 14 ] in :
2012-12-26 21:26:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 21:35:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\admin\authentication\role\edit.php [ 15 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:35:13 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 15, Array)
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
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:36:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\admin\authentication\role\edit.php [ 15 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:36:12 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 15, Array)
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
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:36:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: roles ~ APPPATH\views\admin\authentication\role\edit.php [ 15 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:36:18 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 15, Array)
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
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\authentication\role\edit.php:15
2012-12-26 21:38:04 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\authentication\role.php [ 11 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:38:04 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\Cas...', 11, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:38:58 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\authentication\role.php [ 11 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:38:58 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\Cas...', 11, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:39:05 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\authentication\role.php [ 11 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:39:05 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\Cas...', 11, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:39:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ',' or ';' ~ APPPATH\classes\controller\authentication\role.php [ 4 ] in :
2012-12-26 21:39:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-26 21:41:18 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\authentication\role.php [ 11 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:41:18 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\Cas...', 11, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:41:45 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\authentication\role.php [ 11 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:41:45 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\Cas...', 11, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:41:50 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\authentication\role.php [ 11 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:41:50 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\Cas...', 11, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:43:46 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\authentication\role.php [ 11 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:43:46 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\wamp\www\Cas...', 11, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:43:53 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\authentication\role.php [ 11 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:43:53 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\wamp\www\Cas...', 11, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:44:45 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\authentication\role.php [ 11 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11
2012-12-26 21:44:45 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\wamp\www\Cas...', 11, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Authentication_Role->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authentication_Role))
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\authentication\role.php:11