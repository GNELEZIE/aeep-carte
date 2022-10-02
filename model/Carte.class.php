<?php
class Carte {
    public  function  __construct(){
        $this->bdd = bdd();
    }


    // Read


    public function addCarte($date_carte,$genre,$nom,$prenom,$slug,$iso_phone,$dial_phone,$phone,$niveau,$village,$piece,$photo){
        $query = "INSERT INTO carte(date_carte,genre,nom,prenom,slug,iso_phone,dial_phone,phone,niveau,village,piece,photo)
            VALUES (:date_carte,:genre,:nom,:prenom,:slug,:iso_phone,:dial_phone,:phone,:niveau,:village,:piece,:photo)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "date_carte" => $date_carte,
            "genre" => $genre,
            "nom" => $nom,
            "prenom" => $prenom,
            "slug" => $slug,
            "iso_phone" => $iso_phone,
            "dial_phone" => $dial_phone,
            "phone" => $phone,
            "niveau" => $niveau,
            "village" => $village,
            "piece" => $piece,
            "photo" => $photo
        ));
        $nb = $rs->rowCount();
        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }


    public function getMembreByEmail($mail){

        $query = "SELECT * FROM membre
        WHERE email = :mail";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "mail" => $mail
        ));

        return $rs;
    }
    public function getMmembreById($id){

        $query = "SELECT * FROM membre
        WHERE id_membre = :id";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "id" => $id
        ));

        return $rs;
    }

    //Count

    public function nbrMmembre(){
        $query = "SELECT COUNT(*) as nb FROM membre";
        $rs = $this->bdd->query($query);
        return $rs;
    }

//Update

    // Update MP
    public function updatePassword($password,$id){
        $query = "UPDATE membre
            SET mot_de_passe = :password WHERE id_membre = :id ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "password" => $password,
            "id" => $id
        ));

        $nb = $rs->rowCount();
        return $nb;

    }
    public function updateMembrePhoto($photo,$id){
        $query = "UPDATE membre
            SET photo = :photo
            WHERE id_membre = :id ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "photo" => $photo,
            "id" => $id
        ));

        $nb = $rs->rowCount();
        return $nb;

    }
    // Verification valeur existant
    public function verify($propriete1,$val1,$propriete2,$val2){

        $query = "SELECT * FROM carte WHERE $propriete1 = :val1 AND $propriete2 = :val2";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val1" => $val1,
            "val2" => $val2
        ));

        return $rs;
    }
    public function verifPhone($propriete1,$val1,$propriete2,$val2,$propriete3,$val3){

        $query = "SELECT * FROM carte WHERE $propriete1 = :val1 AND $propriete2 = :val2 AND $propriete3 = :val3";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val1" => $val1,
            "val2" => $val2,
            "val3" => $val3
        ));

        return $rs;
    }
    public function verifCarte($propriete,$val){

        $query = "SELECT * FROM carte WHERE $propriete = :val";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val" => $val
        ));

        return $rs;
    }




}
// Instance

$carte = new Carte();