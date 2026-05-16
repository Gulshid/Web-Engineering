<?php
    $sever_name = "localhost";
    $username = "root";
    $password = "";
    $db_name = "students";

    $conn = new mysqli($sever_name, $username, $password, $db_name);

    if($conn->connect_error){
        die("Connection error :".$conn->connect_error);
    }


    $sql = "DELETE FROM MyStudents WHERE reg_no = 3";

    if($conn->query($sql) === TRUE){
        echo "Successfully deleted the selected record";
    }
    else{
        echo "failed to delete the record ".$conn->error;
    }

    $conn->close();
?>