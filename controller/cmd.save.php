<?php

if(isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
    extract($_POST);

//function
    include_once $function."/cinetpay/marchand.php";
    include_once $function."/cinetpay/commande.php";

    $nom =  htmlentities(trim(addslashes($nom)));
    $village =  htmlentities(trim(addslashes($village)));
    $phone =  htmlentities(trim(addslashes($phone)));
    $qte_tshirt =  htmlentities(trim(addslashes($qte_tshirt)));

    $villageName = village_name($village);


    $propriete = 'transc_id';

    $leprix = $dataprodu['prix']*$qte_tshirt;
//    echo $leprix;
//    exit;
    $amount = $leprix;
    $currency = 'XOF';
    $description = $qte_tshirt.' '.html_entity_decode(stripslashes($dataprodu['nom'])).' AEEP';

    $save = $produit->addCommande($dateGmt,$nom,$phone,$village,$qte_tshirt,$dataprodu['id_produit']);

    if($save >0){
        $commande = new Commande();
        //transaction id
        $id_transaction = date("YmdHis"); // or $id_transaction = Cinetpay::generateTransId()

        //Veuillez entrer votre apiKey
        $apikey = $marchandboutique["apikey"];
        //Veuillez entrer votre siteId
        $site_id = $marchandboutique["site_id"];

        //notify url
        $notify_url = $commande->getCurrentUrl().'function/cinetpay/notify/notify.php';
        //return url
        $return_url = $commande->getCurrentUrl().'function/cinetpay/return/return.php';
        $channels = "ALL";

        /*information supplémentaire que vous voulez afficher
         sur la facture de CinetPay(Supporte trois variables
         que vous nommez à votre convenance)*/
        $invoice_data = array(
            "Type" => html_entity_decode(stripslashes($dataprodu['nom'])),
            "Nom & Prénom" => $_POST['nom'].'('.$phone.')',
            "Village" => $villageName
        );
        $save = $produit->updateIdTransc($propriete,$id_transaction,$save);
        //
        $formData = array(
            "transaction_id"=> $id_transaction,
            "amount"=> $amount,
            "currency"=> $currency,
            "customer_surname"=> $_POST['nom'],
            "customer_name"=> $_POST['nom'],
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
