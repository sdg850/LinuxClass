<?php
$servername = "localhost";
$database = "linux";
$username = "root";
$password = "Linux2021-2";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];


$sql = "INSERT INTO estudiantes (nombre, documento, email) VALUES ('$name', '$id', '$email')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>