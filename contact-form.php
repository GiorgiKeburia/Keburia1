<?php
    $name=$_POST['name'];
    $visitor_email=$_POST['E-mail'];
    $message=$_POST['message'];

    $email_from='Keburia.ge';
    $email_subject="New Form Submition";
    $email_body="User Name: $name.\n".  
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to="qeburia2000@gmail.com";
    $headers="From: $email_from \r\n";
    $headers .="Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>