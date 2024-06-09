<?php
class Questions {
    public  function  __construct(){
        $this->bdd = bdd();
    }





    // Read
    public function getAllQuestion(){
        $query = "SELECT * FROM questions ORDER BY RAND() LIMIT 5";
        $rs = $this->bdd->query($query);
        return $rs;
    }
// Count

    public function getNbAllCarteEnAttent(){
        $query = "SELECT COUNT(*) as nb FROM questions
                  WHERE ty = 0";
        $rs = $this->bdd->query($query);

        return $rs;
    }

    // Update


    // Delete
    public function deleteQuestion($id){

        $query = "DELETE  FROM questions WHERE id_questions  = :id";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "id" => $id

        ));

        $nb = $rs->rowCount();
        return $nb;

    }


    // Verification valeur existant


    // update



}
// Instance

$questions = new Questions();