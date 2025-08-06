<?php

$countryCode = 'CI';
require_once $controller.'/inscription-with-pay.php';
$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;
include_once $layout.'/header.php';
?>
<section id="page-title-area1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2 pt-5 text-white text-uppercase">La boutique en ligne de l'AEEP</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="page-content-wrap">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <h3 class="text-danger">La boutique de l’AEEP est fermée.</h3>
            <p>Contactez ces numéros pour tous vos achats. 05 04 96 01 1</p>
        </div>
    </div>

</section>
<?php include_once $layout.'/footer.php';?>



