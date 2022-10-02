<?php
$data_info = '';
if(isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
    extract($_POST);


    $phone =  htmlentities(trim(addslashes($phone)));
    $isoPhone =  htmlentities(trim(addslashes($isoPhone)));
    $dialPhone =  htmlentities(trim(addslashes($dialPhone)));

    $propriete1 ='iso_phone';
    $propriete2 ='dial_phone';
    $propriete3 ='phone';

    $verifPhone = $carte->verifPhone($propriete1,$isoPhone,$propriete2,$dialPhone,$propriete3,$phone);

    if($data = $verifPhone->fetch()){
        if($data['statut'] == 0){
            $data_info = '0';
        }elseif($data['statut'] == 1){
            $data_info = '1';
        }else{
            $data_info = '2';
        }
    }else{
        $data_info = '3';
    }

}
$output = array(
    'data_info' => $data_info
);
echo json_encode($output);