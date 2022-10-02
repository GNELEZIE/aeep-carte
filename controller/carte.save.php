<?php

if(isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
    extract($_POST);

    $nom =  htmlentities(trim(addslashes($nom)));
    $prenom =  htmlentities(trim(addslashes($prenom)));
    $niveau =  htmlentities(trim(addslashes($niveau)));
    $village =  htmlentities(trim(addslashes($village)));
    $genre =  htmlentities(trim(addslashes($genre)));
    $phone =  htmlentities(trim(addslashes($phone)));
    $isoPhone =  htmlentities(trim(addslashes($isoPhone)));
    $dialPhone =  htmlentities(trim(addslashes($dialPhone)));
    $slug = create_slug($_POST['prenom']);
    $propriete1 ='prenom';
    $propriete2 ='iso_phone';
    $propriete3 ='dial_phone';
    $propriete4 ='phone';


    $verifSlug = $carte->verifCarte($propriete1,$prenom);


    $verifPhone = $carte->verifPhone($propriete2,$isoPhone,$propriete3,$dialPhone,$propriete4,$phone);
    $rsSlug = $verifSlug->fetch();
    $nbSlug =$verifSlug->rowCount();

    if($nbSlug > 0 ){
        $slug = $slug.'-'.$nbSlug;
    }

    $extensionValide = array('jpeg', 'jpg', 'png');
    $piece_ext = explode('.',$_FILES['piece']['name']);
    $piece_ext = strtolower(end($piece_ext));

    if (in_array($piece_ext, $extensionValide)) {
        $piece = uniqid().'.'.$piece_ext;
        $destination ='uploads/' . $piece;
        $tmp_name = $_FILES['piece']['tmp_name'];
        move_uploaded_file($tmp_name, $destination);
    }



    $extensionValide = array('jpeg', 'jpg', 'png');
    $photo_ext = explode('.',$_FILES['photo']['name']);
    $photo_ext = strtolower(end($photo_ext));

    if (in_array($photo_ext, $extensionValide)) {
        $photo = uniqid().'.'.$photo_ext;
        $destination ='uploads/' . $photo;
        $tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($tmp_name, $destination);
    }
if($verifPhone->rowCount() > 0){
    $errors['cart'] = 'Ce numéro est déjà inscrit pour la carte de membre AEEP !';
}else{
    $save = $carte->addCarte($dateGmt,$genre,$nom,$prenom,$slug,$isoPhone,$dialPhone,$phone,$niveau,$village,$piece,$photo);
    if($save >0){
        header('location:' . $domaine .'/valide');
    }
}

}
