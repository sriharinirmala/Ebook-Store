<html>
<head>

<title>Department</title>
   <link rel="stylesheet" type="text/css" href="dep.css">
   </head>
<body>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<table border="1">
<tr>
<th>Serial no</th>
<th>Departments</th>
</tr>
<tr>
<td>1</td>
<td>Computer science</td>
</tr>
<tr>
<td>2</td>
<td>Electrical and Electronics</td>
</tr>
<tr>
<td>3</td>
<td>Mechanical</td>
</tr>
<tr>
<td>4</td>
<td>Information technology</td>
</tr>
<tr>
<td>5</td>
<td>Civil</td>
</tr>
<tr>
<td>6</td>
<td>Chemical</td>
</tr>
</table><br>
<br>
<p id="demo"></p>
<script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>



</body>
</html>