<?php
ini_set("session.cookie_httponly", True);
session_start();

// include function
include_once "function/domaine.php";
include_once "function/mailing.php";
include_once "function/function.php";
include_once "function/detectdevice/Mobile_Detect.php";
include_once "function/detectdevice/detect.php";


//Include Connexion
include_once 'model/Connexion.class.php';

// appelle des class

// appelle des class
include_once 'model/Carte.class.php';

$cdn = 'cdn';
$class = 'class';
$controller = 'controller';
$function = 'function';
$mail = 'mail';
$layout = 'layout';
$pages = 'pages';

