<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $nom = "nom here";
    $telephone = "0645091986";
    $from = "nwajli@gmail.com";
    $to = "contact@optrow.com";
    $subject = "from contact";
    $message = "PHP Mail fonctionne parfaitement (message)" ."  "."nom: " .$nom ."       "."telephone: ".$telephone;
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
    echo "L'email a été envoyé.";
?>