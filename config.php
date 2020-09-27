<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/goldbanks/");
	$config['dbname'] = 'gold_banks';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://www.goldbanksbr.com.br/");
	$config['dbname'] = 'u445206020_goldbanks';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'u445206020_will';
	$config['dbpass'] = 'Ww5916482>';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}