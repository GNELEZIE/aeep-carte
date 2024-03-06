<?php
if(!isset($_SESSION['pay'])){
    header('location:' . $domaine.'/error');
}
include_once $layout.'/header.php';
?>

<section id="page-content-wrap">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="register-page-inner">
                        <div class="register-form-content text-center">
                            <div id="embed"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once $layout.'/footer.php';?>
<script>


    $(document).ready(function(){

        FedaPay.init({
            public_key: 'pk_live_SVQaeq2AJSCwx0H3gLIK6SIX',
            transaction: {
                amount: 100,
                description: 'Paiement pour la sortie détente 2024'
            },
            customer: {
                email: 'zie.nanien@gmail.com',
                lastname: '<?=$_SESSION['pay']['nom']?>',
                firstname: "<?=$_SESSION['pay']['prenom']?>"
            },
            container: '#embed'
        });
    });
</script>


