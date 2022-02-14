<?php
session_start();

if(isset($_GET['submit_caduser'])){
    include_once("conexao.php");

    $nome = $_GET['nome_cad'];
    $email = $_GET['email_cad'];
    $senha = md5($_GET['senha_cad']);
    $resultado = mysqli_query($conexao, "INSERT INTO usuario (user_nome, user_email, user_senha) VALUES ('$nome', '$email', '$senha');");
    echo ('foi');
    header ('Location: ../menu/menu.html');
    exit();
}else{
    echo ('falhaste');
}

?>