<?php
class Miss {
    public  function  __construct(){
        $this->bdd = bdd();
    }

    // Read

    public function addMiss($date_miss,$nom,$phone,$village,$slug){
        $query = "INSERT INTO miss(date_miss,nom,phone,village,slug)
            VALUES (:date_miss,:nom,:phone,:village,:slug)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "date_miss" => $date_miss,
            "nom" => $nom,
            "phone" => $phone,
            "village" => $village,
            "slug" => $slug
        ));

        $nb = $rs->rowCount();
        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }

    public function getMissById($val){

        $query = "SELECT * FROM miss WHERE id_miss = :val";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val" => $val
        ));

        return $rs;
    }
    public function verifMiss($propriete,$val){

        $query = "SELECT * FROM miss WHERE $propriete = :val";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val" => $val
        ));

        return $rs;
    }


    // Verification valeur existant


    // update



}
// Instance

$miss = new Miss();