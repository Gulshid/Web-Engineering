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

$sql = "INSERT INTO MyStudents (firstname, lastname, email) VALUES
('Gul', 'Khan', 'gul@example.com'),
('Mary', 'Moe', 'mary@example.com'),
('Julie', 'Dooley', 'julie@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "Mutipple new records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
