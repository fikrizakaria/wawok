<?php
    $to      = 'xxx@gmail.com';
    $subject = "Contact website";
    $message = "Name: ".$_POST['name'] . "\r\n" .
               "Email: ".$_POST['email'] . "\r\n" .
               "Message: ". "\r\n" .$_POST["text"];
    $headers = "From: ".$_POST['email'] ;
    if(!mail($to, $subject, $message, $headers)){
        http_response_code(500);
        echo '<p style="color: red;">Un erreur a été servenu, veuillez ressayer plus tard.</p>';
    }
    else{
        http_response_code(200);
        echo '<p style="color: green;">Nous vous remercions d\'avoir envoyé ce message.</p>';
    }
    header("location:./contact.php");
?>