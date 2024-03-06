<?php

if(isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){

    extract($_POST);

    $nom =  htmlentities(trim(addslashes($nom)));
    $prenom =  htmlentities(trim(addslashes($prenom)));
    $phone =  htmlentities(trim(addslashes($phone)));
    $village =  htmlentities(trim(addslashes($village)));
    $village_name = village_name($village);
    $amount = 100;
    $currency = 'XOF';
    $description = 'Inscription pour la sortie détente';
    $verifPhone = $sortie->verifPhoneSortie($phone);
    $propriete = 'trans_id';
    if($verifPhone->rowCount() > 0){
        $errors['cart'] = 'Ce numéro est déjà inscrit pour la sortie détente AEEP !';
    }else{
        $save = $sortie->siginSortie($dateGmt,$nom,$prenom,$phone,$village_name);
        if($save >0){
            $tab = array(
                'nom' => $nom,
                'prenom' => $prenom,
            );
            $_SESSION['pay'] = $tab;
            header('location:' . $domaine.'/fedapay');
        }
    }

}
