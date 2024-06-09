<?php
//$myIp =  Detect::ip();
//$result = json_decode(getDataByUrl('http://ip-api.com/json/'.$myIp),true);
//if($result['status'] == 'success'){
//    $countryCode = $result['countryCode'];
//}else{
//    $countryCode = '';
//}
$countryCode = 'CI';

require_once $controller.'/sortie.save.php';

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
                    <h1 class="h2 pt-5 text-white">Sortie détente AEEP 2024</h1>
                    <h5 class="text-white"><b>Participation : 1 000 F</b></h5>

                    <h5 class="mydate">Le dimanche 19 Mai 2024 à la plage de Jacqueville</h5>

<!--                    <p class="text-white">-->
<!--                       <b> NB: Les membres qui vont payer les cotisation avant le 10 Mai auront un tee-shirt gratuitement.</b>-->
<!--                    </p>-->
                </div>
            </div>
        </div>

    </div>

</section>

<section id="page-content-wrap">
    <div class="register-page-wrapper section-padding" style="padding: 15px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="register-page-inner">
                        <div class="col-lg-10 m-auto">
                            <div class="register-form-content">
                                <div class="register-form-wrap">

                                    <h5 class="py-3"><b style="color: #ff0000">Inscription</b></h5>

                                    <div class="register-form">
                                        <form method="post" id="formCarte" enctype="multipart/form-data">
                                            <?php if(!empty($errors)){ ?>
                                                <div class="alert alert-danger" style="font-size: 14px" role="alert">
                                                    <?php foreach($errors as $error){ ?>
                                                        <?php echo $error ?>
                                                    <?php }?>
                                                </div>
                                            <?php }?>

                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="nom">Nom <i class="required"></i></label>
                                                        <input type="hidden" class="form-control " name="formkey" value="<?= $token ?>">
                                                        <input type="text" class="form-control input-style" id="nom" name="nom" placeholder="Nom" required/>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="prenom">Prénom <i class="required"></i></label>
                                                        <input type="text" class="form-control input-style" id="prenom" name="prenom" placeholder="Prénom" required/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone">Téléphone <i class="required"></i></label>
                                                        <input type="tel" class="form-control input-style" id="phone" name="phone" required>
                                                        <input type="hidden"  name="isoPhone" id="isoPhone" value="">
                                                        <input type="hidden"  name="dialPhone" id="dialPhone" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="village">Village</label>
                                                        <select name="village" id="village" class="input-style" style="display: none;">
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
                                            </div>
                                            <div class="row pt-5">
                                                <div class="col-md-4 offset-4 text-center">
                                                    <button class="btn-inscript loaded w100" style="cursor:pointer"> S'inscire maintenant</button>
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

    $('#formCarte').submit(function(e){
        $('.loaded').html('Envoie en cours...');
    });



</script>