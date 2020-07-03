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

$uploads_dir = "images/";
$image;
 if(isset($_POST["submit"])){
 
	$tmp_name = $_FILES['fileToUpload']['tmp_name'];
	$name = $uploads_dir. basename($_FILES['fileToUpload']['name']);
	$imageFileType = strtolower(pathinfo($name,PATHINFO_EXTENSION));
	$image=$name;
	move_uploaded_file($tmp_name, $name);

$sql = "INSERT INTO book (name, mobile_no, price, book_name, author, department, email, image) VALUES ('".$_POST['name']."','".$_POST['mobile_no']."','".$_POST['price']."','".$_POST['book_name']."','".$_POST['author']."','".$_POST['dept']."','".$_POST['email_id']."','".$image."')";
if ($conn->query($sql) === TRUE) {
  echo "Book uploaded. you will be contacted by the buyer.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 }
 else
 {
	 echo "You should select a file to upload ";
 }

$conn->close();

?>