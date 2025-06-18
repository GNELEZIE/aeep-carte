<?php
$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;
include_once $layout . '/header.php';
?>

<section id="page-content-wrap">
    <div class="register-page-wrapper section-padding">
        <div class="container pt-2">
            <form id="commande-form" class="form-box mt-5" method="post">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="font-m">Valider votre commande</h2>
                    </div>

                    <!-- Infos personnelles -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="prenom">Prénom <i class="required"></i></label>
                            <input type="text" class="form-control input-style" id="prenom" name="prenom" placeholder="Prénom" required />
                        </div>

                        <div class="form-group">
                            <label for="phone">Téléphone <i class="required"></i></label>
                            <input type="tel" class="form-control input-style" id="phone" name="phone" required>
                            <input type="hidden" name="isoPhone" id="isoPhone">
                            <input type="hidden" name="dialPhone" id="dialPhone">
                        </div>

                        <div class="form-group">
                            <label for="village">Village <i class="required"></i></label>
                            <select name="village" id="village" class="form-control input-style">
                                <option value="" selected disabled>Choisissez un village</option>
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

                    <!-- Produit Tee-shirt -->
                    <div class="col-md-6 pt-3">
                        <img src="<?= $asset ?>/media/02.png" class="cover169 mb-4" alt="Tee-shirt AEEP">
                        <div class="form-group ">
                            <h3 class="font-m">Tee-shirt (1 500 FCFA)</h3>
                            <div class="quantity-wrapper">
                                <button type="button" class="qty-btn" onclick="changeQty('qte_tshirt', -1)">−</button>
                                <input type="number" name="qte_tshirt" id="qte_tshirt" class="qty-input" min="0" value="0" onchange="updateTotal()">
                                <button type="button" class="qty-btn" onclick="changeQty('qte_tshirt', 1)">+</button>
                            </div>
                        </div>
                    </div>
                </div>

<!--                <hr class="my-4" />-->

                <!-- Total -->
                <div class="text-center mt-4 mb-3">
                    <h5>Total : <span id="totalPrix">0</span> FCFA</h5>
                    <input type="hidden" name="total" id="totalHidden">
                    <button type="submit" class="btn btn-primary mt-3">Valider la commande</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include_once $layout . '/footer.php'; ?>
<script>
    function changeQty(id, delta) {
        const input = document.getElementById(id);
        let value = parseInt(input.value) || 0;
        value += delta;
        if (value < 0) value = 0;
        input.value = value;
        updateTotal();
    }

    function updateTotal() {
        const tshirt = parseInt(document.getElementById('qte_tshirt').value) || 0;
        const total = tshirt * 1500;
        document.getElementById('totalPrix').innerText = total.toLocaleString();
        document.getElementById('totalHidden').value = total;
    }

    updateTotal();
</script>
<script>
    $("#phone").keyup(function () {
        this.value = this.value.replace(/\D/g, '');
    });

    var inputPhone = document.querySelector("#phone");
    window.intlTelInput(inputPhone, {
        initialCountry: 'ci',
        utilsScript: "<?= $asset ?>/plugins/intltelinput/js/utils.js"
    });

    var iti = window.intlTelInputGlobals.getInstance(inputPhone);
    var countryData = iti.getSelectedCountryData();
    $('#isoPhone').val(countryData["iso2"]);
    $('#dialPhone').val(countryData["dialCode"]);

    inputPhone.addEventListener("countrychange", function () {
        var iti = window.intlTelInputGlobals.getInstance(inputPhone);
        var countryData = iti.getSelectedCountryData();
        $('#isoPhone').val(countryData["iso2"]);
        $('#dialPhone').val(countryData["dialCode"]);
    });
</script>
