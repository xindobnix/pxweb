<?php defined('BASEPATH') OR exit(); define('PXPATH', str_replace("\\", "/", BASEPATH) . '/'); define('PXSPATH', PXPATH . 'system/'); define('PXCPATH', PXSPATH . 'Core/');

include_once(PXCPATH . 'Common.php');

if(CONFIGXML === false) error('file "config.xml" not found!');
if(CONFIGCONF=== false) error('file "iweb.conf" / "pwadmin.conf" not found!');

require_once(PXPATH . 'system/Common/Common.php');
require_once(PXPATH . 'system/IO/Protocol.php');
require_once(PXPATH . 'classes/protocol.php');

/* End of file Core.php */
/* Location: ./system/Core.php */
