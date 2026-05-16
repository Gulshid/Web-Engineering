<?php
include 'conn.php';

$sql = "CREATE DATABASE students";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

// Close connection
$conn->close();
?>