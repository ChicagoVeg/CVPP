<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: ChicagoVeg'; 
    $to = 'greenish_green@yahoo.com';
    
    $subject = 'Email Inquiry';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 

 session_start();


if ($_POST['submit']) {
     
    if($_POST['captcha'] != $_SESSION['digit']) { 
       header('Location: contactInvalidCaptach.html');
    } else if (mail ($to, $subject, $body, $from)) { 
       header('Location: contactSuccess.html');
    } else { 
        header('Location: contactError.html');
    }
}

  session_destroy();
?>