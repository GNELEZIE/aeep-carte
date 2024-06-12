<?php

require_once $controller.'/miss.save.php';

$countryCode = 'CI';
$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;

include_once $layout.'/header.php';
?>
<section id="bg_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2 pt-5 text-white">MISS AEEP 2024</h1>
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
                                <h3 class="text-center">Inscription</h3>
                                <div class="register-form">
                                    <form method="post" id="formMiss">
                                        <?php if(!empty($error_m)){ ?>
                                            <div class="alert alert-danger" style="font-size: 14px" role="alert">
                                                <?php foreach($error_m as $error){ ?>
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

                                        </div>
                                        <div class="col-md-12 pl-0">
                                            <div class="form-group">
                                                <label for="phone">Téléphone <i class="required"></i></label>
                                                <input type="tel" class="form-control input-style" id="phone" name="phone" required>
                                                <input type="hidden"  name="isoPhone" id="isoPhone" value="">
                                                <input type="hidden"  name="dialPhone" id="dialPhone" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-12 pl-0 mb-70">
                                            <div class="form-group">
                                                <label for="village">Village</label>
                                                <select name="village" id="village" class="input-style" style="display: none;">
                                                    <option selected="">Categories</option>
                                                    <option value="1">Blagounon</option>
                                                    <option value="2">Baya</option>
                                                    <option value="3">Gballo</option>
                                                    <option value="4">Kasséré</option>
                                                    <option value="5">Koffre</option>
                                                    <option value="6">Koundin</option>
                                                    <option value="7">Lafi</option>
                                                    <option value="8">Landiougou</option>
                                                    <option value="9">Nongana</option>
                                                    <option value="10">Pinvoro</option>
                                                    <option value="11">Tiasso</option>
                                                    <option value="12">Toungboli</option>
                                                    <option value="13">Tomba</option>
                                                    <option value="14">Pongafré</option>
                                                    <option value="15">Sienrè</option>
                                                    <option value="16">Sionfan</option>
                                                    <option value="17">Yelle</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-4 offset-4 text-center">
                                                <input type="hidden" class="form-control " name="formkey" value="<?= $token ?>">
                                                <button class="btn-inscript loadeds w100" style="cursor:pointer"> <i class="load_s"></i> Suivant</button>
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

    $('#formMiss').submit(function(e){
        $('.load_s').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
    });



</script>