<?php
if(!isset($_SESSION['result']) and !isset($_SESSION['no_result'])) {
    header('location:'.$domaine.'/error');
    exit();
}



if(isset($_SESSION['result'])) {
    if($_SESSION['result']['statut'] == 0){

        $stat = '<span class="text-orange"> En production !</span>';

    }elseif($_SESSION['result']['statut'] == 1){

        $stat = '<span class="text-success"> Disponible !</span>';

    }elseif($_SESSION['result']['statut'] == 2){
        $stat = '<span class="text-danger"> Réjeté !</span>';
    }
}



include_once $layout.'/header.php';?>


    <section id="page-content-wrap pt-5 mt-5" style="    background: #f3faff;">
        <div class="register-page-wrapper section-padding ">
            <div class="container pt-5">
                <div class="row pt-5">
                    <div class="col-md-6 offset-3">

                            <?php
                               if(isset($_SESSION['result'])){
                                ?>
                                   <div class="register-page-inner p-20" style="background: #ffffff;border-radius: 6px">
                                <div class="register-form-content">
                                    <div class="text-center">
                                        <img src="<?=$asset?>/media/sss.png" class="w87" alt=""/>
                                    </div>
                                    <p class="text-success text-center"><b>  Félicitation vous êtes sur la liste des membres de l'AEEP</b></p>
                                  <p class="text">
                                      Statut de la carte :<?= $stat ?> <br>
                                      Nom & Prénom : <?= html_entity_decode(stripslashes($_SESSION['result']["nom"]))?> <?= html_entity_decode(stripslashes($_SESSION['result']["prenom"]))?> <br>
                                      Village : <?= village_name($_SESSION['result']['village'])?> <br>
                                      Téléphone : <?=$_SESSION['result']['phone']?> <br>
                                  </p>
                                    <a href="<?= $domaine ?>/verify" class="btn-inscript">Retour</a>
                                </div>
                        </div>
                            <?php
                              }
                            ?>


                            <?php
                               if(isset($_SESSION['no_result'])){
                                ?>
                           <div class="register-page-inner p-20" style="background: #ffffff;border-radius: 6px">
                                <div class="register-form-content text-center">
                                    <img src="<?=$asset?>/media/times.svg" class="w87" alt=""/>
                                    <p class="text-center font-20 pt-3">

                                    </p>
                                    <p class="text-left motif px-2">
                                        <span class="text-orange">Désolé</span> , votre nom ne figure pas sur la liste des membres de l'AEEP. Veuillez cliquer sur le bouton ci-dessous pour vous inscrire.
                                    </p>
                                    <a href="<?=$domaine?>" class="btn-mise-a-jour">S'inscrire</a>
                                </div>
                           </div>
                            <?php
                              }
                            ?>

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


