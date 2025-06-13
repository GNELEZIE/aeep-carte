<?php
class Resultats {
    public  function  __construct(){
        $this->bdd = bdd();
    }


    public function addReponse($miss_id,$q_id,$rep_id,$not_es,$checked){
        $query = "INSERT INTO resultats(miss_id,q_id,rep_id,not_es,checked)
            VALUES (:miss_id,:q_id,:rep_id,:not_es,:checked)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "miss_id" => $miss_id,
            "q_id" => $q_id,
            "rep_id" => $rep_id,
            "not_es" => $not_es,
            "checked" => $checked
        ));

        $nb = $rs->rowCount();
        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }

    public function getAllResultExit($miss_id,$q_id){
        $query = "SELECT * FROM resultats WHERE miss_id = :miss_id AND q_id = :q_id AND checked  = 1 ORDER BY id_resultats DESC ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "miss_id" => $miss_id,
            "q_id" => $q_id
        ));

        return $rs;
    }


    public function updateData2($propriete,$val,$miss_id,$q_id){
        $query = "UPDATE resultats
            SET $propriete = :val
            WHERE miss_id = :miss_id AND q_id = :q_id AND checked  = 1";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val" => $val,
            "miss_id" => $miss_id,
            "q_id" => $q_id
        ));

        $nb = $rs->rowCount();
        return $nb;
    }

}
// Instance

$resultats = new Resultats();