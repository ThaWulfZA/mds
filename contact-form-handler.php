<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'info@amani-projekts.co.za';
    $email_subject = 'Contact Form Submission';
    $email_body = "User name: $name.\n".
                   "User email: $email.\n".
                   "User message: $message.\n";

    $email_to = "thabiso.inama@gmail.com";

    $email_header = "From: $email_from \r\n";

    $email_header .= "Reply-To: $email \r\n";

    mail($email_to, $email_subject, $email_body, $email_header);

    header("Location: index.html");
?>