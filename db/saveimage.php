<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include("conexao.php");

$imagedata = file_get_contents($info['imageLinks']['thumbnail'][0]);
$img = 'logo{$id_livro}.png';
file_put_contents($img, file_get_contents($imagedata));


?>