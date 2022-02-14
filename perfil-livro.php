<?php
sesssion_start();
include('db/livro.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/perfil-livro.css">
        <link rel="icon" href="midia/book-fill.svg">
        <title>Cidade Literária</title>
    </head>
    <body>
        <div class="btn-back">
            <a href="./menu/menu.php"> &#8592; Voltar</a>
        </div>
        <div class="center" id="main-container">
            <h1>Livro</h1>
            <form method="get" id="edit-form" action="db/cadastrodb.php">
                <div class="full-box">
                    <label class="perfil" for="nome">Nome: <?php print $colunas[1] ?></label>                    
                </div>
                <div class="full-box">
                    <label class="perfil" for="autor">Autor: <?php print $colunas[2] ?></label>
                </div>
                <div class="full-box">
                    <label class="perfil" for="des">Descrição: <?php print $colunas[3] ?></label>
                </div>
                <div class="full-box">
                    <label class="perfil" for="genero">Gênero: <?php print $colunas[4] ?></label>
                </div>
                <div class="full-box">
                    <label class="perfil" for="ano">Ano: <?php print $colunas[5] ?></label>
                </div>
                <div class="full-box">
                    <label class="perfil" for="num">Número de páginas: <?php print $colunas[6] ?></label>
                </div>

                <div class="full-box">
                    <a href="check.html">
                    <input type="button" value="Quero pegar esse livro" name="" id="btn-senha" class="btn" onclick="alterarSenha()">
                    </a>
                </div>
            </form>
        </div>
        <?php
        $id = $_GET['user_id'];
        $nome = $_GET['nome'];
        $login = $_GET['login'];
        $senha = md5($_GET['senha']);
        $connect = mysql_connect('localhost', 
        'user_id',
        'user_nome',
        'user_email',
        'user_senha');
        $db = mysql_select_db('pi_db');
        $query_select = "SELECT login FROM usuario WHERE id_user = '$id'";
        $select = mysql_query($query_select,$connect);
        $array = mysql_fetch_array($select);
        $logarray = $array['id'];
        ?>
        <script src="js/editarperfil.js"></script>
    </body>
</html>