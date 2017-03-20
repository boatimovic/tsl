<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $query = $_POST['query'];

    $to      = 'tslparveen@gmail.com';
    $subject = 'TS Lens Query';
    $message = 'Name : ' .  $name. "\n"  .
        'Email : '. $email .  "\n" .
        'Phone : ' . $phone . "\n" . 
        'Query : ' . $query;
    $headers = 'From: ' .$email. "\r\n" .
        'Reply-To: ' .$email. "\r\n" .

    mail($to, $subject, $message, $headers);
    echo "Response recorded, we will contact you shortly.";

?>