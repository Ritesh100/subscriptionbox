<!DOCTYPE html>
	<html lang="en">

	<head>
	    <title>fruits and vegetable pack</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
	        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	    </script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
	        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
	    </script>
<style>
div.gallery {
  border: 1px solid #ccc;
  width: 300px;
  height: 300px;

  text-align: center;
}

div.gallery:hover {
  border: 3px solid #fc5a1a;
  color: #fc5a1a;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 20px 6px;
  float: left;
  width: 24.99999%;

}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 20px;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
	 

	</head>

	<body>
	    <?php include('header.php'); ?> 
	   <div class="slider" style="margin-top: 80px;">
	 <?php
	 include('slider.php');
	 ?>
	   </div>
	   <section>
	 
	   <div class="avlitems" style=" margin-top:30px; " >
	   <h2 class="availableitem" style="text-align: center;">
	  <u style="color: #fc5a1a;"> <span style="color: black;">Available</span>  <span style=" color:#fc5a1a;"> Items</span></u>
	   </h2>
	   <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img/apples-1776744_1920.jpg">
      <img src="img/apples-1776744_1920.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Product: Apple
    <span>Unit: 1Kg</span></div></div>
   
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img/tangerines-1721590_1920.jpg">
      <img src="img/tangerines-1721590_1920.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Product: Orange<br>
    <span>Unit: 1Kg</span></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img/tomatoes-5356_1920.jpg">
      <img src="img/tomatoes-5356_1920.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Product: Tomatoes<br>
    <span> 1Kg</span></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img/broccoli-952532_1920.jpg">
      <img src="img/broccoli-952532_1920.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Product: broccoli<br>
    <span> Unit: 1KG</span></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img/pumpkin-4461711_1920.jpg">
      <img src="img/pumpkin-4461711_1920.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Product: Pumkin<br>
    <span>Unit: 1Kg</span></div> </div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img/crate-of-fruit-4660835_1920.png">
      <img src="img/crate-of-fruit-4660835_1920.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Product: Lemon<br>
    <span>Unit: 1KG</span></div>
  </div>
</div>

<div class="clearfix"></div>

	</div>
	<div class="button" style="display: flex;justify-content: center;align-items: center;">
		<button style="background-color: #a7e615; height:70px;">Subscribe Beauty Pack</button>
	</div>
	   </section>
	</body>
	<?php
	include('footer.php');
	?>

	</html>