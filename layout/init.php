<?php
ini_set("session.cookie_httponly", True);
session_start();

// include function
include_once "function/domaine.php";
include_once "function/mailing.php";
include_once "function/function.php";
include_once "function/detectdevice/Mobile_Detect.php";
include_once "function/detectdevice/detect.php";
require_once 'function/cinetpay/src/new-guichet.php';
//include_once "function/cinetpay/notify/notify.php";
//include_once "function/cinetpay/return/return.php";

//include_once $function."/cinetpay/marchand.php";
//include_once $function."/cinetpay/commande.php";
//Include Connexion
include_once 'model/Connexion.class.php';

// appelle des class

// appelle des class
include_once 'model/Carte.class.php';
//include_once 'model/Reunion.class.php';
//include_once 'model/Sortie.class.php';
//include_once 'model/Miss.class.php';
//include_once 'model/Question.class.php';
include_once 'model/Produit.php';
include_once 'model/Resultats.class.php';

$cdn = 'cdn';
$class = 'class';
$controller = 'controller';
$function = 'function';
$mail = 'mail';
$layout = 'layout';
$pages = 'pages';

