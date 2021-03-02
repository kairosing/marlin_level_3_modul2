<?php
require "../vendor/autoload.php";

$templates = new League\Plates\Engine('../app/views');


echo $templates->render('about', ['title' => 'Jonathan']);



//if ($_SERVER['REQUEST_URI'] == '/home'){
//    require '../app/controllers/homepage.php';
//
//}
//
//exit;
//
