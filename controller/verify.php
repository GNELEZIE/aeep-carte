<?php

if(isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
    extract($_POST);


    $phone =  htmlentities(trim(addslashes($phone)));
    $isoPhone =  htmlentities(trim(addslashes($isoPhone)));
    $dialPhone =  htmlentities(trim(addslashes($dialPhone)));

    $propriete1 ='iso_phone';
    $propriete2 ='dial_phone';
    $propriete3 ='phone';

    $verifPhone = $carte->verifPhone($propriete1,$isoPhone,$propriete2,$dialPhone,$propriete3,$phone);

    if($data = $verifPhone->fetch()){
        $_SESSION['result'] = $data;
        header('location:'.$domaine.'/resultat');
    }else{
        $tab = array(
            'phone' => $phone
        );
        $_SESSION['no_result'] = $tab;
        header('location:'.$domaine.'/resultat');
    }


}
