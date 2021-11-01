<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
   
    session_unset();
    session_write_close();
    $url = "../register/index.php";
    header("Location: $url");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>packs</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../index.css">

    <link href="../assets/css/style-template.css" rel="stylesheet">
    <link href="../assets/css/responsive.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/icofont.css" rel="stylesheet">
    <link href="../assets/vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="../assets/vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="../packs.css">
</head>



<body class="hero-anime">
<?php include('header.php'); ?>
    <!--================Server Banner Area =================-->
    <section class="server_banner_area ">
        <div class="container " id="home">
            <div class="row server_b_inner ">
                <div class="col-md-8 ">
                    <div class="server_text ">
                        <h4 style="font-size: 40px; ">Fortune<strong>Pack</strong></h4>
                        <h5>एक भित्र अनेक.............</h5>
                        <h3 style="color: white; ">अब अझै सहज र सुलभ हुनेछ तपाईको किनमेल</h3><br>

                        <p> A DIFFERENT BOX FULL OF SURPRISES AT YOUR DOOR, EVERY MONTH</p>


                    </div>
                    <br>
                                </div>

            </div>
        </div>
    </section>
  
   
    <!--==================== Start sc clients logo area ====================-->
    <section class="sc-clients-logo-area gray_bg ">
        <div class="main_title " id="brands">
            <h2>Featured <span>Brands</span></h2>
        </div>
        <div class="container " style="overflow: hidden;">
            <div class="sc-clients-slider owl-carousel ">
                <div class="item ">
                    <a href="https://www.birchbox.com/ ">
                        <img src="../assets/img/partners/birchbox.png ">
                    </a>
                </div>
                <div class="item ">
                    <a href="https://www.squix.com/ ">
                        <img src="../assets/img/partners/squix.png ">
                    </a>
                </div>
                <div class="item ">
                    <a href="https://barkbox.com/ ">
                        <img src="../assets/img/partners/barkbox.png ">
                    </a>
                </div>
                <div class="item ">
                    <a href="https://www.degustabox.com/us/ ">
                        <img src="../assets/img/partners/degustabox.png ">
                    </a>
                </div>
                <div class="item ">
                    <a href="https://www.fabletics.com/ ">
                        <img src="../assets/img/partners/fabletics.png ">
                    </a>
                </div>
                <div class="item ">
                    <a href="https://www.harrys.com/en/us ">
                        <img src="../assets/img/partners/harrys.png ">
                    </a>
                </div>

            </div>
        </div>
        <div class="packs" style="margin-top: 80px; margin-left: 70px; ">
            <div class="main_title " id="packs">
            <h2>Available<span>PACKS</span></h2>
        </div>
        <figure class="snip0078 blue"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample7.jpg" alt="sample50" />
        <a href="beautypacks.php">
  <figcaption>
    <h4>Beauty<span>Pack</span></h4>
    <p>You can't have everything... where would you put it?</p>
  </figcaption> 
        </a>
</figure>
<figure class="snip0078 blue"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample7.jpg" alt="sample50" />
  <figcaption>
    <h4>Groom <span>Pack</span></h4>
    <p>You can't have everything... where would you put it?</p>
  </figcaption>
  <a href="pack/groompack.php"></a>
</figure>
<figure class="snip0078 red"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample7.jpg" alt="sample50" />
  <figcaption>
    <h4>Household <span>Pack</span></h4>
    <p>You can't have everything... where would you put it?</p>
  </figcaption>
  <a href="pack/househldpacks.php"></a>
</figure>
<figure class="snip0078 red"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample7.jpg" alt="sample50" />
  <figcaption>
    <h4>Fruits and vegetables <span>Packs</span></h4>
    <p>You can't have everything... where would you put it?</p>
  </figcaption>
  <a href="pack/food.php"></a>
</figure>
<figure class="snip0078 yellow"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample6.jpg" alt="sample46" />
  <figcaption>
    <h4>Students <span> Pack</span></h4>
    <p>There is hopeful symbolism in the fact that flags do not wave in a vacuum.</p>
  </figcaption>
  <a href="#"></a>
</figure>
<figure class="snip0078 blue"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample7.jpg" alt="sample50" />
  <figcaption>
    <h4> Special<span>Offers</span></h4>
    <p>You can't have everything... where would you put it?</p>
  </figcaption>
  <a href="#"></a>
</figure>
        </div>
    </section>
  

    <script src="../assets/js/jquery-2.2.4.js "></script>
    <script src="../assets/js/bootstrap.min.js "></script>

    <script src="../assets/vendors/parallax/jquery.parallax-scroll.js "></script>
    <script src="../assets/vendors/magnific-popup/jquery.magnific-popup.min.js "></script>
    <script src="../assets/vendors/owl-carousel/owl.carousel.min.js "></script>

    <script src="../assets/vendors/counterup/jquery.counterup.min.js "></script>
    <script src="../assets/vendors/flexslider/flex-slider.js "></script>
    <script src="../assets/vendors/flexslider/mixitup.js "></script>
    <script src="../assets/vendors/nice-selector/jquery.nice-select.min.js "></script>
    <script src="../assets/vendors/swiper/js/swiper.min.js "></script>
    <script src="../assets/vendors/flipster-slider/jquery.flipster.min.js "></script>
    <script src="../assets/vendors/nice-selector/jquery.nice-select.min.js "></script>
    <script src="../assets/js/theme.js "></script>
    


</body>
<?php include('footer.php'); ?>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src="index.js "></script>



</html>