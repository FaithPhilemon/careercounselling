###################
Instructions
###################

*******************
Database Installation
*******************

1. Open phpmyadmin
2. Create empty database, name it counselling
3. Goto db folder and import counselling.sql file

******************************
Database configuration
******************************

1. In the root folder goto applicaion/config/database.php

Ensure the config array matches the code below
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'counselling',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

******************************
Project installation and lunch
******************************

1. create a folder in htdocs named "counsellingmanagementsystem" or any convinient name
2. goto the browser and type localhost/counsellingmanagementsystem/
3. Hit enter key to run application
