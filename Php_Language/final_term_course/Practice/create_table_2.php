<?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $db_name = "students";

    $conn = new mysqli($server_name, $username, $password, $db_name);

    if($conn->connect_error){
        die("Connection error :".$conn->error);
    }

    $sql = "CREATE TABLE student_details (
    name VARCHAR(50) NOT NULL,
    password VARCHAR(30) NOT NULL,
    gender VARCHAR(10),
    education VARCHAR(10)
    )";

    IF($conn->query($sql) === TRUE)
    {
        echo "Table created Successfully ";
    }
    else{
        echo "failed to create Table ".$conn->error;
    }
?>