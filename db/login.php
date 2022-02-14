<?php
session_start();
require('conexao.php');

if(ISSET($_POST['email_login'])){
	$username = $_POST['email_login'];
	$password = $_POST['senha_login'];

	$query = mysqli_query($conexao, "SELECT * FROM `usuario` WHERE `user_nome` = '$username' AND `user_senha` = '$password';") or die(mysqli_error());
	$fetch = mysqli_fetch_array($query);
	$row = mysqli_num_rows($query);

	if($row > 0){
		$_SESSION['user_id']=$fetch['user_id'];
		echo "<script>alert('Login Successfully!')</script>";
		echo "<script>window.location='../menu/menu.html'</script>";
	}else{
		echo "<script>alert('Invalid username or password')</script>";
		echo "<script>window.location='../login.html'</script>";
	}

}

?>