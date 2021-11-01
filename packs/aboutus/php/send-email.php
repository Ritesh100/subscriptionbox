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