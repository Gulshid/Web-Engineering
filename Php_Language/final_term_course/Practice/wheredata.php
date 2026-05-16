<?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $db_name = "students";

    $conn = new mysqli($server_name, $username, $password, $db_name);

    if($conn->connect_error){
        die("COnnection failed :".$conn->connect_error);
    }

    $sql = "SELECT reg_no , firstname, lastname , email  FROM MyStudents 
    WHERE lastname = 'khan'";


    $result = $conn->query($sql);

    if($result->num_rows > 0){
        echo "<table><tr><th>Reg. No.</th><th>Name</th><th>Email Address</th></tr>";
  // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>".$row["reg_no"]."</td>
            <td>".$row["firstname"]." ".$row["lastname"]."</td>
            <td>".$row["email"]."</td>
        </tr>";
        }
        echo "</table";
    
    }
    else{
            echo "0 result ";
        }

    $conn->close();

?>