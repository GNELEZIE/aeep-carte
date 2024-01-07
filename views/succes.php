<?php

//require_once $controller.'/carte.save.php';
$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;
include_once $layout.'/header.php';
?>


<section id="page-content-wrap">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-4">
                    <div class="register-page-inner">
                        <div class="col-lg-10 m-auto">
                            <div class="register-form-content text-center">
                                <img src="<?=$asset?>/media/sss.png" class="w87" alt=""/>
                                <h3 class="text-green">Félicitation !</h3>
                                <p>Votre inscription pour la sortie détente de l'AEEP a été effectué avec succès.</p>
                                <p>Nb : Contactez le responsable à l'organisation de la sortie pour le paiement au <b>05 56 05 44 66</b></p>
                                <p class="text-danger"><b><i>Si vous  payez votre cotisation avant le 10 Mai 2024 vous aurez un Tee-Shirt gratuitement.</i></b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once $layout.'/footer.php';?>
