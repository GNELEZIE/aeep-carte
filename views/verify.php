<?php
$countryCode = 'CI';
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
                            <div class="register-form-content">
<!--                                <img src="--><?//=$asset?><!--/media/sss.png" class="w87" alt=""/>-->
                                <p class="text-center">Entrer votre numéro de téléphone pour verifier la disponiblité de votre carte de membre AEEP !</p>
                                <form method="post" id="formVerify">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="phone">Téléphone <i class="required"></i></label>
                                                <input type="tel" class="form-control input-style" id="phone" name="phone" required>
                                                <input type="hidden"  name="isoPhone" id="isoPhone" value="">
                                                <input type="hidden"  name="dialPhone" id="dialPhone" value="">
                                                <input type="hidden" class="form-control " name="formkey" value="<?= $token ?>">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button class="btn-inscript loadVerif w100" style="cursor:pointer"> Verifier maintenant</button>
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

    $('#formVerify').submit(function(e){
        e.preventDefault();
        $('.loadVerif').html('Verificaion...');
        var value = document.getElementById('formVerify');
        var form = new FormData(value);

        $.ajax({
            method: 'post',
            url: '<?=$domaine?>/controle/verify',
            data: form,
            contentType:false,
            cache:false,
            processData:false,
            dataType: 'json',
            success: function(data){
                if(data.data_info == "0"){
                     $('.loadVerif').html('Verifier maintenant');
                    $('.loaded').html('Envoyer maintenant');
                    $('#phone').val('');
                    swal("Votre carte est en cours de production !","", "warning");
                }else if(data.data_info == "1") {
                     $('.loadVerif').html('Verifier maintenant');
                    $('#phone').val('');
                    swal("Votre carte est disponible!","", "success");
                }else if(data.data_info == "2") {
                     $('.loadVerif').html('Verifier maintenant');
                    $('#phone').val('');
                    swal("Votre inscription a été rejeté !","", "error");
                }else{
                     $('.loadVerif').html('Verifier maintenant');
                    $('#phone').val('');
                    swal("Ce numéro n'est pas inscrit !","", "error");
                }
            },
            error: function (error, ajaxOptions, thrownError) {
                alert(error.responseText);
            }
        });
    });



</script>