<?php
// Include the configuration file
require 'config.php';

// Client data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Insert data into the database
$sql = "INSERT INTO clients (name, email, phone) VALUES ('$name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
