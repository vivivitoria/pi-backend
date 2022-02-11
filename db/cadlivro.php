<?php
session_start();
include("conexao.php");
$isbn = $_POST['isbn'];
$page = file_get_contents("https://www.googleapis.com/books/v1/volumes?q={$isbn}");

$data = json_decode($page, true);

$info = $data['items'][0]['volumeInfo'];
$nome = $info['title'];
$autor = $info['authors'];
$imagedata = file_get_contents($info['imageLinks']['thumbnail']);
file_put_contents('/images/thumb.jpg', $imagedata);  
$num_pages = $info['pageCount'];
$descricao = $info['description'];
$ano_p = $info['publishedDate'];
$genero = $info['categories'];
  
$sql = "INSERT INTO livro (livro_nome, livro_autor, livro_genero, livro_ano, livro_des, livro_num) 
VALUES ('$nome', '$autor', '$genero', '$ano_p', '$descricao', '$num_pages')";

?>
