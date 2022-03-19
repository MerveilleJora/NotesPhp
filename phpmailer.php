<?php 
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = "expéditeur";
$to = "destinataire";
$subject = "objet";
$message = "contenu du mail"
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
