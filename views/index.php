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
                <div class="col-lg-6 mb-3">
                    <div class="register-page-inner1 border-left-orange">
                        <div class="col-lg-10 m-auto">
                            <div class="register-form-content  pb-2">
                                <h3 class="font-m">Renouvellement</h3>
                                <p>Pour ceux qui ont déjà une carte de membre AEEP, veuillez mettre à jour vos informations <b>gratuitement</b> en cliquant sur le bouton ci-dessous.</p>
                                <a href="<?= $domaine ?>/mise-a-jour" class="btn-inscript">Mise à jour</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="register-page-inner1 border-left-green">
                        <div class="col-lg-10 m-auto">
                            <div class="register-form-content pb-2">
                                <h3 class="font-m">Nouvelle inscription</h3>
                                <p class="mb-0">Pour ceux qui n'ont pas de carte de membre AEEP, veuillez vous inscrire en cliquant sur le bouton ci-dessous.</p>
                              <p class="mt-0 pt-0 text-danger"> <b> NB : La carte membre AEEP coût 1 000f</b></p>
                                <a href="<?=$domaine?>/nouvelle-inscription" class="btn-mise-a-jour">Inscription</a>
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

<script>

    var photoDiv = $('.photoDiv');
    var inputPiece = $('.input-piece');
    var inputPhoto = $('.input-photo');

    function readURLPhoto(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var fileType = input.files[0]['type'];
            var valideImage = ["image/jpg","image/jpeg","image/png"];

            reader.onload = function (e) {
                if($.inArray(fileType, valideImage) < 0){
                    $('.file-msg').html('<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera mb-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg><br/>Cliquez ou glissez déposez la photo de couverture');
                    inputPhoto.val('');
                    inputPhoto.attr('src', '');
                    swal("Oups format non autorisé !","Les formats acceptés sont : jpg, jpeg et png !","error");
                }else{
                    photoDiv.css('background-image', 'url('+e.target.result+')');
                }

            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    inputPhoto.on('dragenter focus click', function() {
        photoDiv.addClass('is-active');
    });

    inputPhoto.on('dragleave blur drop', function() {
        photoDiv.removeClass('is-active');
    });

    inputPhoto.on('change', function() {

        var filesCount = $(this)[0].files.length;
        var textContainer = $(this).prev();
        if (filesCount === 1) {
            var fileName = $(this).val().split('\\').pop();
            textContainer.text(fileName);
        } else {
            textContainer.html('<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera mb-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg><br/>Cliquez ou glissez déposez la photo de couverture');
        }
        readURLPhoto(this);
    });

</script>
<script>

    var pieceDiv = $('.pieceDiv');
    var inputPiece = $('.input-piece');
    var inputPhoto = $('.input-photo');

    function readURLPiece(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var fileType = input.files[0]['type'];
            var valideImage = ["image/jpg","image/jpeg","image/png"];

            reader.onload = function (e) {
                if($.inArray(fileType, valideImage) < 0){
                    $('.file-msg').html('<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera mb-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg><br/>Cliquez ou glissez déposez la photo de couverture');
                    inputPiece.val('');
                    inputPiece.attr('src', '');
                    swal("Oups format non autorisé !","Les formats acceptés sont : jpg, jpeg et png !","error");
                }else{
                    pieceDiv.css('background-image', 'url('+e.target.result+')');
                }

            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    inputPiece.on('dragenter focus click', function() {
        pieceDiv.addClass('is-active');
    });

    inputPiece.on('dragleave blur drop', function() {
        pieceDiv.removeClass('is-active');
    });

    inputPiece.on('change', function() {

        var filesCount = $(this)[0].files.length;
        var textContainer = $(this).prev();
        if (filesCount === 1) {
            var fileName = $(this).val().split('\\').pop();
            textContainer.text(fileName);
        } else {
            textContainer.html('<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera mb-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg><br/>Cliquez ou glissez déposez la photo de couverture');
        }
        readURLPiece(this);
    });

</script>
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