<?php

/* 
 *
 */
session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'utubeoop'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800        
    ),
    'session' => array(
        'session_name' => 'user'
    )
);

//require_once 'classes/Config.php';
//require_once 'classes/Cookie.php';
//require_once 'classes/DB.php';
// etc etc
// Much easier and quicker to use the following function:

spl_autoload_register(function($class) {
    require_once 'classes/' . $class . '.php';
});

require_once 'functions/sanitize.php';