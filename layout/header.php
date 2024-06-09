<!DOCTYPE html>
<html class="no-js" lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>AEEP - <?=ucfirst($page)?></title>
<meta name="description" content="simple description for your site"/>
<meta name="keywords" content="keyword1, keyword2"/>
<meta name="author" content="Gnelezie"/>
<link rel="shortcut icon" type="image/x-icon"  href="<?=$asset?>/media/icons.png"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" />
<link rel="stylesheet" href="<?=$asset?>/vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?=$asset?>/vendor/navbar/bootstrap-4-navbar.css" />
<link rel="stylesheet" href="<?=$asset?>/vendor/animate/animate.css" media="all" />
<link rel="stylesheet" href="<?=$asset?>/vendor/fontawesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?=$asset?>/vendor/owl-carousel/owl.carousel.css" media="all" />
<link rel="stylesheet" href="<?=$asset?>/vendor/magnific/magnific-popup.css" media="all" />
<link rel="stylesheet" href="<?=$asset?>/vendor/nice-select/nice-select.css" media="all" />
<link rel="stylesheet" href="<?=$asset?>/vendor/js-offcanvas/css/js-offcanvas.css" media="all" />
<link rel="stylesheet" href="<?=$asset?>/css/box-img.css" media="all" />
<script src="<?=$asset?>/vendor/modernizr/modernizr-custom.js"></script>
<link id="cbx-style" data-layout="1" rel="stylesheet" href="<?=$asset?>/css/style-default.min.css" media="all" />
<link href="<?=$asset?>/plugins/ticker/css/main.css" rel="stylesheet">
<link href="<?=$asset?>/plugins/sweetalert/sweet-alert.css" rel="stylesheet" />
<link href="<?=$asset?>/plugins/lity/dist/lity.css" rel="stylesheet"/>
<link rel="stylesheet" href="<?=$asset?>/plugins/ani/animate.css"/>
<link rel="stylesheet" href="<?=$asset?>/plugins/intltelinput/css/intlTelInput.min.css"/>
<link rel="stylesheet" href="<?=$asset?>/plugins/bootstrap-datepicker/css/datepicker.css" type="text/css"/>
<script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>

<style>
.mydate{
    background: #ff4500;
    color: #ffffff;
    padding: 5px;
    border-radius: 6px;
    box-shadow: rgba(0, 0, 0, 0.24) 0 3px 8px;
}
#page-title-area1 {
    background: linear-gradient(0deg, rgb(0 0 0 / 40%), rgb(13 12 13 / 61%)), url('<?=$asset?>/media/bv.jpg');
    background-size: cover;
    background-position: center center;
    position: relative;
    padding: 100px 0;
    z-index: 1;
}
.register-form-content .reunion-form-wrap:before{

}
.reunion-form-wrap{
    padding: 15px;
}

#bg1{
    background-image: url(<?=$asset?>/media/r2.jpg);
    background-size: cover;
    background-position: center center;
    position: relative;
    padding: 100px 0;
    z-index: 1;
}



.datepicker table tr td.active.active{
    background : #f87405 !important;
}
ul.list{
    height: 170px !important;
    overflow-y: scroll !important;
    width: 100% !important;
}
:focus {
    outline: none !important;
}
.iti{
    width: 100% !important;
}
.nice-select, .nice-select .list li.selected:hover, .nice-select .list li:hover{
    background : inherit !important;
    width : 100% !important;
    color : #6c757d !important;
}
.nice-select:after {
    border-color: #6c757d !important;
}
.btn-inscript{
    background: #f84909;
    border: 1px solid #f84909 !important;
    border-radius: 6px;
    padding: 5px 20px;
    color: #fff;
}
.btn-inscript:hover{
    background: #fff;
    color: #f84909;
}
.register-form-content .register-form-wrap:before {
    background-color: #008000 !important;
}

.loader-btn {
    display: inline-block;
    width: 0.9rem;
    height: 0.9rem;
    vertical-align: middle;
    border: 0.2em solid currentColor;
    border-right-color: transparent;
    border-radius: 50%;
    -webkit-animation: spinner-border .75s linear infinite;
    animation: spinner-border .75s linear infinite;
    align-self: center;
}

.w100{
    width: 100% !important;
}
.w87{
    width: 87px !important;
}
.text-green{
    color: #008000;
    font-weight: bold;
}




#slider-area .single-slide-wrap, .gallery-gird .col-lg-3 .single-gallery-item {
    background-position: inherit !important;
}
#slider-area .single-slide-wrap:after {
    background-color: #00000080 !important;
}
.single-upcoming-event .up-event-thumb img {
    object-fit: cover !important;
    height: 279px !important;
}

#page-content-wrap .about-page-content-wrap .single-about-text:first-child img {
    filter: inherit !important;
}

.btn {
    padding: 4px 28px !important;
    border-radius: 6px !important;
}

.input-style{
    border-radius: 6px !important;
    border: 2px solid #ced4da !important;
}

.pieceDiv, .photoDiv {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 25px;
    border: 2px dashed #888ea8;
    border-radius: 6px;
    transition: 0.2s;
    min-height: 200px;
    background: no-repeat center;
    background-size: contain;
}
.pieceDiv.is-active,.photoDiv.is-active {
    background-color: #eff7fa;
}

.file-msg {
    text-align: center;
    font-size: small;
    font-weight: 300;
    line-height: 1.4;
}

.file-input {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    cursor: pointer;
    opacity: 0;
}
.file-input:focus {
    outline: none;
}
#footer-area .footer-widget .single-widget-wrap .footer-social-icons a i.fa{
    border-radius: 50% !important;
}
#footer-area .footer-widget {
    background-color: #2B2B2B !important;
}
#footer-area .footer-bottom {
    background-color: #131313 !important;
}





.required:before {
    content: "*";
    color: red;
}
.bg-home{
    background-color: #ecf1f57d !important;
}
.home-title1{
   font-size: 50px !important;
}
#blog-area {
    background-color: #ecf1f57d !important;
}
.zoom-icon{
    border: 2px solid #fff;
    padding: 5px;
    border-radius: 50%;
    width: 50px !important;
}
.single-gallery-item{
    border-radius: 7px;
    border: 2px solid #ff7729 !important;
}


.gallery-gird .col-lg-3 .single-gallery-item .gallery-hvr-wrap{
    background-color: inherit !important;
}
.box-contact{
    border-left: 8px solid #ff4600;
    padding: 8px;
    margin-bottom: 50px;
}
#header-area .header-bottom-area .main-menu .navbar-nav li a.nav-link {
    margin-right: 0 !important;
}
#header-area .header-bottom-area.fixed .navbar-brand img, #header-area .header-bottom-area .main-menu .navbar-brand img {
    width: 150px !important;
}
#footer-area .footer-widget .single-widget-wrap .footer-about p {
    color: #F5F5F5 !important;
}

.p-more{
    padding: 6px 17px !important;
}
.btn-filtrer{
    padding: 7px 20px;
}

.my-shadow{
    box-shadow: 0 3px 30px 0 rgb(0 0 0 / 10%) !important;
}

.contact-form-wrap{
    padding: 20px !important;
}

.text-orange{
    color: #ff4600 !important;
    font-weight: bold;
}

.btn-transparence-orange {
    background: #ff46003b !important;
    color: #ff4600 !important;
}
.btn-transparence-orange:hover {
    background: #ff4600 !important;
    color: #fff !important;
}

.sidebar-area-wrap .single-sidebar-wrap {
    padding: 30px 17px !important;
}
.bg-gris{
    background-color: #ecf1f5;
}
.img-galerie{
    object-fit : cover;
    height: 257px;
}
.py30{
    padding: 5px 20px;

}
.btn-white{
    background: #fff;
    color: #008000;
    border : 2px solid #fff;
    border-radius : 6px;

}
.btn-white:hover{
    background: transparent;
    color: #fff;
}
#upcoming-area .upcoming-event-wrap, .event-page-content-wrap .all-event-list .single-upcoming-event {
    background-color: #008000;
}
.event-count-sect .event-countdown-counter-sec .counter-item .single-cont {
    font-size: 1.8rem;
    line-height: 1;
    font-weight: 700;
    border: 1px solid #fff;
    background-color: #fff;
    padding: 10px;
    display: inline-block;
    color: #ff4500;
}
.event-count-sect .event-countdown-counter-sec .counter-item .counter-label {
    font-size: 1.4rem;
    line-height: 1;
    font-weight: 700;
    display: block;
    margin-bottom: 5px;
}
.event-count-sect .event-countdown-counter-sec .counter-item{
    text-align: center;
    color: #fff;
    margin-right: 15px;
}
.event-count-sect .event-countdown-counter-sec {
    display: flex;
}
.event-count-sect {
    margin-bottom: 18px;
    position: relative;
    display: inline-block;
}
.event-count-sect .event-countdown-counter-sec .counter-item .single-cont{
    width: 50px !important;
}
.home-count .owl-nav{
    display: none !important;
}
.btn-brand, .btn-brand-rev {
    padding: 7px 22px !important;
    font-size: 15px !important;
}
.radius-6{
    border-radius: 6px !important;
}
.btn-green{
    background: #039003 !important;
    border: 2px solid #039003 !important;
}
.btn-green:hover{
    background: #ffffff !important;
    color: #039003 !important;
}
.btn-orange{
    background: #ff4500 !important;
    border: 2px solid #ff4500 !important;
}
.btn-orange:hover{
    background: #ffffff !important;
    color: #ff4500 !important;
}
#header-area .header-bottom-area .main-menu li.nav-item a.nav-link:before {
    background-color: #ff4500 !important;
}
#header-area .header-bottom-area .main-menu li.nav-item.active .nav-link {
    background-color: #ff450012 !important;
    color: #ff4500 !important;
}
.event-filter-area .nice-select {
    height: 39px !important;
    text-align: center;
    background-color: #fff;
    color: #000!important;
    font-size: 13px !important;
    line-height: 1 !important;
     text-transform: inherit !important;
    padding-top: 11px;
    border: 2px solid #df4309;
    border-radius: 6px;
}
.font-10{
    font-size:10px !important;
}
.font-11{
    font-size:11px !important;
}
.font-12{
    font-size:12px !important;
}
.font-13{
    font-size:13px !important;
}
.font-14{
    font-size:14px !important;
}
.font-16{
    font-size:16px !important;
}
.font-17{
    font-size:17px !important;
}
.font-18{
    font-size:18px !important;
}
.font-19{
    font-size:19px !important;
}
.font-20{
    font-size:20px !important;
}
.font-21{
    font-size:21px !important;
}

.p-20{
    padding: 20px !important;
}
.motif{
    border-left: 5px solid #ff4500;
}

#embed{
    height: 500px;
}
#modal-text-bloc{
    display: none !important;
}
.modal-header img{
    width: 150px !important;
    height: 62px !important;
}
.d-noned .text-right{
    display: none !important;
}
.d-none{
    display: none !important;
}

.mb-70{
    margin-bottom: 70px !important;
}

legend{
    font-size: 20px !important;
    font-weight: bold !important;
}
label{
    font-weight: inherit !important;
}









@media(max-width: 767px) {
    .offset-4, .offset-3, .offset-6 {
        margin-left: 0 !important;
    }
    .register-form-wrap{
        margin-top: 0 !important;
    }
    .register-form-content .register-form-wrap h3 {
        font-size: 21px !important;
        text-transform: inherit !important;
        text-align: center !important;
        line-height: 1.3 !important;
    }

}

</style>
</head>
<body class="<?php if($lien == 'home' || $lien == ''){echo 'bg-home';} ;?>">

<header id="header-area">
    <div class="header-bottom-area" id="fixheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="main-menu navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?=$domaine_principal?>">
                            <img src="<?=$asset?>/media/LogoAeep.png" alt="Logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menucontent" aria-controls="menucontent" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="menucontent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="<?=$domaine_principal?>/">Accueil</a></li>
                                <li class="nav-item "><a class="nav-link" href="<?=$domaine_principal?>/actualites/">Actualité</a></li>
                                <li class="nav-item "><a class="nav-link" href="<?=$domaine_principal?>/courses/">Formation</a></li>
<!--                                <li class="nav-item "><a class="nav-link" href="--><?//=$domaine?><!--/sortie-detente-2024/">Sortie détente</a></li>-->
                                <li class="nav-item "><a class="nav-link" href="<?=$domaine_principal?>/contact/">Contact</a></li>
<!--                                <li class="nav-item "><a class="nav-link" href="--><?//=$domaine_principal?><!--/galerie/">Galerie</a></li>-->
                                <li class="nav-item "><a class="nav-link" href="<?=$domaine?>/miss-inscription/">Miss 2024</a></li>
<!--                                <li class="nav-item "><a class="nav-link" href="--><?//=$domaine?><!--/reunion/">Réunion</a></li>-->

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
