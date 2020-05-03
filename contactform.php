<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    $email_from = "$visitor_email.\n";
    
    $email_subject = "Inquiry From : $name.\n";

    $email_body = "Client : $name.\n".
                    "Client Email : $visitor_email.\n".
                        "Contact No : $contact.\n".
                            "Inquiry : $message.\n";

    $to = "info@qcplk.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header ('location: welcome.html');

?>