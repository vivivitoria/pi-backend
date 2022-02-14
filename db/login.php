<?php
session_start();
require('conexao.php');

if(ISSET($_POST['submit_loguser'])){

	$username = $_POST['email_login'];
	$password = $_POST['senha_login'];
	$resultado = mysql_query("SELECT * FROM `usuario` WHERE `user_email` = '$username' AND `user_senha` = '$password';");
	$fetch = mysqli_fetch_array($resultado, MYSQL_ASSOC);
	$row = mysqli_num_rows($resultado);
	if($row > 0){
		$_SESSION['user_id']=$fetch['user_id'];
		echo "<script>alert('Bem vindo(a) :)')</script>";
		echo "<script>window.location='../menu/menu.php'</script>";
	}else{
		echo "<script>alert('Email ou senha incorretos :(')</script>";
		echo "<script>window.location='../login.html'</script>";
	}

}

?>