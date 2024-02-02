<?php

if(isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){

    extract($_POST);
    include_once $function."/cinetpay/marchand.php";
    include_once $function."/cinetpay/commande.php";
    $nom =  htmlentities(trim(addslashes($nom)));
    $prenom =  htmlentities(trim(addslashes($prenom)));
    $phone =  htmlentities(trim(addslashes($phone)));
    $village =  htmlentities(trim(addslashes($village)));
    $village_name = village_name($village);
    $amount = 100;
    $currency = 'XOF';
    $description = 'Inscription pour la sortie détente';
    $verifPhone = $carte->verifPhoneSortie($phone);

    if($verifPhone->rowCount() > 0){
        $errors['cart'] = 'Ce numéro est déjà inscrit pour la sortie détente AEEP !';
    }else{
        $save = $carte->siginSortie($dateGmt,$nom,$prenom,$phone,$village_name);
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
                "Nom & Prénom" => $_POST['nom'].' '.$_POST['prenom'],
                "Téléphone" => $dialPhone.' '.$phone,
                "Village" => $village_name
            );

            //
            $formData = array(
                "transaction_id"=> $id_transaction,
                "amount"=> $amount,
                "currency"=> $currency,
                "customer_surname"=> $_POST['nom'],
                "customer_name"=> $_POST['prenom'],
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
        }
    }

}
