<?php
if(!isset($_SESSION['result']) and !isset($_SESSION['no_result'])) {
    header('location:'.$domaine.'/error');
    exit();
}



include_once $layout.'/header.php';
if(isset($_SESSION['result'])) {

    ?>


    <section id="page-content-wrap pt-5 mt-5" style="    background: #f3faff;">
        <div class="register-page-wrapper section-padding ">
            <div class="container pt-5">
                <div class="row pt-5">
                    <div class="col-md-4 offset-4">
                        <div class="register-page-inner p-20" style="background: #ffffff;border-radius: 6px">

                            <?php
                            if($_SESSION['result']['statut'] == 0){
                                ?>
                                <div class="register-form-content text-center">
                                    <img src="<?=$asset?>/media/infos.svg" class="w87" alt=""/>
                                    <p class="text-center font-20 pt-3">
                                        Patientez <b><?= html_entity_decode(stripslashes($_SESSION['result']["prenom"]))?></b>,
                                        votre carte de membre AEEP est <span class="text-orange">en cours de production !</span>
                                    </p>
                                </div>
                            <?php
                            }elseif($_SESSION['result']['statut'] == 1){
                                ?>
                                <div class="register-form-content text-center">
                                    <img src="<?=$asset?>/media/sss.png" class="w87" alt=""/>
                                    <p class="text-center text-success font-20 pt-3">
                                        Félicitation <span class="text-orange"><?= html_entity_decode(stripslashes($_SESSION['result']["prenom"]))?></span>,
                                        votre carte de membre AEEP est disponible!
                                    </p>
                                    <p>Nb:Contactez Anicet  au : 05 06 15 11 76</p>
                                </div>
                            <?php
                            }elseif($_SESSION['result']['statut'] == 2){
                                ?>
                                <div class="register-form-content text-center">
                                    <img src="<?=$asset?>/media/times.svg" class="w87" alt=""/>
                                    <p class="text-center font-20 pt-3">
                                        Désolé <b><?= html_entity_decode(stripslashes($_SESSION['result']["prenom"]))?></b>,
                                        votre carte de membre AEEP a été <span class="text-orange">réjeté !</span>
                                    </p>
                                    <p class="text-left motif px-2">
                                        Motivation du rejet <br>
                                        <i><?= html_entity_decode(stripslashes($_SESSION['result']["motif"]))?></i>
                                    </p>
                                    <p>Nb:Contactez Tenon  au : 05 06 48 30 48</p>
                                </div>
                            <?php
                            }else{
                                ?>
                                <div class="register-form-content text-center">
                                    <img src="<?=$asset?>/media/infos.svg" class="w87" alt=""/>
                                    <p class="text-center font-20 pt-3">
                                        <span class="text-orange">Désolé le numéro <b><?= $_SESSION['result']["phone"]?></b> n'est pas inscrit !</span>
                                    </p>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}else{
    ?>
    <section id="page-content-wrap pt-5 mt-5" style="    background: #f3faff;">
        <div class="register-page-wrapper section-padding ">
            <div class="container pt-5">
                <div class="row pt-5">
                    <div class="col-md-4 offset-4">
                        <div class="register-page-inner p-20" style="background: #ffffff;border-radius: 6px">
                            <div class="register-form-content text-center">
                                <img src="<?=$asset?>/media/times.svg" class="w87" alt=""/>
                                <p class="text-center font-20 pt-3">
                                    <span class="text-orange">Désolé le numéro <b><?= $_SESSION['result']["phone"]?></b> n'est pas inscrit !</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>
<?php include_once $layout.'/footer.php';?>


