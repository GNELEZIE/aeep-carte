<?php
if(!isset($_SESSION['compo'])){
    header('location:'.$domaine.'/miss-inscription');
    exit();
}
$tabQ = array();
require_once $controller.'/resultats.save.php';


$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;

include_once $layout.'/header.php';
?>

<section id="page-content-wrap" style="background: #e8f6ff; margin-top: 70px">
    <div class="register-page-wrapper" style="padding: 45px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-3">
                    <div class="register-page-inner pt-2 pb-2" style="background: #ffffff;border-radius: 9px;">
                        <div class="register-form-content">
                            <div class="reunion-form-wrap pt-1">
                                <h3 class="text-center">Cocher les bonnes réponses</h3>
                                <div class="register-form">
                                    <form method="post" id="formQuiz">
                                        <?php if(!empty($error_s)){ ?>
                                            <div class="alert alert-danger" style="font-size: 14px" role="alert">
                                                <?php foreach($error_s as $error){ ?>
                                                    <?php echo $error ?>
                                                <?php }?>
                                            </div>
                                        <?php }?>

                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <?php
                                                $qs = $questions->getAllQuestion();
                                                while($qData = $qs->fetch()){
                                                    array_push($tabQ,$qData['id_questions']);
                                                ?>
                                                <fieldset class="" style="border: 3px dashed #ececf6; padding: inherit; margin-bottom: 10px">
                                                    <legend><?= html_entity_decode(stripslashes($qData['quest_t']))?></legend>
                                                    <?php
                                                    $getRep = $reponses->getRepByQuId($qData['id_questions']);
                                                    while($getRepData = $getRep->fetch()){
                                                    ?>
                                                    <div class="form-group">
                                                        <input type="checkbox" class="text-left" id="rp<?=$getRepData['id_reponses']?>" name="<?=$getRepData['id_reponses']?>_rp_<?=$getRepData['id_reponses']?>">
                                                        <label for="rp<?=$getRepData['id_reponses']?>"><?= html_entity_decode(stripslashes($getRepData['reponse_s']))?></label>
                                                    </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </fieldset>
                                                <?php
                                                }
                                                $_SESSION['ques'] = $tabQ;
                                                ?>

                                            </div>

                                        </div>



                                        <div class="row mt-3">
                                            <div class="col-md-4 offset-4 text-center">
                                                <input type="hidden" class="form-control " name="formkey" value="<?= $token ?>">
                                                <button class="btn-inscript loadeds w100" style="cursor:pointer"> <i class="load_q_"></i> Enregistrer </button>
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

    $('#formQuiz').submit(function(e){
        $('.load_q_').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
    });



</script>