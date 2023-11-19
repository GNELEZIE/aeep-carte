<?php
class Reunion {
    public  function  __construct(){
        $this->bdd = bdd();
    }


    public function addReunion($date_mb,$nom,$phone,$iso,$dial,$email,$ville){
        $query = "INSERT INTO reunion(date_reunion,nom,phone,iso_phone,dial_phone,email,ville)
            VALUES (:date_mb,:nom,:phone,:iso,:dial,:email,:ville)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "date_mb" => $date_mb,
            "nom" => $nom,
            "phone" => $phone,
            "iso" => $iso,
            "dial" => $dial,
            "email" => $email,
            "ville" => $ville
        ));
        $nb = $rs->rowCount();
        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }




    public function getMembreByEmail($mail){

        $query = "SELECT * FROM reunion
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


    // Verification valeur existant


    public function verifMembre($propriete,$val){

        $query = "SELECT * FROM membre WHERE $propriete = :val";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val" => $val
        ));

        return $rs;
    }




}
// Instance

$reunion = new Reunion();