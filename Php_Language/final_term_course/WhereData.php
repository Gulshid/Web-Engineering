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

$sql = "SELECT reg_no, firstname, lastname, email FROM MyStudents WHERE lastname = 'Khan'";
// Execute the SQL query
$result = $conn->query($sql);

// Process the result set
if ($result->num_rows > 0) {
  echo "<table><tr><th>Reg. No.</th><th>Name</th><th>Email Address</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
		<td>".$row["reg_no"]."</td>
		<td>".$row["firstname"]." ".$row["lastname"]."</td>
		<td>".$row["email"]."</td>
	</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>