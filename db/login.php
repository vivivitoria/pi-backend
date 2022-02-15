<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('conexao.php');
	#captura os dados do formulário
	$email = filter_input(INPUT_POST, 'email_login', FILTER_SANITIZE_EMAIL);
	$senha = filter_input(INPUT_POST, 'senha_login');

	$sql = "SELECT * FROM usuario WHERE user_email = '$email'";
	$users = $conexao->query($sql);
	$user = $users->fetch();

	# se não encontrou o usuário
	if(!$user){
		echo ('Não achou o usuário');
		//header("Location:../?p=login&erro=1");
		exit;
	}
	$hash = $user["user_senha"];
	print_r($hash);


	# verificar se a senha bate
	if(password_verify($hash, $senha)){
		session_start();
		$_SESSION['user_id'] = $user['id'];
		echo "<script>alert('Bem vindo(a) :)')</script>";
//		echo "<script>window.location='../menu/menu.php'</script>";
	}
	else{
		echo "<script>alert('Senha incorreta :(')</script>";
//		echo "<script>window.location='../login.html'</script>";
	}

?>