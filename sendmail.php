<?php

    
if (isset($_POST['submit'])) {
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    
    $to = "contact@optrow.com";
    $telephone = $_POST['object'];
    $subject = $_POST['useremail'];
    $message = "nom: "  .$subject."   |   "."telephone: ".$telephone ."   |   "."message: " .$_POST['Message'];
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
    header("location:thank_you.html");
    
    
   


   
   

    
  }
  

   

    // var_dump( mail('alaeessaki3@gmail.com','testing','this is just a test','From: alaeessaki3@gmail.com'));

?>