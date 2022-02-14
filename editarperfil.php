<?php
include('pegardados.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/editarperfil.css">
        <link rel="icon" href="midia/book-fill.svg">
        <title>Cidade Literária</title>
    </head>
    <body>
        <div class="btn-back">
            <a href="perfil.php"> &#8592; Voltar</a>
        </div>
        <div class="center" id="main-container">
            <h1>Editar perfil</h1>
            <form action="editarperfil.php" method="post" id="edit-form">
                <div class="full-box">
                    <label for="email">E-mail: </label>
                    <input type="email" value="" name="email_n" placeholder="Digite seu e-mail" data-min-length="3">
                </div>
                <div class="full-box">
                    <label for="name">Nome: </label>
                    <input type="text"  value="" name="nome_n" placeholder="Digite o seu nome">
                </div>

                <div class="full-box">
                    <input type="button" value="Alterar senha" id="btn-senha" class="btn" onclick="alterarSenha()">
                    
                </div>
                <div class="full-box"></div>

                <div class="full-box" id="senha-box">
                    <div class="half-box spacing">
                        <label for="senha_nova">Senha:</label>
                        <input type="password"  value="" name="senha_nova" id="senha_nova" placeholder="Digite a sua nova senha">
                    </div>
                    
                    <div class="full-box">
                        <label for="senha_confirma">Confirme a senha: </label>
                        <input type="password"  value="" name="senha_confirma" id="senha_confirma" placeholder="Confirme a sua nova senha">
                    </div>
                </div>

                <div class="full-box">
                    <label for="senha">Para a confirmação das mudanças digite sua senha atual: </label>
                    <input type="password"  value="" name="senha_n" placeholder="Digite sua senha atual">
                </div>

                <div class="full-box">
                    <input type="submit" value="Salvar" id="btn-submit" class="btn">
                    
                </div>

                <p class="error-validation template"></p>
            </form>
        </div>
        <script src="js/editarperfil.js"></script>
    </body>
</html>