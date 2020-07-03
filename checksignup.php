<?php
$servername = "localhost";
$username = "srihari";
$password = "srihari";
$dbname = "webtech";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO user (username, password) VALUES ('".$_POST['name']."','".$_POST['password']."')";
$newURL="1.html";
if ($conn->query($sql) === TRUE) {
   header('Location: '.$newURL);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


