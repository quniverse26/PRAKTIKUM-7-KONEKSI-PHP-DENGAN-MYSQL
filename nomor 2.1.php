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

$sql = "INSERT INTO salary (id_employee, nama, divisi, salary) VALUES ('0002', 'Lentera Angkasa', 'IT', 'Rp11.300.000')";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>