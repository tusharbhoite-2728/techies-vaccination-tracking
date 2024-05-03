<?php
// Database connection
$servername = "3306";
$username = "root";
$password = "Tejas@123";
$database =  "vaccination";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data
$name = $_POST['name'];
$dob = $_POST['dob'];
$parent_email = $_POST['parent_email'];
$phone_number = $_POST['phone_number'];

// SQL query to insert data into database
$sql = "INSERT INTO newborns (id,name, dob, parent_email, phone_number) VALUES ( '$id', $name', '$dob', '$parent_email', '$phone_number')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
