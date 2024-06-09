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

    $verifSlug = $miss->verifMiss($propriete1,$nom);

    $nbSlug =$verifSlug->rowCount();

    if($nbSlug > 0 ){
        $slug = $slug.'-'.$nbSlug;
    }

   $save = $miss->addMiss($dateGmt,$nom,$phone,$village);
   if($save > 0){
       $data = $miss->getMissById($save)->fetch();

       $_SESSION['compo'] = $data;

       header('location:' .$domaine.'/miss-compo');
   }else{
       $error_s['register'] = 'Une erreur s\'est produite, veuillez réessayer.';
   }
}
