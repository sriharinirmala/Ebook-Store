<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#A9A9A9;">

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
	$sql = "SELECT * FROM book";
	$result = $conn->query($sql);
?>


<div class="container-fluid" >
<div class="container">
	<div class="row">
	
	<?php
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				$code= '<div class="col m-3 row p-4" style="background-color:#ffffff;height:30vh;border-radius:5px;width:33%">'.
					'<div class="col">'.
					'<img  src="'.$row['image'].'" style="height:100px;width:140px;"/ usemap="'.$row['book_name'].'">'.
					'<div class="demo">'.
					'Price:'.$row['price'].
					'<a href="mail.html">'.
					'<input type="button" value="Buy Now" ></div>'.
					'</a>'.
					'<area shape="rect" coords="0,0,100,150" alt="Sun" href="'.$row['image'].'">'.
					'</div>'.
					'<div class="col mt-3">'.
				   '<p class="demo">'.$row['book_name'].'</p>'. 
				   '</div>'.
					'</div>';
				echo $code;
			}
		}
		else
		{
			echo "No Books";
		}
		
	
	?>
        	<!--div class="col m-3 row p-4" style="background-color:#ffffff;height:30vh;border-radius:5px;width:33%">
				<div class="col">
					<img  src="swe.jpg" style="height:70%;width:100%;"/ usemap="sw">
					<map name="sw">
                <area shape="rect" coords="0,0,100,150" alt="Sun" href="swe.jpg">
				</div>
				<div class="col mt-3">
				   <p id="demo">Software Engineering</p> 
				</div>
        	</div>
        	<div class="col m-3 row p-4" style="background-color:#ffffff;height:30vh;border-radius:5px;width:33%;">
				<div class="col">
					<img  src="os.jpg" style="height:70%;width:100%;"/ usemap="oo">
					<map name="oo">
                <area shape="rect" coords="0,0,100,150" alt="Sun" href="os.jpg">
				</div>
				<div class="col mt-3">
					<p id="demo1">Operating Systems</p>
				</div>
        	</div>
        	<div class="col m-3 row p-4" style="background-color:#ffffff;height:30vh;border-radius:5px;width:33%">
				<div class="col">
					<img  src="inn.jpg" style="height:70%;width:100%;"/ usemap="in">
					<map name="in">
                <area shape="rect" coords="0,0,100,150" alt="Sun" href="inn.jpg">
				</div>
				<div class="col mt-3">
					<p id="demo2">Innovations in computer science and engineering</p>
				</div>
        	</div>
	</div>
	<div class="row">

        <div class="col m-3 row p-4" style="background-color:#ffffff;height:30vh;border-radius:5px;width:33%">
			<div class="col">
				<img  src="network.jpg" style="height:70%;width:100%;" usemap="book"/>
				<map name="book">
                <area shape="rect" coords="0,0,100,150" alt="Sun" href="network.jpg">
			</div>
			<div class="col mt-3">
				<p id="demo3">Network and data security</p>
			</div>
		</div>
		<div class="col m-3 row p-4" style="background-color:#ffffff;height:30vh;border-radius:5px;width:33%">
			<div class="col">
				<img  src="cse.jpg" style="height:70%;width:100%;" usemap="bk"/>
					<map name="bk">
                <area shape="rect" coords="0,0,100,150" alt="Sun" href="cse.jpg">
			</div>
			<div class="col mt-3">
				<p id="demo4">The computer engineering handbook</p>
			</div>
		</div>
		<div class="col m-3 row p-4" style="background-color:#ffffff;height:30vh;border-radius:5px;width:33%">
			<div class="col">
				<img  src="cao.png" style="height:70%;width:100%;" usemap="ck"/>
				<map name="ck">
                <area shape="rect" coords="0,0,100,150" alt="Sun" href="cao.png">
			</div>
			<div class="col mt-3">
				<p id="demo5">Computer architecture and organisation</p>
			</div>
		</div-->
	</div>
    </div>
</div>
<?php

	$conn->close();

?>
    <script>
	
	document.getElementsByClassName("demo").addEventListener("mouseover",mouseOver);
	document.getElementsByClassName("demo").addEventListener("mouseout",mouseOut);

	function mouseOver()
	{
	document.getElementById("demo").innerHTML="Price:299"
	}
	function mouseOver1()
	{
	document.getElementById("demo1").innerHTML="Price:399"
	}
	function mouseOver2()
	{
	document.getElementById("demo2").innerHTML="Price:499"
	}
	function mouseOver3()
	{
	document.getElementById("demo3").innerHTML="Price:599"
	}
	function mouseOver4()
	{
	document.getElementById("demo4").innerHTML="Price:699"
	}
	function mouseOver5()
	{
	document.getElementById("demo5").innerHTML="Price:799"
	}
	function mouseOut()
	{
	document.getElementById("demo").innerHTML="Software Engineering"
	}
	function mouseOut1()
	{
	document.getElementById("demo1").innerHTML="Operating Systems"
	}
	function mouseOut2()
	{
	document.getElementById("demo2").innerHTML="Innovations in computer science and engineering"
	}
	function mouseOut3()
	{
	document.getElementById("demo3").innerHTML="Network and data security"
	}
	function mouseOut4()
	{
	document.getElementById("demo4").innerHTML="The computer engineering handbook"
	}
	function mouseOut5()
	{
	document.getElementById("demo5").innerHTML="Computer architecture and organisation"
    }
	</script>
</body>
</html>