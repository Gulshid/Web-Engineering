<?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $db_name = "students";

    $conn = new mysqli($server_name, $username, $password, $db_name);

    if($conn->connect_error)
    {
        die("Connection failed ".$conn->connect_error);
    }

    if(isset($$_POST["Submit"])){
        $Name = $_POST['username'];
        $password = $_POST['password'];
        $Gender = $_POST['Gender'];
        $Educaiton = $_POST["Education"];
        $chk = "";

        foreach($Educaiton as $chk1){
            $chk .= $chk1.",";
        }
    }

    $sql = "INSERT INTO studentsDetails (name, password, gender, education)
    FROM VALUES
    ($Name, $password, $Gender, $Educaiton)
    ";

    if($conn->query($sql) === TRUE){
        echo "New Record Inserted Successfully ";
    }
    else{
        echo "Failed to Insert New Record in Database".$conn->error;
    }
?>