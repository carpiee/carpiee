<?php

require_once '../config/init.php';

$newOfferte = new Offerte();

$offerte = $newOfferte->MakeNewOfferte($_POST['naam'], $_POST['email'], $_POST['tel'], $_POST['bedrijfsnaam'], $_POST['opmerking']);



?>
