<?php 
session_start();
include('./db/conexao.php');
$db = $conexao;
$tabela = "usuario";
$colunas = ['user_id','user_nome','user_email'];
$fetchData = fetch_data($db, $tabela, $colunas);

function fetch_data($db, $tabela, $colunas){
    if(empty($db)){
        $msg= "Erro na conexão com o banco de dados";
    }elseif (empty($columns) || !is_array($columns)) {
     $msg="columns Name must be defined in an indexed array";
    }elseif(empty($tableName)){
      $msg= "Table Name is empty";
   }else{
   $columnName = implode(", ", $columns);
   $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY user_id DESC";
   $result = $db->query($query);
   if($result== true){ 
    if ($result->num_rows > 0) {
       $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
       $msg= $row;
    } else {
       $msg= "No Data Found"; 
    };
   }else{
     $msg= mysqli_error($db);
   };
}
return $msg;
}

?>