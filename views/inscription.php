<?php include_once $layout.'/header.php';?>
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2 pt-5">Espace membre</h1>
                    <p>Pour suivre les formations et être enregistrer dans la base de donnée de l'AEEK vous devrez vous inscrire </p>
<!--                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Verifier la disponibilité</a>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section id="page-content-wrap">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="register-page-inner">
                        <div class="col-lg-10 m-auto">
                            <div class="register-form-content">
                                        <div class="register-form-wrap">
                                            <h3>Inscription pour la carte membre</h3>
                                            <div class="register-form">
                                                <form method="post" id="formCarte">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="nom">Nom <i class="required"></i></label>
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
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="niveau">Niveau d'étude <i class="required"></i></label>
                                                                <input type="text" class="form-control input-style" id="niveau" name="niveau" />
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_stuid">Student Id</label>
                                                                <select name="village" id="village" style="display: none;">
                                                                    <option selected="">Categories</option>
                                                                    <option>2018</option>
                                                                    <option>2017</option>
                                                                    <option>2016</option>
                                                                    <option>2015</option>
                                                                    <option>2014</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_year">Passing Year</label>
                                                                <input type="text" class="form-control input-style" id="register_year" name="register_year" />
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_deptno">Depertment No</label>
                                                                <input type="text" class="form-control input-style" id="register_deptno" name="register_deptno" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <div class="">
                                                                    <p>La photo de votre pièce (format accepté: jpg, png, jpeg) <i class="required"></i></p>
                                                                </div>
                                                                <div class="form-label-group couverture" id="test">
                                                             <span class="file-msg">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera mb-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg><br/>
                                                            Cliquez ou glissez déposez la photo de votre pièce
                                                              </span>
                                                                    <input type="file" class="file-input input-couverture" name="couverture" id="couverture" accept=".png, .jpg, .jpeg" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <div class="">
                                                                    <p>Votre photo (format accepté: jpg, png, jpeg) <i class="required"></i></p>
                                                                </div>
                                                                <div class="form-label-group couverture" id="test">
                                                             <span class="file-msg">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera mb-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg><br/>
                                                            Cliquez ou glissez déposez votre photo
                                                              </span>
                                                                    <input type="file" class="file-input input-couverture" name="couverture" id="couverture" accept=".png, .jpg, .jpeg" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="gender form-group">
                                                        <label class="g-name d-block">Gender</label>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="register_gender_male" name="register_gender" value="mail" class="custom-control-input" />
                                                            <label class="custom-control-label" for="register_gender_male">Male</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="register_gender_female" name="register_gender" value="female" class="custom-control-input">
                                                            <label class="custom-control-label" for="register_gender_female">Female</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox float-lg-right">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1"> I have read and agree to the <a href="#">Alumni</a> Terms of Service</label>
                                                        </div>
                                                        <input type="submit" class="btn btn-reg" value="Registration">
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