<?php
session_start();

if(isset($_POST['submit_caduser'])){
    include_once("conexao.php");

    $nome = $_POST['nome_cad'];
    $email = $_POST['email_cad'];
    $senha = md5($_POST['senha_cad']);

    $sql = "INSERT INTO usuario (user_nome, user_email, user_senha) VALUES ($nome, $email, $senha);";
    
    header ('Location: ../menu/menu.php');
    exit();
}else{
    echo ('falhaste');
}


?>