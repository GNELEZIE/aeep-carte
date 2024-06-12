<?php

if(isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
    extract($_POST);

//function

    $nom =  htmlentities(trim(addslashes($nom)));
    $village =  htmlentities(trim(addslashes($village)));
    $phone =  htmlentities(trim(addslashes($phone)));

    $villageName = village_name($village);
    $slug = create_slug($_POST['nom']);
    $propriete1 = 'nom';
    $propriete2 = 'phone';


    $verifSlug = $miss->verifMiss($propriete1,$nom);

    $nbSlug =$verifSlug->rowCount();

    if($nbSlug > 0 ){
        $slug = $slug.'-'.$nbSlug;
    }

    $verifPhone = $miss->verifMiss($propriete2,$phone);
    if($verifPhones = $verifPhone->fetch()){
        $error_m['register'] = 'Tu es déjà inscrit à ce concours';
    }else{
        $tab = array(
            'nom' => $nom,
            'village' => $village,
            'slug' => $slug,
            'phone' => $phone
        );
        $_SESSION['suivant'] = $tab;
        if(isset($_SESSION['suivant'])){
            header('location:' .$domaine.'/miss-compo');
        }
    }

}
