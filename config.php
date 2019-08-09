<?php

define('DB_NAME', 'crud-users');

define('DB_USER', 'root');

define('DB_PASSWORD', '');

define('DB_HOST', 'localhost');

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
if ( !defined('BASEURL') )
	define('BASEURL', '/lojacorr-front/');

if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'inc/database.php');

define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
define('LOGIN', ABSPATH . 'login.php');
define('HOME', ABSPATH . 'home.php');
  ?>