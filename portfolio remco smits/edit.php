<?php
require_once './config/init.php';

$cms = new Cms();
$UpdateHomePage = $cms->UpdateHomePage('Home', $_POST['contents'], '1');

// $destination_path = '/upload/';
 
// $result = 0;

// $target_path = $destination_path . basename( $_FILES['myfile']['name']);

// if(@move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) {
//    $result = 1;
// }

// sleep(1);
