
<?php
   
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "itpdm";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (mysqli_connect_errno()) {
        die("Database connection Failed" .mysqli_connect_error());
    }
    else{
        //echo "Database Connection OK";
    }
    
?>






