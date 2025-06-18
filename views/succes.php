<?php
//$myIp =  Detect::ip();
//$result = json_decode(getDataByUrl('http://ip-api.com/json/'.$myIp),true);
//if($result['status'] == 'success'){
//    $countryCode = $result['countryCode'];
//}else{
//    $countryCode = '';
//}
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
                    <h1 class="h2 pt-5 text-white text-uppercase">AEEP Koffré 2025</h1>
<!--                    <p>Pour ceux qui ont déjà effectué l'inscription vous pouvez-->
<!--                        cliquer sur le bouton vérifier la disponibilité de ma carte pour vérifier la disponibilité de votre carte-->
<!--                    </p>-->
<!--                    <a href="--><?//=$domaine?><!--/verify" class="btn btn-inscript smooth-scroll">Verifier la disponibilité</a>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section id="page-content-wrap">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="register-page-inner">
                        <div class="col-lg-10 m-auto">
                            <div class="register-form-content">
                                <div class="register-form-wrap">
                                    <h3 class="text-success"><b>Vos informations ont été mises à jour avec succès.</b></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6245556878555982"
            crossorigin="anonymous"></script>
    <!-- AEEP 2 -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-6245556878555982"
         data-ad-slot="8442423149"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</section>
<?php include_once $layout.'/footer.php';?>



