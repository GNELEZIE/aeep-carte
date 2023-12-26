<?php
class Cartes {
    public  function  __construct(){
        $this->bdd = bdd();
    }



    public function siginSortie($date_sortie,$nom,$prenom,$phone,$village){
        $query = "INSERT INTO sortie(date_sortie,nom,prenom,phone,village)
            VALUES (:date_carte,:nom,:prenom,:phone,:village)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "date_sortie" => $date_sortie,
            "nom" => $nom,
            "prenom" => $prenom,
            "phone" => $phone,
            "village" => $village
        ));
        $nb = $rs->rowCount();
        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }


    public function verifPhoneSortie($val1){

        $query = "SELECT * FROM sortie WHERE phone = :val1";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val1" => $val1
        ));

        return $rs;
    }





}
// Instance

$cartes = new Cartes();