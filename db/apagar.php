<?php

session_start();
ob_start();
include_once './conexao.php';

$id = filter_input(INPUT_GET, "livro_id", FILTER_SANITIZE_NUMBER_INT);
var_dump($id);

if (empty($id)) {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
    header("Location: index.php");
    exit();
}

$query_livro = "SELECT livro_id FROM livro WHERE livro_id = $id LIMIT 1";
$result_livro = $conn->prepare($query_livro);
$result_livro->execute();

if (($result_livro) AND ($result_livro->rowCount() != 0)) {
    $query_do_livro = "DELETE FROM livro WHERE livro_id = $id";
    $apagar_livro = $conn->prepare($query_do_livro);

    if ($apagar_livro->execute()) {
        $_SESSION['msg'] = "<p style='color: green;'>Livro apagado com sucesso!</p>";
        header("Location: index.php");
    } else {
        $_SESSION['msg'] = "<p style='color: #f00;'>Livro não apagado com sucesso!</p>";
        header("Location: index.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Livro não encontrado!</p>";
    header("Location: index.php");
}
