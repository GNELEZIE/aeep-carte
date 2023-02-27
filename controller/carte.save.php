<?php

if(isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
    extract($_POST);

//function
    include_once $function."/cinetpay/marchand.php";
    include_once $function."/cinetpay/commande.php";

    $dateNais = $_POST['dat'];
    $nom =  htmlentities(trim(addslashes($nom)));
    $prenom =  htmlentities(trim(addslashes($prenom)));
    $niveau =  htmlentities(trim(addslashes($niveau)));
    $lieu =  htmlentities(trim(addslashes($lieu)));
    $village =  htmlentities(trim(addslashes($village)));
    $genre =  htmlentities(trim(addslashes($genre)));
    $phone =  htmlentities(trim(addslashes($phone)));
    $isoPhone =  htmlentities(trim(addslashes($isoPhone)));
    $dialPhone =  htmlentities(trim(addslashes($dialPhone)));
    $villageName = village_name($village);
    $slug = create_slug($_POST['prenom']);
    $propriete1 ='prenom';
    $propriete2 ='iso_phone';
    $propriete3 ='dial_phone';
    $propriete4 ='phone';
    $propriete5 ='etat';
    $propriete6 ='trans_id';
    $etatValid = 1;
    $etatInValid = 2;

    $amount = 1000;
    $currency = 'XOF';
    $description = 'La carte de membre AEEP';


    $verifSlug = $carte->verifCarte($propriete1,$prenom);


    $verifPhone = $carte->verifPhone($propriete2,$isoPhone,$propriete3,$dialPhone,$propriete4,$phone);
    $rsSlug = $verifSlug->fetch();
    $nbSlug =$verifSlug->rowCount();

    if($nbSlug > 0 ){
        $slug = $slug.'-'.$nbSlug;
    }

    $extensionValide = array('jpeg', 'jpg', 'png');
    $piece_ext = explode('.',$_FILES['piece']['name']);
    $piece_ext = strtolower(end($piece_ext));

    if (in_array($piece_ext, $extensionValide)) {
        $piece = uniqid().'.'.$piece_ext;
        $destination = $_SERVER['DOCUMENT_ROOT'].'/inscription.aeep-pongala.com/uploads/'.$piece;
//        $destination = $_SERVER['DOCUMENT_ROOT'].'/www/aeep-carte/uploads/'.$piece;
        $tmp_name = $_FILES['piece']['tmp_name'];
        move_uploaded_file($tmp_name, $destination);
    }



    $extensionValide = array('jpeg', 'jpg', 'png');
    $photo_ext = explode('.',$_FILES['photo']['name']);
    $photo_ext = strtolower(end($photo_ext));

    if (in_array($photo_ext, $extensionValide)) {
        $photo = uniqid().'.'.$photo_ext;
        $destination = $_SERVER['DOCUMENT_ROOT'].'/inscription.aeep-pongala.com/uploads/'.$photo;
//        $destination = $_SERVER['DOCUMENT_ROOT'].'/www/aeep-carte/uploads/'.$photo;
        $tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($tmp_name, $destination);
    }
    if($verifPhone->rowCount() > 0 and $rsSlug['etat'] == 1){
        $errors['cart'] = 'Ce numéro est déjà inscrit pour la carte de membre AEEP !';
    }else{
        $save = $carte->addCarte($dateGmt,$genre,$nom,$prenom,$slug,$dateNais,$lieu,$isoPhone,$dialPhone,$phone,$niveau,$village,$piece,$photo);
        if($save >0){

            $commande = new Commande();
            //transaction id
            $id_transaction = date("YmdHis"); // or $id_transaction = Cinetpay::generateTransId()

            //Veuillez entrer votre apiKey
            $apikey = $marchand["apikey"];
            //Veuillez entrer votre siteId
            $site_id = $marchand["site_id"];

            //notify url
            $notify_url = $commande->getCurrentUrl().'function/cinetpay/notify/notify.php';
            //return url
            $return_url = $commande->getCurrentUrl().'function/cinetpay/return/return.php';
            $channels = "ALL";

            /*information supplémentaire que vous voulez afficher
             sur la facture de CinetPay(Supporte trois variables
             que vous nommez à votre convenance)*/
            $invoice_data = array(
                "Nom & Prénom" => $nom.' '.$prenom,
                "Téléphone" => $dialPhone.' '.$phone,
                "Village" => $villageName
            );
            $save = $carte->updateIdTrans($propriete6,$id_transaction,$save);
            //
            $formData = array(
                "transaction_id"=> $id_transaction,
                "amount"=> $amount,
                "currency"=> $currency,
                "customer_surname"=> $nom,
                "customer_name"=> $prenom,
                "description"=> $description,
                "notify_url" => $notify_url,
                "return_url" => $return_url,
                "channels" => $channels,
                "invoice_data" => $invoice_data,
                //pour afficher le paiement par carte de credit
                "customer_email" => "", //l'email du client
                "customer_phone_number" => "", //Le numéro de téléphone du client
                "customer_address" => "", //l'adresse du client
                "customer_city" => "", // ville du client
                "customer_country" => "",//Le pays du client, la valeur à envoyer est le code ISO du pays (code à deux chiffre) ex : CI, BF, US, CA, FR
                "customer_state" => "", //L’état dans de la quel se trouve le client. Cette valeur est obligatoire si le client se trouve au États Unis d’Amérique (US) ou au Canada (CA)
                "customer_zip_code" => "" //Le code postal du client
            );
            // enregistrer la transaction dans votre base de donnée
            /*  $commande->create(); */

            $CinetPay = new CinetPay($site_id, $apikey);
            $result = $CinetPay->generatePaymentLink($formData);

            if ($result["code"] == '201')
            {
                $url = $result["data"]["payment_url"];

                // ajouter le token à la transaction enregistré
                /* $commande->update(); */
                //redirection vers l'url de paiement
                header('Location:'.$url);

            }



//        header('location:' . $domaine .'/valide');





        }
    }

}
