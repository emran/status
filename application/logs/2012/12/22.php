<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-22 01:05:11 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/views/welcome/index.php [ 25 ]
2012-12-22 01:05:11 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/views/welcome/index.php [ 25 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/var/www/status...', 25, Array)
#1 /var/www/status/application/views/welcome/index.php(25): date('F j, g:i a', '2012-12-22 13:0...')
#2 /var/www/status/system/classes/kohana/view.php(61): include('/var/www/status...')
#3 /var/www/status/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/status...', Array)
#4 /var/www/status/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /var/www/status/application/views/layout_fluid.php(62): Kohana_View->__toString()
#6 /var/www/status/system/classes/kohana/view.php(61): include('/var/www/status...')
#7 /var/www/status/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/status...', Array)
#8 /var/www/status/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /var/www/status/application/classes/controller/front.php(131): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Front->after()
#11 /var/www/status/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /var/www/status/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/status/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/status/index.php(110): Kohana_Request->execute()
#15 {main}
2012-12-22 08:38:36 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/welcome/index.php [ 29 ]
2012-12-22 08:38:36 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/welcome/index.php [ 29 ]
--
#0 /var/www/status/application/views/welcome/index.php(29): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/status...', 29, Array)
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
2012-12-22 08:38:44 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/welcome/index.php [ 29 ]
2012-12-22 08:38:44 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/welcome/index.php [ 29 ]
--
#0 /var/www/status/application/views/welcome/index.php(29): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/status...', 29, Array)
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
2012-12-22 08:38:47 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/welcome/index.php [ 29 ]
2012-12-22 08:38:47 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH/views/welcome/index.php [ 29 ]
--
#0 /var/www/status/application/views/welcome/index.php(29): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/status...', 29, Array)
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
2012-12-22 09:24:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: mailFormat ~ APPPATH/views/welcome/index.php [ 10 ]
2012-12-22 09:24:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: mailFormat ~ APPPATH/views/welcome/index.php [ 10 ]
--
#0 /var/www/status/application/views/welcome/index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/status...', 10, Array)
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
2012-12-22 23:30:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: mailFormat ~ APPPATH/views/welcome/index.php [ 53 ]
2012-12-22 23:30:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: mailFormat ~ APPPATH/views/welcome/index.php [ 53 ]
--
#0 /var/www/status/application/views/welcome/index.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/status...', 53, Array)
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
2012-12-22 23:31:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: mailFormat ~ APPPATH/views/welcome/index.php [ 53 ]
2012-12-22 23:31:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: mailFormat ~ APPPATH/views/welcome/index.php [ 53 ]
--
#0 /var/www/status/application/views/welcome/index.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/status...', 53, Array)
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