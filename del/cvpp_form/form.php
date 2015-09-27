<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Chicago Veg'; 
    $to = 'info@chicagoveg.com'; 
    $subject = 'Email Inquiry';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
   if (mail ($to, $subject, $body, $from)) { 
       header('Location: contactSuccess.htm');
    } else { 
        header('Location: contactError.htm');
    }
}
?>