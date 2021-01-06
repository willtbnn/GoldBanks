<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", "On");
require 'config.php';

spl_autoload_register(function($class){

	if(file_exists('controllers/'.$class.'.php')) {
		require 'controllers/'.$class.'.php';
	}
	else if(file_exists('models/'.$class.'.php')) {
		require 'models/'.$class.'.php';
	}
	else if(file_exists('core/'.$class.'.php')) {
		require 'core/'.$class.'.php';
	}

});

$core = new Core();
$core->run();