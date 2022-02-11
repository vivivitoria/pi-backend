<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select user_email from usuario where user_email = '{$email}' and user_senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

$verifica = $mysqli->query("SELECT * FROM usuario WHERE user_email='$email'");
if($verifica) {
    $row = $verifica->num_rows;
    $f = $verifica->fetch_assoc();
    if($row > 0 && $codigo !== intval($f['id'])) {
        echo "<script> alert ('Já existe um usuário com esse e-mail'); </script>";
	} else {
		
	}
};

if($row == 1) {
	$_SESSION['email'] = $usuario;
	header('Location: ../menu/menu.html');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../login.html');
	exit();
}
?>