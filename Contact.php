



<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['submit'])){
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $feedback = "Invalid email address!";
    } else {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'Zaidlemzaoug123@gmail.com'; 
            $mail->Password = 'tjgj jkhj skkf kfsq';     
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom($email, $name);
            $mail->addAddress('cbackp19@gmail.com'); 

            $mail->Subject = "New Contact Message from $name";
            $mail->Body = "Name: $name\nEmail: $email\nMessage: $message";

            $mail->send();
            $feedback = "Message sent successfully!";
        } catch (Exception $e) {
            $feedback = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>






























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="contact.css"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="icon" type="image/png" href="imgs/favicon.png">


    <title>Contact Us</title>
</head>
<body>

<!-- stars background  -->
<div class="background-area">
    <div class="stars"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
</div>




<!-- SITE LOGO   and TITLE  -->

  <header class="header">

  <a href="index.html"><img class="site-logo" src="imgs/Website logo.png" alt="site logo"></a>
  <a href="index.html" class="title">
    <span class="Titlespan1">B</span>ots <span class="Titlespan2">B</span>ase
  </a>

</header>

<!-- CONTACT DESCREPTION GOES HERE  -->


<div class="contact-title">
    <h1 class ="Contact-Message-Title"> <strong> <u> <span class="Contactspan1"> C</span>ontact <span class="Contactspan2">U</span>s  </u></strong></h1>
    <p>We’d love to hear from you! Fill out the form below.</p>
</div>





<!-- Contact Form GOES HERE  -->



<div class="contact-form">
  <form action="contact.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
    <button type="submit" name="submit">Send Message</button>
  </form>



<?php
  if(isset($feedback)){
      echo "<p style='color:white; text-align:center; margin-top:10px;'>$feedback</p>";
  }
  ?>








</div>


<!-- Copyright Information GOES HERE  --> 




<div class="copyright">
    &copy; 2025 <span class="copyright1">B</span>ots <span class="copyright2">B</span>ase. All rights reserved.
</div>
















</body>
</html>