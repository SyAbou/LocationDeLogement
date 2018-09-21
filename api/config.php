<?php
		
$host = 'localhost';
$dbname = 'location';
$user = 'root';
$pass = ''; //ou vide si WAMP/EASY PHP
try{
    $db = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ));
}
catch(Exception $e)
{
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
}

 ?>