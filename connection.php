<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "productdb";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        
    }
    else
    {
        echo "connection failed";
    }

?>