<?php
if(isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
    extract($_POST);

    $save = $miss->addMiss($dateGmt,$_SESSION['suivant']['nom'],$_SESSION['suivant']['phone'],$_SESSION['suivant']['village'],$_SESSION['suivant']['slug']);


    $propriete = 'not_es';
    $notes = 0;

    foreach ( $_SESSION['ques'] as $cle => $valeur) {
        $getRep = $reponses->getRepByQuId($valeur);
        while($get_repData = $getRep->fetch()){

            $checck = $valeur.'_rp_'.$get_repData['id_reponses'];

            if(isset($_POST[$checck])){

                $repExit = $resultats->getAllResultExit($save,$valeur);
                if($repExit->rowCount() > 0){
                    $cochered = 0;
                    $udp = $resultats->updateData2($propriete,$notes,$save,$valeur);
                }else{
                    $cochered = $_POST[$checck];
                }
                $cocher = 1;

            }else{
                $cocher = 0;
                $cochered = 0;
            }
            $save_rep = $resultats->addReponse($save,$valeur,$get_repData['id_reponses'],$cochered,$cocher);


        }
    }

    header('location:' .$domaine.'/merci');




//
//   if($save > 0){
//       $data = $miss->getMissById($save)->fetch();
//
//       $_SESSION['compo'] = $data;
//
//       header('location:' .$domaine.'/miss-compo');
//   }else{
//       $error_s['register'] = 'Une erreur s\'est produite, veuillez réessayer.';
//   }
}
