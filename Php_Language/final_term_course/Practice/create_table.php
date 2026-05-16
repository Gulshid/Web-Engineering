<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "students";

    $conn = new mysqli($servername, $username, $password, $db_name);

    if($conn->connect_error){
        die("Connection error ".$conn->error);
    }

    $sql = "CREATE TABLE mystudent (
    reg_no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
    ON UPDATE CURRENT_TIMESTAMP
    )
    ";

    if ($conn->query($sql) === TRUE)
    {
        echo "Table is Created Successfully ";
    }
    else{
        echo "Table Creation failed ".$conn->error;
    }

    $conn->close();

?>