<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */


//SUCCESS CODES - Constantes : definir en fonction des retours du serveur
define('RESPONSE_SUCCESS', 200);
define('RESPONSE_USER_AUTHENTICATED', 201);

//ERROR CODES - Constantes : definir en fonction des retours du serveur
define('RESPONSE_SERVER_ERROR', 100);
define('RESPONSE_WRONG_CREDENTIALS', 101);
define('RESPONSE_MISSING_PARAMETER', 102);
define('RESPONSE_INVALID_PARAMETER', 103);
define('RESPONSE_CALL_FORBIDDEN', 104);
define('RESPONSE_USER_BLOCKED', 105);
define('RESPONSE_SESSION_EXPIRED', 106);
define('RESPONSE_LAST_CHANCE', 107);



define('RESPONSE_OPERATION_FAILED', 300);
