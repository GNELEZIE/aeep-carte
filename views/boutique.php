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
                    <h1 class="h2 pt-5 text-white text-uppercase">La boutique en ligne de l'AEEP</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="page-content-wrap">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <div class="product-grid">
                <!-- Produit 1 -->
                <div class="product-box">
                    <img src="<?=$asset?>/media/02.png" alt="Tee-shirt AEEP">
                    <div class="content">
                        <h3>Tee-shirt</h3>
                        <div class="price">1500 FCFA</div>
                        <a class="btn" href="<?=$domaine?>/commander">Commander</a>
                    </div>
                </div>

                <!-- Produit 2 -->
                <div class="product-box">
                    <img src="<?=$asset?>/media/02.png" alt="Polo AEEP">
                    <div class="content">
                        <h3>Polo</h3>
                        <div class="price">2 500 FCFA</div>
                        <a class="btn" href="<?=$domaine?>/commander">Commander</a>
                    </div>
                </div>

                <!-- Produit 3 -->
                <div class="product-box">
                    <img src="<?=$asset?>/media/02.png" alt="Casquette AEEP">
                    <div class="content">
                        <h3>Casquette</h3>
                        <div class="price">2000 FCFA</div>
                        <a class="btn" href="<?=$domaine?>/commander">Commander</a>
                    </div>
                </div>

                <!-- Produit 4 -->

            </div>
        </div>
    </div>
<!--    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6245556878555982"-->
<!--            crossorigin="anonymous"></script>-->
<!--    <!-- AEEP 2 -->-->
<!--    <ins class="adsbygoogle"-->
<!--         style="display:block"-->
<!--         data-ad-client="ca-pub-6245556878555982"-->
<!--         data-ad-slot="8442423149"-->
<!--         data-ad-format="auto"-->
<!--         data-full-width-responsive="true"></ins>-->
<!--    <script>-->
<!--        (adsbygoogle = window.adsbygoogle || []).push({});-->
<!--    </script>-->
</section>
<?php include_once $layout.'/footer.php';?>



