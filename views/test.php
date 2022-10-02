<div class="gender form-group">
                                                        <label class="g-name d-block">Genre <i class="required"></i></label>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="genre" name="register_gender" value="mail" class="custom-control-input" />
                                                            <label class="custom-control-label" for="register_gender_male">Male</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="register_gender_female" name="register_gender" value="female" class="custom-control-input">
                                                            <label class="custom-control-label" for="register_gender_female">Female</label>
                                                        </div>
                                                    </div>
<div class="col-12 col-sm-6">
    <div class="form-group">
        <label for="genre">Genre</label>
        <select name="genre" id="genre" class="input-style" style="display: none;">
            <option selected="">Genre</option>
            <option value="Femme">Femme</option>
            <option value="Homme">Homme</option>

        </select>

    </div>
</div>
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
        e.preventDefault();
        $('.load').html('<i class="loader-btn"></i>');
        var value = document.getElementById('formCarte');
        var form = new FormData(value);

        $.ajax({
            method: 'post',
            url: '<?=$domaine?>/controle/carte.save',
            data: form,
            contentType:false,
            cache:false,
            processData:false,
            dataType: 'json',
            success: function(data){
                if(data.data_info == "ok"){
                    swal("Opération effectuée avec succès!","", "success");
                }else {

                }
            },
            error: function (error, ajaxOptions, thrownError) {
                alert(error.responseText);
            }
        });
    });



</script>