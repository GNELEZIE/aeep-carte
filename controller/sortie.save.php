<?php

if(isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){

    extract($_POST);

    $nom =  htmlentities(trim(addslashes($nom)));
    $prenom =  htmlentities(trim(addslashes($prenom)));
    $phone =  htmlentities(trim(addslashes($phone)));
    $village =  htmlentities(trim(addslashes($village)));
    $village_name = village_name($village);

    $verifPhone = $carte->verifPhoneSortie($phone);

    if($verifPhone->rowCount() > 0){
        $errors['cart'] = 'Ce numéro est déjà inscrit pour la sortie détente AEEP !';
    }else{
        $save = $carte->siginSortie($dateGmt,$nom,$prenom,$phone,$village_name);
        if($save >0){
            header('location:' . $domaine . '/succes');
        }
    }

}
