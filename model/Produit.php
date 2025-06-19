<?php
class Produit {
    public  function  __construct(){
        $this->bdd = bdd();
    }


    // Read

    public function getAllProduct(){
        $query = "SELECT * FROM produit ORDER BY id_produit DESC";
        $rs = $this->bdd->query($query);
        return $rs;
    }

    public function getProductBySlug($val1){

        $query = "SELECT * FROM produit WHERE slug = :val1";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val1" => $val1
        ));

        return $rs;
    }



    public function addCommande($createdat,$nom_client,$phone,$village,$qty,$prod_id){
        $query = "INSERT INTO commander(createdat,nom_client,phone,village,qty,prod_id)
            VALUES (:createdat,:nom_client,:phone,:village,:qty,:prod_id)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "createdat" => $createdat,
            "nom_client" => $nom_client,
            "phone" => $phone,
            "village" => $village,
            "qty" => $qty,
            "prod_id" => $prod_id
        ));
        $nb = $rs->rowCount();
        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }

    public function updateIdTransc($propriete1,$val1,$id){
        $query = "UPDATE commander
            SET $propriete1 = :val1 WHERE id_commander  = :id ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val1" => $val1,
            "id" => $id
        ));

        $nb = $rs->rowCount();
        return $nb;

    }



}
// Instance

$produit = new Produit();