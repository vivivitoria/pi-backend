<?php 

session_start();
include('conexao.php');

$nome_n = $_POST['nome'];
$email_n = $_POST['email'];
$senha_n = $_POST['senha'];
$senha_nova = $_POST['senha_nova'];
$confirmacao = $_POST['senha_confirma'];

$nome = "SELECT user_nome FROM usuario'";
$email = "SELECT user_email FROM usuario'";
$senha = "SELECT user_senha FROM usuario'";

if ($senha_n == $senha) {
   $sql  = "UPDATE `usuario` SET 
               `nome` = '$nome_n', 
               `email` = '$email_n', 
               `senha` = '$senha_nova' 
           WHERE
               `email` = $email";
   $update = $mysqli->query($sql);
   if($update) {
       echo "<script> alert ('Usuário atualizado com sucesso!'); location.href='../perfil.html'</script>";
   } else {
       $erro = true;
       echo $mysqli->error;
   };
};


?>