<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-18 07:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-18 07:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/status/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/status/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/status/index.php(110): Kohana_Request->execute()
#3 {main}
2012-12-18 08:08:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH/views/layout_fluid.php [ 57 ]
2012-12-18 08:08:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH/views/layout_fluid.php [ 57 ]
--
#0 /var/www/status/application/views/layout_fluid.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/status...', 57, Array)
#1 /var/www/status/system/classes/kohana/view.php(61): include('/var/www/status...')
#2 /var/www/status/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/status...', Array)
#3 /var/www/status/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /var/www/status/application/classes/controller/front.php(130): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Front->after()
#6 /var/www/status/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /var/www/status/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/status/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/status/index.php(110): Kohana_Request->execute()
#10 {main}
2012-12-18 08:09:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH/views/layout_fluid.php [ 57 ]
2012-12-18 08:09:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH/views/layout_fluid.php [ 57 ]
--
#0 /var/www/status/application/views/layout_fluid.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/status...', 57, Array)
#1 /var/www/status/system/classes/kohana/view.php(61): include('/var/www/status...')
#2 /var/www/status/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/status...', Array)
#3 /var/www/status/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /var/www/status/application/classes/controller/front.php(130): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Front->after()
#6 /var/www/status/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /var/www/status/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/status/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/status/index.php(110): Kohana_Request->execute()
#10 {main}
2012-12-18 08:09:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH/views/layout_fluid.php [ 57 ]
2012-12-18 08:09:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH/views/layout_fluid.php [ 57 ]
--
#0 /var/www/status/application/views/layout_fluid.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/status...', 57, Array)
#1 /var/www/status/system/classes/kohana/view.php(61): include('/var/www/status...')
#2 /var/www/status/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/status...', Array)
#3 /var/www/status/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /var/www/status/application/classes/controller/front.php(130): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Front->after()
#6 /var/www/status/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /var/www/status/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/status/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/status/index.php(110): Kohana_Request->execute()
#10 {main}
2012-12-18 08:10:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH/views/layout_fluid.php [ 57 ]
2012-12-18 08:10:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH/views/layout_fluid.php [ 57 ]
--
#0 /var/www/status/application/views/layout_fluid.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/status...', 57, Array)
#1 /var/www/status/system/classes/kohana/view.php(61): include('/var/www/status...')
#2 /var/www/status/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/status...', Array)
#3 /var/www/status/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /var/www/status/application/classes/controller/front.php(130): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Front->after()
#6 /var/www/status/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /var/www/status/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/status/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/status/index.php(110): Kohana_Request->execute()
#10 {main}
2012-12-18 08:11:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH/views/layout_fluid.php [ 57 ]
2012-12-18 08:11:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH/views/layout_fluid.php [ 57 ]
--
#0 /var/www/status/application/views/layout_fluid.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/status...', 57, Array)
#1 /var/www/status/system/classes/kohana/view.php(61): include('/var/www/status...')
#2 /var/www/status/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/status...', Array)
#3 /var/www/status/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /var/www/status/application/classes/controller/front.php(130): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Front->after()
#6 /var/www/status/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /var/www/status/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/status/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/status/index.php(110): Kohana_Request->execute()
#10 {main}
2012-12-18 08:11:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH/views/layout_fluid.php [ 57 ]
2012-12-18 08:11:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH/views/layout_fluid.php [ 57 ]
--
#0 /var/www/status/application/views/layout_fluid.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/status...', 57, Array)
#1 /var/www/status/system/classes/kohana/view.php(61): include('/var/www/status...')
#2 /var/www/status/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/status...', Array)
#3 /var/www/status/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /var/www/status/application/classes/controller/front.php(130): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Front->after()
#6 /var/www/status/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /var/www/status/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/status/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/status/index.php(110): Kohana_Request->execute()
#10 {main}
2012-12-18 08:11:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH/views/layout_fluid.php [ 57 ]
2012-12-18 08:11:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH/views/layout_fluid.php [ 57 ]
--
#0 /var/www/status/application/views/layout_fluid.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/status...', 57, Array)
#1 /var/www/status/system/classes/kohana/view.php(61): include('/var/www/status...')
#2 /var/www/status/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/status...', Array)
#3 /var/www/status/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /var/www/status/application/classes/controller/front.php(130): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Front->after()
#6 /var/www/status/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /var/www/status/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/status/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/status/index.php(110): Kohana_Request->execute()
#10 {main}
2012-12-18 08:54:14 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-12-18 08:54:14 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /var/www/status/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /var/www/status/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/status/application/classes/controller/front.php(57): Kohana_Session::instance()
#3 [internal function]: Controller_Front->before()
#4 /var/www/status/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /var/www/status/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/status/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/status/index.php(110): Kohana_Request->execute()
#8 {main}
2012-12-18 09:19:50 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/model/base.php [ 47 ]
2012-12-18 09:19:50 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/model/base.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-18 09:20:51 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/model/base.php [ 47 ]
2012-12-18 09:20:51 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/model/base.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-18 09:20:52 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/model/base.php [ 47 ]
2012-12-18 09:20:52 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/classes/model/base.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-18 09:51:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH/views/welcome/index.php [ 17 ]
2012-12-18 09:51:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH/views/welcome/index.php [ 17 ]
--
#0 /var/www/status/application/views/welcome/index.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/status...', 17, Array)
#1 /var/www/status/system/classes/kohana/view.php(61): include('/var/www/status...')
#2 /var/www/status/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/status...', Array)
#3 /var/www/status/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/status/application/views/layout_fluid.php(62): Kohana_View->__toString()
#5 /var/www/status/system/classes/kohana/view.php(61): include('/var/www/status...')
#6 /var/www/status/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/status...', Array)
#7 /var/www/status/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /var/www/status/application/classes/controller/front.php(131): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Front->after()
#10 /var/www/status/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /var/www/status/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/status/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/status/index.php(110): Kohana_Request->execute()
#14 {main}
2012-12-18 09:52:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH/views/welcome/index.php [ 17 ]
2012-12-18 09:52:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH/views/welcome/index.php [ 17 ]
--
#0 /var/www/status/application/views/welcome/index.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/status...', 17, Array)
#1 /var/www/status/system/classes/kohana/view.php(61): include('/var/www/status...')
#2 /var/www/status/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/status...', Array)
#3 /var/www/status/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/status/application/views/layout_fluid.php(62): Kohana_View->__toString()
#5 /var/www/status/system/classes/kohana/view.php(61): include('/var/www/status...')
#6 /var/www/status/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/status...', Array)
#7 /var/www/status/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /var/www/status/application/classes/controller/front.php(131): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Front->after()
#10 /var/www/status/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /var/www/status/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/status/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/status/index.php(110): Kohana_Request->execute()
#14 {main}