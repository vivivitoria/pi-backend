
<?php
//creates a unique ID with a random number as a prefix - more secure than a static prefix 

//session_start();
//include("conexao.php");

//$nome=mysqli_real_escape_string($conexao, $_POST['nome']);
//$autor=mysqli_real_escape_string($conexao, $_POST['autor']);
//$genero=mysqli_real_escape_string($conexao, $_POST['genero']);


$id = uniqid (rand (),true); echo $c; echo "<br>";
$nome = $_POST['nome'];
$genero = $_POST['genero'];
$ano = $_POST['ano'];
$autor = $_POST['autor'];

$connect = mysql_connect('nome_do_servidor', 
`livro_id`,
'livro_nome' ,
'livro_genero',
'livro_ano',
'livro_autor');
$db = mysql_select_db('pi_db');
$query_select = "SELECT login FROM livro WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];

  if($nome == "" || $nome == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo nome deve ser preenchido');window.location.href='
    cadastro.html';</script>";

    }else{

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Livro cadastrado com sucesso!');
          window.location.href='listar.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse livro');
          window.location.href='cadastro.html'</script>";
        }
      }
?>
