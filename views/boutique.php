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
            <div class="product-grid">

                <?php
                $prod = $produit->getAllProduct();

                while($dataprod = $prod->fetch()){
                ?>
                <div class="product-box">
                    <img src="<?=$asset?>/media/<?=html_entity_decode(stripslashes($dataprod['photo_p']))?>" class="bg-product" alt="<?=html_entity_decode(stripslashes($dataprod['nom']))?>">
                    <div class="content">
                        <h3><?=html_entity_decode(stripslashes($dataprod['nom']))?></h3>
                        <div class="price"><?=number_format($dataprod['prix'],0 ,' ',' ')?> FCFA</div>
                        <a class="btn" href="<?=$domaine?>/commander/<?=html_entity_decode(stripslashes($dataprod['slug']))?>"> <i class="fa fa-shopping-bag"></i> Acheter</a>
                    </div>
                </div>

                <?php
                }
                ?>


            </div>
        </div>
    </div>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6245556878555982"
                crossorigin="anonymous"></script>
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



