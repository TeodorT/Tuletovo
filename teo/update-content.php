 <?php
	$servername = "localhost";
	$username = "root";
	$password = "toor";
	$dbname = "ekologija";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sadrzaj = mysql_escape_string($_POST['sadrzaj']);

	$sql = "UPDATE sadrzaj SET sadrzaj='$sadrzaj' WHERE id=1";

	if ($conn->query($sql) === TRUE) {
	    echo "Sadrzaj užuriran";
	} else {
	    echo "Error updating record: " . $conn->error;
	}

	$conn->close();
	header("Location: /teo/index.php");
?>