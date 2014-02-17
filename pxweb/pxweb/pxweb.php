<?php define('BASEPATH', dirname(__FILE__) );

$system = array(
	'conxml'=> BASEPATH . '/config.xml',
	'config'=> BASEPATH . '/iweb.conf',
	'debug' => true
);

$database = array(
	'ip'		=> '127.0.0.1',
	'user'		=> 'root',
	'passwd'	=> '',
	'database'	=> 'pw'
);


























require_once BASEPATH.'/system/Core.php';

/* End of file pxweb.php */
/* Location: ./pxweb.php */
