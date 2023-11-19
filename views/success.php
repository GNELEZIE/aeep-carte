<?php

require_once $controller.'/reunion.inscription.php';

$countryCode = 'CI';
$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;

include_once $layout.'/header.php';
?>


<section id="page-content-wrap" style="background: #e8f6ff">
    <div class="register-page-wrapper" style="padding: 45px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-3">
                    <div class="register-page-inner pt-2 pb-2" style="background: #ffffff;border-radius: 9px;">
                        <div class="register-form-content">
                            <div class="reunion-form-wrap pt-1 text-center">
                                <img src="<?=$asset?>/media/sss.png" class="animate__animated animate__fadeIn w-25" alt=""/>
                                <h3 class="text-center text-success">Félicitation ! </h3>
                                <div class="register-form">
                                 <p class="text-center">Votre inscription pour la réunion a été effectué avec succès.</p>
                                 <p class="text-center text-danger">NB :  Un lien vous sera envoyé 5 minutes avant la réunion. </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once $layout.'/footer.php';?>

