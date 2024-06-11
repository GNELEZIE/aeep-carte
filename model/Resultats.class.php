<?php
class Resultats {
    public  function  __construct(){
        $this->bdd = bdd();
    }


    public function addReponse($miss_id,$q_id,$rep_id,$not_es){
        $query = "INSERT INTO resultats(miss_id,q_id,rep_id,not_es)
            VALUES (:miss_id,:q_id,:rep_id,:not_es)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "miss_id" => $miss_id,
            "q_id" => $q_id,
            "rep_id" => $rep_id,
            "not_es" => $not_es
        ));

        $nb = $rs->rowCount();
        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }




}
// Instance

$resultats = new Resultats();