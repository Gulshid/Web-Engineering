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

if(isset($_POST['Submit'])) {
	$Name = $_POST['UserName'];
	$Password = $_POST['Password'];
	$Gender = $_POST['Gender'];
	$Education = $_POST['Education'];
	$chk = "";
	foreach ($Education as $chk1) {
		$chk .= $chk1 . ",";
	}
	
	$sql = "INSERT INTO StudentsDetails (name, password, gender, education)
	values ('$Name', '$Password', '$Gender', '$chk')";

	if ($conn->query($sql) === TRUE) {
  		echo "New Record Inserted";
	} 
	else {
  		echo "Error in inserting new record: " . $conn->error;
	}
}
$conn->close();		
?>