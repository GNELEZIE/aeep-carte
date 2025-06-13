<?php

if(isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
    extract($_POST);

//function



    $nom =  htmlentities(trim(addslashes($nom)));
    $prenom =  htmlentities(trim(addslashes($prenom)));
    $village =  htmlentities(trim(addslashes($village)));
    $phone =  htmlentities(trim(addslashes($phone)));
    $isoPhone =  htmlentities(trim(addslashes($isoPhone)));
    $dialPhone =  htmlentities(trim(addslashes($dialPhone)));

    $villageName = village_name($village);

    $slg = $nom.''.$prenom;
    $slug = create_slug($slg);
    $propriete1 ='prenom';
    $propriete2 ='iso_phone';
    $propriete10 ='nom';
    $propriete3 ='dial_phone';
    $propriete4 ='phone';
    $propriete5 ='etat';
    $propriete6 ='trans_id';
    $etatValid = 1;
    $etatInValid = 2;



    $verifSlug = $carte->verifCartes($propriete1,$prenom,$propriete10,$nom);


    $verifPhone = $carte->verifPhone($propriete2,$isoPhone,$propriete3,$dialPhone,$propriete4,$phone);
    $rsSlug = $verifSlug->fetch();
    $nbSlug =$verifSlug->rowCount();

    if($nbSlug > 0 ){
        $slug = $slug.'-'.$nbSlug;
    }

    $extensionValide = array('jpeg', 'jpg', 'png');
    $piece_ext = explode('.',$_FILES['piece']['name']);
    $piece_ext = strtolower(end($piece_ext));


    $extensionValide = array('jpeg', 'jpg', 'png');
    $photo_ext = explode('.',$_FILES['photo']['name']);
    $photo_ext = strtolower(end($photo_ext));

    if (in_array($photo_ext, $extensionValide)) {
        $photo = uniqid().'.'.$photo_ext;
//       $destination = $_SERVER['DOCUMENT_ROOT'].'/ma-carte.aeep-pongala.net/uploads/'.$photo;
        $destination = $_SERVER['DOCUMENT_ROOT'].'/www/aeep-carte/uploads/'.$photo;
        $tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($tmp_name, $destination);
    }
    if($verifPhone->rowCount() > 0 and $rsSlug['etat'] == 1){
        $errors['cart'] = 'Ce numéro est déjà inscrit pour la carte de membre AEEP !';
    }else{
        $save = $carte->udpCarte($dateGmt,$nom,$prenom,$slug,$isoPhone,$dialPhone,$phone,$village,$photo);
        if($save >0){
            header('location:' .$domaine.'/succes');
        }
    }

}
