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
    $amount = 3550;
    $currency = 'XOF';
    $description = 'Inscription pour la sortie détente';
    $verifPhone = $sortie->verifPhoneSortie($phone);
    $propriete = 'trans_id';
    if($verifPhone->rowCount() > 0){
        $errors['cart'] = 'Ce numéro est déjà inscrit pour la sortie détente AEEP !';
    }else{
        $save = $sortie->siginSortie($dateGmt,$nom,$prenom,$phone,$village_name);
        if($save >0){
            $commande = new Commande();
            try {

                //transaction id
                $id_transaction = date("YmdHis"); // or $id_transaction = Cinetpay::generateTransId()

                //Veuillez entrer votre apiKey
                $apikey = $marchand["apikey"];
                //Veuillez entrer votre siteId
                $site_id = $marchand["site_id"];

                //notify url
                $notify_url = $commande->getCurrentUrl().'cinetpay-sdk-php/notify/notify.php';
                //return url
                $return_url = $commande->getCurrentUrl().'cinetpay-sdk-php/return/return.php';
                $channels = "ALL";
                $invoice_data = array(
                    "Nom & Prénom" => $nom.' '.$prenom,
                    "Téléphone" => $phone,
                    "Village" => $village_name
                );
                $saves = $sortie->updateIdTransSortie($propriete,$id_transaction,$save);
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
                    "metadata" => "", // utiliser cette variable pour recevoir des informations personnalisés.
                    "alternative_currency" => "",//Valeur de la transaction dans une devise alternative
                    //Fournir ces variables obligatoirement pour le paiements par carte bancaire
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
                    header('Location:'.$url);

                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }

        }
    }

}
