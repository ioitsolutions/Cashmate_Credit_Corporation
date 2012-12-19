<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-14 20:10:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template\admin.php [ 5 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php:5
2012-12-14 20:10:12 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 5, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bulletin_Announcement))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php:5
2012-12-14 20:42:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: announcements ~ APPPATH\views\admin\bulletin\announcement\list.php [ 19 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php:19
2012-12-14 20:42:15 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 19, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(55): Kohana_View->__toString()
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bulletin_Announcement))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php:19
2012-12-14 20:47:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: announcements ~ APPPATH\views\admin\bulletin\announcement\list.php [ 19 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php:19
2012-12-14 20:47:42 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 19, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(55): Kohana_View->__toString()
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bulletin_Announcement))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php:19
2012-12-14 20:56:23 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\bulletin\announcement.php [ 15 ] in :
2012-12-14 20:56:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-14 20:57:07 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\bulletin\announcement.php [ 15 ] in :
2012-12-14 20:57:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-14 20:57:13 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\bulletin\announcement.php [ 15 ] in :
2012-12-14 20:57:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-14 20:57:51 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\bulletin\announcement.php [ 15 ] in :
2012-12-14 20:57:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-14 20:57:52 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\bulletin\announcement.php [ 15 ] in :
2012-12-14 20:57:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-14 20:57:53 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\bulletin\announcement.php [ 15 ] in :
2012-12-14 20:57:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-14 20:57:53 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\bulletin\announcement.php [ 15 ] in :
2012-12-14 20:57:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-14 20:57:53 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\bulletin\announcement.php [ 15 ] in :
2012-12-14 20:57:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-14 20:57:54 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\bulletin\announcement.php [ 15 ] in :
2012-12-14 20:57:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-14 20:59:08 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\bulletin\announcement.php [ 15 ] in :
2012-12-14 20:59:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-14 20:59:21 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\bulletin\announcement.php [ 15 ] in :
2012-12-14 20:59:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-14 21:00:36 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\bulletin\announcement.php [ 15 ] in :
2012-12-14 21:00:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-14 21:00:57 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\bulletin\announcement.php [ 15 ] in :
2012-12-14 21:00:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-14 21:03:06 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\bulletin\announcement.php [ 15 ] in :
2012-12-14 21:03:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-14 21:03:13 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\controller\bulletin\announcement.php [ 15 ] in :
2012-12-14 21:03:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-14 21:03:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH\views\admin\bulletin\announcement\list.php [ 31 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php:31
2012-12-14 21:03:48 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 31, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(55): Kohana_View->__toString()
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bulletin_Announcement))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php:31
2012-12-14 21:04:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH\views\admin\bulletin\announcement\list.php [ 31 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php:31
2012-12-14 21:04:45 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 31, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(55): Kohana_View->__toString()
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bulletin_Announcement))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php:31
2012-12-14 21:10:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_announcements' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2012-12-14 21:10:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-14 21:20:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: announcement ~ APPPATH\views\admin\bulletin\announcement\list.php [ 7 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php:7
2012-12-14 21:20:14 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 7, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(55): Kohana_View->__toString()
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bulletin_Announcement))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php:7
2012-12-14 21:20:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: announcement ~ APPPATH\views\admin\bulletin\announcement\list.php [ 7 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php:7
2012-12-14 21:20:34 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 7, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(55): Kohana_View->__toString()
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bulletin_Announcement))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php:7
2012-12-14 21:20:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: announcement ~ APPPATH\views\admin\bulletin\announcement\list.php [ 7 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php:7
2012-12-14 21:20:41 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 7, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(55): Kohana_View->__toString()
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bulletin_Announcement))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php:7
2012-12-14 21:20:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: announcement ~ APPPATH\views\admin\bulletin\announcement\list.php [ 7 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php:7
2012-12-14 21:20:45 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 7, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(55): Kohana_View->__toString()
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bulletin_Announcement))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php:7
2012-12-14 22:39:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: btn_title ~ APPPATH\views\admin\bulletin\announcement\edit.php [ 40 ] in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\edit.php:40
2012-12-14 22:39:51 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\edit.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\Cas...', 40, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(55): Kohana_View->__toString()
#5 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bulletin_Announcement))
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\edit.php:40
2012-12-14 23:41:38 --- CRITICAL: Kohana_Exception [ 0 ]: The branch property does not exist in the Model_Announcement class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-14 23:41:38 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('branch')
#1 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(21): Kohana_ORM->__get('branch')
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#3 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(55): Kohana_View->__toString()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Bulletin_Announcement))
#12 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php:600
2012-12-14 23:43:15 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'branch.id' in 'where clause' [ SELECT `branch`.`branch_id` AS `branch_id`, `branch`.`branch_code` AS `branch_code`, `branch`.`branch_name` AS `branch_name`, `branch`.`password` AS `password`, `branch`.`status` AS `status`, `branch`.`web_status` AS `web_status`, `branch`.`update_ts` AS `update_ts`, `branch`.`update_user` AS `update_user`, `branch`.`minimum_quota` AS `minimum_quota`, `branch`.`effectivity_date` AS `effectivity_date` FROM `branches` AS `branch` WHERE `branch`.`id` = '2' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php:251
2012-12-14 23:43:15 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `branch`...', false, Array)
#1 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(637): Kohana_ORM->find()
#4 C:\wamp\www\Cashmate_Credit_Corporation\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('branch')
#5 C:\wamp\www\Cashmate_Credit_Corporation\application\views\admin\bulletin\announcement\list.php(21): Kohana_ORM->__get('branch')
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(61): include('C:\wamp\www\Cas...')
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\Cas...', Array)
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 C:\wamp\www\Cashmate_Credit_Corporation\application\views\template\admin.php(55): Kohana_View->__toString()
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