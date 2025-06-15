<?php
class Carte {
    public  function  __construct(){
        $this->bdd = bdd();
    }


    // Read

    public function getAllCarte(){
        $query = "SELECT * FROM carte ORDER BY id_carte DESC";
        $rs = $this->bdd->query($query);
        return $rs;
    }

    public function siginSortie($date_sortie,$nom,$prenom,$phone,$village){
        $query = "INSERT INTO sortie(date_sortie,nom,prenom,phone,village)
            VALUES (:date_sortie,:nom,:prenom,:phone,:village)";
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




    public function udpCarte($date_carte,$nom,$prenom,$slug,$iso_phone,$dial_phone,$phone,$village,$photo,$statut){
        $query = "INSERT INTO carte(date_carte,nom,prenom,slug,iso_phone,dial_phone,phone,village,photo,statut)
            VALUES (:date_carte,:nom,:prenom,:slug,:iso_phone,:dial_phone,:phone,:village,:photo,:statut)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "date_carte" => $date_carte,
            "nom" => $nom,
            "prenom" => $prenom,
            "slug" => $slug,
            "iso_phone" => $iso_phone,
            "dial_phone" => $dial_phone,
            "phone" => $phone,
            "village" => $village,
            "photo" => $photo,
            "statut" => $statut
        ));
        $nb = $rs->rowCount();
        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }



    public function addCarte($date_carte,$genre,$nom,$prenom,$slug,$date_nais,$lieu_nais,$iso_phone,$dial_phone,$phone,$niveau,$village,$piece,$photo,$demande){
        $query = "INSERT INTO carte(date_carte,genre,nom,prenom,slug,date_nais,lieu_nais,iso_phone,dial_phone,phone,niveau,village,piece,photo,demande)
            VALUES (:date_carte,:genre,:nom,:prenom,:slug,:date_nais,:lieu_nais,:iso_phone,:dial_phone,:phone,:niveau,:village,:piece,:photo,:demande)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "date_carte" => $date_carte,
            "genre" => $genre,
            "nom" => $nom,
            "prenom" => $prenom,
            "slug" => $slug,
            "date_nais" => $date_nais,
            "lieu_nais" => $lieu_nais,
            "iso_phone" => $iso_phone,
            "dial_phone" => $dial_phone,
            "phone" => $phone,
            "niveau" => $niveau,
            "village" => $village,
            "piece" => $piece,
            "photo" => $photo,
            "demande" => $demande
        ));
        $nb = $rs->rowCount();
        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }



//Update

    // Update MP
    public function updateIdTrans($propriete1,$val1,$id){
        $query = "UPDATE carte
            SET $propriete1 = :val1 WHERE id_carte  = :id ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val1" => $val1,
            "id" => $id
        ));

        $nb = $rs->rowCount();
        return $nb;

    }
    public function updateEtat($propriete1,$val1,$id){
        $query = "UPDATE carte
            SET $propriete1 = :val1 WHERE id_carte  = :id ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val1" => $val1,
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
    public function verifPhoneSortie($val1){

        $query = "SELECT * FROM sortie WHERE phone = :val1";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val1" => $val1
        ));

        return $rs;
    }

    public function getMembreByPhone($val1){

        $query = "SELECT * FROM carte WHERE phone = :val1";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val1" => $val1
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
    public function verifCartes($propriete1,$val1,$propriete2,$val2){

        $query = "SELECT * FROM carte WHERE $propriete1 = :val1 and $propriete2 = :val2";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val1" => $val1,
            "val2" => $val2
        ));

        return $rs;
    }




}
// Instance

$carte = new Carte();