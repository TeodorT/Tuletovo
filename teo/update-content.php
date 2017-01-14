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
	}//do ovde isto kao administrator.php

	$sadrzaj = mysql_escape_string($_POST['sadrzaj']);//mysql_escape_string je metoda koja pre svakog ne bezbednog karaktera stavi znak za escape \ 
	// na ovaj nacin to nece baza puci, posto ako to nemas, mozes sa formom da obrises celu bazu, naprimer

	$sql = "UPDATE sadrzaj SET sadrzaj='$sadrzaj' WHERE id=1";//opet pravis upit 

	if ($conn->query($sql) === TRUE) {//ako prodje upit bez erora ispisi "Sadrzaj užuriran";
	    echo "Sadrzaj užuriran";
	} else {
	    echo "Error updating record: " . $conn->error; // u suprotnom ispisi ovo
	}

	$conn->close();
	header("Location: /teodor-tul/index.php");//zameni u headeru vrednost location na /teodor-tul/index.php , drugim recima te odvede na tu stranicu, kad dodje do ovde

/* 
$_POST je varijabla, koja sadrzi sve sto si submitovao sa neke forme na ovu stranu

