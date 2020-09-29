<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/goldbanks/");
	$config['dbname'] = 'gold_banks';
	$config['host'] = '';
	$config['dbuser'] = '';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://www.goldbanksbr.com.br/");
	$config['dbname'] = '';
	$config['host'] = '';
	$config['dbuser'] = '';
	$config['dbpass'] = '';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}
