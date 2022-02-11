
<?php
$id = $_GET['user_id'];
    function ExtendedAddslash(&$params)
    {
            foreach ($params as &$var) {
                is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
                unset($var);
            }
    }
ExtendedAddslash($_POST);   

            $librarian_fname = $_POST['usuario'];
            $id = $_POST['user_id'];

         if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);

            if(! $conn ) {
               die('Não foi possível conectar: ' . mysql_error());
            } 
            $sql = "UPDATE table SET librarian_fname = '$librarian_fname' WHERE id = '$id'";
            mysql_select_db('Events');
            $result = mysql_query( $sql, $conn );

            if(! $result ) {
               die('Não foi possível digitar os dados: ' . mysql_error());
            };

            mysql_close($conn);
            header("Location: procurar.php");
         }

         else {
            $librarian_fname = $id = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $librarian_fname = test_input($_POST["librarian_fname"]);
            $id = test_input($_POST["id"]);
            }

            function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
}
?>