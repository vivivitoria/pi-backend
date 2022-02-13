
<?php
session_start();
include('conexao.php');

$id = $_GET['user_id'];
$nome = $_GET['nome'];
$login = $_GET['login'];
$senha = md5($_GET['senha']);

$query_select = "SELECT login FROM usuario WHERE id_user = '$id'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['id'];


?>