<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-09 23:15:38 --- CRITICAL: View_Exception [ 0 ]: The requested view template/public could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php:137
2012-12-09 23:15:38 --- DEBUG: #0 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template/public')
#1 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php(30): Kohana_View->__construct('template/public', NULL)
#2 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template/public')
#3 C:\wamp\www\Cashmate_Credit_Corporation\application\classes\controller\template\public.php(8): Kohana_Controller_Template->before()
#4 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Controller.php(69): Controller_Template_Public->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\Cashmate_Credit_Corporation\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\Cashmate_Credit_Corporation\system\classes\Kohana\View.php:137