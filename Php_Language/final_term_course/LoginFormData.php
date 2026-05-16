<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['Login'])) {
	$Name = $_POST['UserName'];
	$Password = $_POST['Password'];
		
	$sql = "SELECT * FROM StudentsDetails WHERE name = '$Name' and password = '$Password'";
	$que = mysqli_query($conn, $sql);
	if (mysqli_num_rows($que) > 0) {
  		echo "Login OK!!!";
	} 
	else {
  		echo "Wrong Username and Password";
	}
}
$conn->close();		
?>