<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "students";


    $conn = new mysqli($servername, $username, $password, $db_name);


    if($conn->connect_error)
    {
        die("COnnection failed ".$conn->connect_error);
    }

    $sql = "UPDATE MyStudents SET firstname = 'Ali' 
    WHERE lastname = 'khan'";

    if($conn->query($sql) === TRUE){
        echo "Successfully updated the recored";
    }
    else{
        echo "failed to update the record in db".$conn->error;
    }

    $conn->close();
?>