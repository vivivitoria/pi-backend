<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	echo "<script> alert ('Preencha todos os campos!'); </script>";
	header ('Location: ../login.html');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email_login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha_login']);

$query = "select user_email from usuario where user_email = '$email' and user_senha = md5('$senha');";

$result = msqli_query ($conexao, $query);

$row = mysqli_num_rows();

if ($row == 1) {
	$_SESSION['email'] = $email;
	header ('Location: ../menu/menu.html');
	exit();
}else{
	header('Location: ../login.html');
	exit();
};

?>