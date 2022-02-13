<?php
session_start();
include("conexao.php");

$nome = $_POST['nome_cad'];
$email = $_POST['emai_cadl'];
$senha = md5($_POST['senha_cad']);

$resultado = "SELECT COUNT(*) FROM usuario WHERE user_email = $email;";
$row = $resultado->fetch_row();

if(isset($_POST['submit_caduser'])){
    if ($row[0] <= 0) {
        header ('Location: ../menu/menu.html');
        $sql = "INSERT INTO usuario (user_nome, user_email, user_senha) VALUES ('$nome', '$email', '$senha');"; 
        exit();
    }else{
        header ('Location: ../login.html');
        echo "<script> alert ('Esse email já está cadastrado!') </script>";
        exit();
    }
};

?>