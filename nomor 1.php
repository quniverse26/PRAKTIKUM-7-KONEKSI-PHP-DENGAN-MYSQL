<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO buku_tamu (id_bt, nama, email, isi) VALUES ('0001', 'Kinasih Bumi', 'kinasihbumi@gmail.com', 'Rungkut Asri Timur 12')";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>