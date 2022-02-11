<?php
$user_conexao = 'root';
$senha_conexao = '';
$dbname_conexao = 'pi';

$conexao=mysqli_connect($user_conexao, $senha_conexao, $dbname_conexao) or die(mysqli_errno());

//session_start();
//include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$teste = "select count(*)as total from usuario where user_email='$email'";
$resultado = mysqli_query($conexao, $teste);
$row = mysqli_fetch_assoc($resultado);

if($row['total'] == 1) {
    $_SESSION['email_existe'] == true;
    header('Location: cadastro.php');
    exit;
}

$sql = "INSERT INTO usuario (user_nome, user_email, user_senha) VALUES ('$nome', '$email', '$senha')";

if($conexao->query($sql) === true) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;

?>