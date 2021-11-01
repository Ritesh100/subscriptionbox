<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link href="assets/css/style-template.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/icofont.css" rel="stylesheet">
    <link href="assets/vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="assets/vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">


    <title>header</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext');

.start-header {
    opacity: 1;
    transform: translateY(0);
    padding: 10px 0;
    box-shadow: 0 10px 30px 0 rgb(33, 33, 33, 0.15);
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}

.start-header.scroll-on {
    box-shadow: 0 5px 10px 0 rgb(33, 33, 33, 0.15);
    padding: 5px 0;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}



.navigation-wrap {
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}

.navbar {
    padding: 0;
}

.navbar-brand img {
    height: 52px;
    width: auto;
    display: block;
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}

.navbar-toggler {
    float: right;
    border: none;
    padding-right: 0;
}

.navbar-toggler:active,
.navbar-toggler:focus {
    outline: none;
}

.navbar-light .navbar-toggler-icon {
    width: 24px;
    height: 17px;
    background-image: none;
    position: relative;
    border-bottom: 1px solid #000;
    transition: all 300ms linear;
}

.navbar-light .navbar-toggler-icon:after,
.navbar-light .navbar-toggler-icon:before {
    width: 24px;
    position: absolute;
    height: 1px;
    background-color: #000;
    top: 0;
    left: 0;
    content: '';
    z-index: 2;
    transition: all 300ms linear;
}

.navbar-light .navbar-toggler-icon:after {
    top: 8px;
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:after {
    transform: rotate(45deg);
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:before {
    transform: translateY(8px) rotate(-45deg);
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
    border-color: transparent;
}

.nav-link {
    color: #212121 !important;
    font-weight: 500;
    transition: all 200ms linear;
}

.nav-item:hover .nav-link {
    color: #fc5a1a !important;
}

.nav-item.active .nav-link {
    color: #777 !important;
}

.nav-link {
    position: relative;
    padding: 5px 0 !important;
    display: inline-block;
}

.nav-item:after {
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 100%;
    height: 2px;
    content: '';
    background-color: #fc5a1a;
    opacity: 0;
    transition: all 200ms linear;
}

.nav-item:hover:after {
    bottom: 0;
    opacity: 1;
}

.nav-item.active:hover:after {
    opacity: 0;
}

.nav-item {
    position: relative;
    transition: all 200ms linear;
}

.bg-light {
    background-color: #fff !important;
    transition: all 200ms linear;
}

.section {
    position: relative;
    width: 100%;
    display: block;
}



.over-hide {
    overflow: hidden;
}

.absolute-center {
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    margin-top: 40px;
    transform: translateY(-50%);
    z-index: 20;
}

h1 {
    font-size: 40px;
    line-height: 1.2;
    font-weight: 700;
    color: #212112;
    text-align: center;
}

.navbar-brand {
    font-size: 45px;
    line-height: 1.2;
}

p {
    text-align: center;
    margin: 0;
    padding-top: 10px;
    opacity: 1;
    transform: translate(0);
    transition: all 300ms linear;
    transition-delay: 1700ms;
}

.nav-item .dropdown-menu {
    transform: translate3d(0, 10px, 0);
    visibility: hidden;
    opacity: 0;
    max-height: 0;
    display: block;
    padding: 0;
    margin: 0;
    transition: all 200ms linear;
}

.nav-item.show .dropdown-menu {
    opacity: 1;
    visibility: visible;
    max-height: 999px;
    transform: translate3d(0, 0px, 0);
}

.dropdown-menu {
    padding: 10px!important;
    margin: 0;
    font-size: 13px;
    letter-spacing: 1px;
    color: #212121;
    background-color: #fcfaff;
    border: none;
    border-radius: 3px;
    box-shadow: 0 5px 10px 0 rgb(33, 33, 33, 0.15);
    transition: all 200ms linear;
}

.dropdown-toggle::after {
    display: none;
}

.dropdown-item {
    padding: 3px 15px;
    color: #212121;
    border-radius: 2px;
    transition: all 200ms linear;
}

.dropdown-item:hover,
.dropdown-item:focus {
    color: #fff;
    background-color: rgb(255, 66, 66, 0.6);
}

@media (max-width: 767px) {
    h1 {
        font-size: 30px;
    }
    .nav-item:after {
        display: none;
    }
    .nav-item::before {
        position: absolute;
        display: block;
        top: 15px;
        left: 0;
        width: 11px;
        height: 1px;
        content: "";
        border: none;
        background-color: #000;
        vertical-align: 0;
    }
    .dropdown-toggle::after {
        position: absolute;
        display: block;
        top: 10px;
        left: -23px;
        width: 1px;
        height: 11px;
        content: "";
        border: none;
        background-color: #000;
        vertical-align: 0;
        transition: all 200ms linear;
    }
    .dropdown-toggle[aria-expanded="true"]::after {
        transform: rotate(90deg);
    }
    .dropdown-menu {
        padding: 0 !important;
        background-color: transparent;
        box-shadow: none;
        transition: all 200ms linear;
    }
    .dropdown-toggle[aria-expanded="true"]+.dropdown-menu {
        margin-top: 10px !important;
        margin-bottom: 20px !important;
    }
}





    </style>
</head>
<body>
<div class="navigation-wrap bg-light start-header start-style">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light">

                        <a class="navbar-brand"> Fortune<strong>Pack</strong></a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                                    <a class="nav-link " href="../index.php">HOME</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                                    <a class="nav-link " href="../index.php ">HOW IT WORKS</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                                    <a class="nav-link " href="../index.php ">BRANDS</a>
                                </li>

                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 " >
                                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black">PACKS</a>
                                    <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item " href="# ">Beauty Pack</a>
                                        <a class="dropdown-item " href="# ">Groom Pack</a>
                                        <a class="dropdown-item " href="# ">Household Pack</a>
                                        <a class="dropdown-item " href="packs/">Fruits and Vegetables Packs</a>
                                    </div>
                                </li>
                                <!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                                    <a class="nav-link " href="#testimonial ">TESTIMONIALS</a>
                                </li> -->
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black">SIGN IN</a>
                                    <div class="dropdown-menu ">
                                        <a class="dropdown-item " href="index.php">SIGN IN</a>
                                        <a class="dropdown-item " href="user-registration.php ">REGISTER</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-2.2.4.js "></script>
    <script src="assets/js/bootstrap.min.js "></script>

    <script src="assets/vendors/parallax/jquery.parallax-scroll.js "></script>
    <script src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js "></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js "></script>

    <script src="assets/vendors/counterup/jquery.counterup.min.js "></script>
    <script src="assets/vendors/flexslider/flex-slider.js "></script>
    <script src="assets/vendors/flexslider/mixitup.js "></script>
    <script src="assets/vendors/nice-selector/jquery.nice-select.min.js "></script>
    <script src="assets/vendors/swiper/js/swiper.min.js "></script>
    <script src="assets/vendors/flipster-slider/jquery.flipster.min.js "></script>
    <script src="assets/vendors/nice-selector/jquery.nice-select.min.js "></script>
    <script src="assets/js/theme.js "></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src="index.js "></script>
</body>
</html>