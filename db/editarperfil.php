
<?php
$id = $_GET['user_id'];
  // This function will run within each post array including multi-dimensional arrays
    function ExtendedAddslash(&$params)
    {
            foreach ($params as &$var) {
                // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
                is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
                unset($var);
            }
    }

// Initialize ExtendedAddslash() function for every $_POST variable
ExtendedAddslash($_POST);   

            $librarian_fname = $_POST['usuario'];
            $id = $_POST['user_id'];

         if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = '';
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
        // define variables and set to empty values
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