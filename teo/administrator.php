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

$sql = "SELECT sadrzaj FROM sadrzaj";
$result = $conn->query($sql);

$sadrzaj = array();
	
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($sadrzaj, array(
			'sadrzaj' => $row["sadrzaj"]
		));
    }
} else {
    echo "0 results";
}
$conn->close();
?> 

<?php var_dump($sadrzaj); ?>

<?php include('header.php') ?>
	<div>
		<form action="update-content.php" method="post">
			<label for="sadrzaj">Sadrzaj
			<textarea name="sadrzaj" id="sadrzaj" cols="30" rows="10"><?php echo $sadrzaj[0]['sadrzaj']; ?></textarea></label>
			
			<input type="submit" value="Ažuriraj sadržaj">
		</form>
	</div>
<?php include('footer.php') ?>