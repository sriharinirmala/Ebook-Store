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

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	$uname=$_POST['name'];
	$pass=$_POST['password'];
	$newURL="option.html";
    while($row = $result->fetch_assoc()) {
		if($row["username"] == $uname && $row['password'] == $pass)
			header('Location: '.$newURL);
    }
	echo "Entered username or password is incorrect. Go back and retry!";
} else {
   echo "no data";
}

$conn->close();
?> 