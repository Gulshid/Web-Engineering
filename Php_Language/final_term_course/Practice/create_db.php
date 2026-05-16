<?php
    include "conn.php";

    $sql = "CREATE DATABASE students";

    if($conn->query($sql) === TRUE){
        echo "Database created Successfully ";
    }
    else{
        echo "Database failed to create :".$conn->error;
    }


?>