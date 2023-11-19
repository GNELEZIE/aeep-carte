<?php
if(isset($_SESSION['myformkey']) and isset($_POST['nom']) and isset($_POST['phone']) and isset($_POST['email']) and isset($_POST['ville']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
    extract($_POST);
    error_reporting(E_ALL ^ E_NOTICE);
        $email = htmlentities(trim(addslashes(strip_tags($email))));
        $nom = htmlentities(trim(addslashes($nom)));
        $phone = htmlentities(trim(addslashes(strip_tags($phone))));
        $isoPhone = htmlentities(trim(addslashes(strip_tags($isoPhone))));
        $dialPhone = htmlentities(trim(addslashes(strip_tags($dialPhone))));
        $ville = htmlentities(trim(addslashes(strip_tags($ville))));





    $verifMail = $reunion->getMembreByEmail($email);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['register'] = 'Votre adresse email n\'est pas correct';
    }else {
        $idUser = $reunion->addReunion($dateGmt,$nom,$phone,$isoPhone,$dialPhone,$email,$ville);
        if ($idUser > 0) {
            header('location:' .$domaine.'/success');
        } else {
            $erro['register'] = 'Une erreur s\'est produite, veuillez réessayer.';
        }
    }


}