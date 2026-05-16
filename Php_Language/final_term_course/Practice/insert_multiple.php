<?php
    $server_name = 'localhost';
    $username = 'root';
    $password = "";
    $db_name = "students";

    $conn = new mysqli($server_name, $username, $password, $db_name);

    if($conn->connect_error){
        die("COnnection error :".$conn->connect_error);
    }

    $sql = "INSERT INTO Mystudent (firstname, lastname, email) VALUES
    ('GULSHID', 'ZADA', 'gulshid78@gmail.com'),
    ('Muhammad', 'khan', 'muhammad@gmail.com'),
    ('AMir ', 'ullah', 'amir@gmail.com') 
    )";


if($conn->query($sql) === TRUE){
    echo "Successfully multiple record inserted in db";
}
else{
    echo "failed to insert the record";
}
?>