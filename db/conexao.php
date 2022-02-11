<?php
   try{
      $user_conexao = 'root';
      $senha_conexao = '';
      $dbname_conexao = 'pi';
      $conexao = new PDO('mysql:host=localhost; dbname='.$dbname_conexao, $user_conexao, $senha_conexao);
   }
 
   catch(\PDOException $e){
      echo $e->getMessage();
      die("<p style=\"color:red\">Comportamento inesperado!</p>");
   }

   //if (!$conexao) {
   //    echo "nao deu certo :("; exit;
   //}else {
   //   echo "deu certo :)";
   //}

?>

