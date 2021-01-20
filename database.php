<?php

$host = 'mysql:host=https://appetee.000webhostapp.com/;dbname=id15967933_appetee';
$login = '	id15967933_appetee_user';
$password = 'Ov3p5h6[Lj&Ei]v1';
$options = array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, 
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

$pdo = new PDO($host, $login, $password, $options);