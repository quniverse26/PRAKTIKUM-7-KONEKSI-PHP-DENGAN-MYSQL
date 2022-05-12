<html>
<body>
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

$sql = "SELECT * FROM buku_tamu)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	//output data of each row
	while ($row = mysqli_fetch_assoc($result)) {
		echo "id_bt: " . $row["id_bt"]. " - nama: " . $row["email". " " . $row["Isi"]. "<br>";
	}
} else {
	echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>