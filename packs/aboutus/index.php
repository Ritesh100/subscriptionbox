<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
  <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Contact US</title>
  </head>
  <body>
  <?php include('header.php')?>

  <div class="content">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="row justify-content-center">
            <div class="col-md-6">
              
              <h3 class="heading mb-4">Let's talk about everything!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas debitis, fugit natus?</p>

              <p><img src="images/undraw-contact.svg" alt="Image" class="img-fluid"></p>


            </div>
            <div class="col-md-6">
              
              <form class="mb-5" method="post" id="contactForm" name="contactForm">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                  </div>
                </div>  
                <div class="row">
                  <div class="col-12">
                    <input type="submit" value="Send Message" name="submit" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                  </div>
                </div>
              </form>

              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(function() {

'use strict';

// Form

var contactForm = function() {

  if ($('#contactForm').length > 0 ) {
    $( "#contactForm" ).validate( {
      rules: {
        name: "required",
        email: {
          required: true,
          email: true
        },
        message: {
          required: true,
          minlength: 5
        }
      },
      messages: {
        name: "Please enter your name",
        email: "Please enter a valid email address",
        message: "Please enter a message"
      },
      /* submit via ajax */
      submitHandler: function(form) {		
        var $submit = $('.submitting'),
          waitText = 'Submitting...';

        $.ajax({   	
            type: "POST",
            url: "php/send-email.php",
            data: $(form).serialize(),

            beforeSend: function() { 
              $submit.css('display', 'block').text(waitText);
            },
            success: function(msg) {
                 if (msg == 'OK') {
                   $('#form-message-warning').hide();
                  setTimeout(function(){
                     $('#contactForm').fadeOut();
                   }, 1000);
                  setTimeout(function(){
                     $('#form-message-success').fadeIn();   
                   }, 1400);
                   
                } else {
                   $('#form-message-warning').html(msg);
                  $('#form-message-warning').fadeIn();
                  $submit.css('display', 'none');
                }
            },
            error: function() {
              $('#form-message-warning').html("Something went wrong. Please try again.");
               $('#form-message-warning').fadeIn();
               $submit.css('display', 'none');
            }
          });    		
        }
      
    } );
  }
};
contactForm();

});
  </script>
  
  <?php
  if (isset($_POST['submit'])) {
    $name =trim($_POST['name']);
    $email=trim($_POST['email']);
    $subject =trim($_POST['subject']);
    $message = trim($_POST['message']);
   $email_to="reteshthapakaji@gmal.com";
   $email_subject="customer message";
   $myMail= "reteshthapakaji@gmail.com";
    $header = "From: ".$email;
    $message2 = "You have received a mail ". $name . "<".$email.">" .".\n\nSubject:".$subject.".\n\nmessage:".$message;
      mail($myMail,$subject,$message2,$header);
      echo '<script>alert("Thank You For your Contact  ! ")</script>';
    echo '<script>window.location.href="index.php";</script>';
  
  }
  
   ?>
  

  <script src="../assets/js/jquery-2.2.4.js "></script>
    <script src="../assets/js/bootstrap.min.js "></script>
  
    <script src="js/popper.min.js"></script>
    
    <script src="js/jquery.validate.min.js"></script>
    <!-- <script src="js/main.js"></script> -->

  </body>
</html>