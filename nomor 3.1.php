<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_employees";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$conn) {
	die("Connection failed:" . mysqli_connect_error());
}

$query = "SELECT id_employee, nama, divisi, salary FROM salary WHERE id_employee='$id_employee";
$sql = mysqli_query($query);
$sql = "UPDATE salary SET divisi = 'Finance' WHERE id_employee = '0002')";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>