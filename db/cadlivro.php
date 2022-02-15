<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include("conexao.php");
$isbn = $_POST['isbn'];
$id = $_SESSION['user_id'];
$page = file_get_contents("https://www.googleapis.com/books/v1/volumes?q={$isbn}");

$data = json_decode($page, true);

$info = $data['items'][0]['volumeInfo'];
$nome = $info['title'][0];
$autor = $info['authors'][0];
$num_pages = $info['pageCount'];
$descricao = $info['description'][0];
$ano_p = $info['publishedDate'][0];
$genero = $info['categories'][0];

$sql = "INSERT INTO livro ( livro_nome, livro_autor, livro_genero, livro_ano, livro_des, livro_num, user_id) VALUES ('$nome', '$autor', '$genero', '$ano_p', '$descricao', '$num_pages', '$id');";
$conexao->query($sql);


header ('Location: ../menu/menu.php');

?>
