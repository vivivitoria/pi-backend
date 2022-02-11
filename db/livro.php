<?php
// Verifica se existe a variável txtlivro_nome
if (isset($_GET["txtlivro_nome"])) {
    $nome = $_GET["txtlivro_nome"];
    // Conexao com o banco de dados
    $server = "s";
    $user = "USER_NAME";
    $senha = "PASSWORD";
    $base = "pi_db";
    $conexao = mysqli_connect($server, $user, $senha) or die("Erro na conexão!");
    mysql_select_db($base);
    // Verifica se a variável está vazia
    if (empty($nome)) {
        $sql = "SELECT * FROM livro";
    } else {
        $nome .= "%";
        $sql = "SELECT * FROM livro WHERE livro_nome like '$nome'";
    }
    sleep(1);
    $result = mysql_query($sql);
    $cont = mysql_affected_rows($conexao);
    // Verifica se a consulta retornou linhas
    if ($cont > 0) {
        // Atribui o código HTML para montar uma tabela
        $tabela = "<table border='1'>
                    <thead>
                        <tr>
                            <th>NOME</th>
                            <th>GENERO</th>
                            <th>ANO</th>
                            <th>AUTOR</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>";
        $return = "$tabela";
        // Captura os dados da consulta e inseri na tabela HTML
        while ($linha = mysql_fetch_array($result)) {
            $return.= "<td>" . utf8_encode($linha["NOME"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["GENERO"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["ANO"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["AUTOR"]) . "</td>";
            $return.= "</tr>";
        }
        echo $return.="</tbody></table>";
    } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "Esse livro não está cadastrado :(";
    }
}
?>