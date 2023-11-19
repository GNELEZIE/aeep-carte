<?php

require_once $controller.'/reunion.inscription.php';

$countryCode = 'CI';
$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;

include_once $layout.'/header.php';
?>
<section id="bg1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2 pt-5 text-white">Inscription pour la réunion</h1>
                    <p class="text-white">
                        Pour ceux qui veulent suivre la première réunion de l'AEEP en ligne veuillez remplir le formulaire.
                    </p>
                    <a href="#" class="btn btn-inscript smooth-scroll"><b>Le 12 novembre 2023</b></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="page-content-wrap" style="background: #e8f6ff">
    <div class="register-page-wrapper" style="padding: 45px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-3">
                    <div class="register-page-inner pt-2 pb-2" style="background: #ffffff;border-radius: 9px;">
                        <div class="register-form-content">
                            <div class="reunion-form-wrap pt-1">
                                <h3 class="text-center">Remplir le formulaire</h3>
                                <div class="register-form">
                                    <form method="post" id="formReunion">
                                        <?php if(!empty($errors)){ ?>
                                            <div class="alert alert-danger" style="font-size: 14px" role="alert">
                                                <?php foreach($errors as $error){ ?>
                                                    <?php echo $error ?>
                                                <?php }?>
                                            </div>
                                        <?php }?>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="nom">Nom et prénom <i class="required"></i></label>
                                                    <input type="text" class="form-control input-style" id="nom" name="nom" placeholder="Nom et prénom" required/>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="email">Email <i class="required"></i></label>
                                                    <input type="text" class="form-control input-style" id="email" name="email" placeholder="Email" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 pl-0">
                                            <div class="form-group">
                                                <label for="phone">Téléphone <i class="required"></i></label>
                                                <input type="tel" class="form-control input-style" id="phone" name="phone" required>
                                                <input type="hidden"  name="isoPhone" id="isoPhone" value="">
                                                <input type="hidden"  name="dialPhone" id="dialPhone" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 pl-0">
                                            <div class="form-group">
                                                <label for="ville">Ville <i class="required"></i></label>
                                                <input type="text" class="form-control input-style" id="ville" name="ville" placeholder="Ville" required/>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8 offset-2 text-center">
                                                <input type="hidden" class="form-control " name="formkey" value="<?= $token ?>">
                                                <button class="btn-inscript loadeds w100" style="cursor:pointer"> S'inscrire maintenant</button>
                                            </div>
                                        </div>
                                    </form>
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

<script>

    $("#phone").keyup(function (event) {
        if (/\D/g.test(this.value)) {
            //Filter non-digits from input value.
            this.value = this.value.replace(/\D/g, '');
        }
    });

    var inputPhone = document.querySelector("#phone");
    window.intlTelInput(inputPhone, {
        initialCountry: '<?=$countryCode?>',
        utilsScript: "<?=$asset?>/plugins/intltelinput/js/utils.js"
    });
    var iti = window.intlTelInputGlobals.getInstance(inputPhone);
    var countryData = iti.getSelectedCountryData();
    $('#isoPhone').val(countryData["iso2"]);
    $('#dialPhone').val(countryData["dialCode"]);
    inputPhone.addEventListener("countrychange", function() {
        var iti = window.intlTelInputGlobals.getInstance(inputPhone);
        var countryData = iti.getSelectedCountryData();
        $('#isoPhone').val(countryData["iso2"]);
        $('#dialPhone').val(countryData["dialCode"]);
    });

    $('#formReunion').submit(function(e){
        $('.loadeds').html('Envoie en cours...');
    });



</script>