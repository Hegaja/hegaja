<?php

$nom = !empty($_POST['first_name']) ? $_POST['first_name'] : NULL;
$from = !empty($_POST['email']) ? $_POST['email'] : NULL;
$msg = !empty($_POST['message']) ? $_POST['message'] : NULL;

$headers = 'From: contact@hehaja.com';
//  echo "$msg" . "$nom" . "$from";

if(empty($nom) || empty($from) || empty($msg))
{
     echo "Mail couldn't be send, a field is empty";
}
elseif(mail('contact@hegaja.com', "Commande Amarrex de  $nom", " $nom a ecrit : $msg \n\n\n E-mail de contact : $from\n\n", "$headers"))
{
     echo 'Mail sent.';
}
else
{
    echo 'mail not sent, unexpected error';
}
// }
?>