<?php
if(isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
    extract($_POST);



    foreach ( $_SESSION['ques'] as $cle => $valeur) {
        $getRep = $reponses->getRepByQuId($valeur);
        while($get_repData = $getRep->fetch()){
            $checck = $valeur.'_rp_'.$get_repData['id_reponses'];

            if(isset($_POST[$checck])){
                $save = $resultats->addReponse($_SESSION['compo']['id_miss'],$valeur,$get_repData['id_reponses'],$_POST[$checck]);
            }

        }
    }

    $save = $miss->addMiss($dateGmt,$_SESSION['suivant']['nom'],$_SESSION['suivant']['phone'],$_SESSION['suivant']['village'],$_SESSION['suivant']['slug']);
    if($save > 0){
        header('location:' .$domaine.'/merci');
    }else{
        $error_m['register'] = 'Une erreur s\'est produite, veuillez réessayer.';
    }





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
