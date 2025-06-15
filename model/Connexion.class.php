<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'aeep_pongala');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

//define('DB_HOST', '185.98.131.214');
//define('DB_NAME', 'aeepp2613551');
//define('DB_USERNAME', 'aeepp2613551');
//define('DB_PASSWORD', 'uS8_yyXxC9Z2w3m');
function bdd(){
    try{
        $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USERNAME,DB_PASSWORD,array(
            PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'UTF8'",
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        ));
    }  catch (Exception $ex){
        die("Erreur :".$ex->getMessage());
        exit();
    }
    return $db;
}