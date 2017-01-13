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

<?php include('header.php'); ?>

<div class="content">
	
	<div class="w3-content w3-display-container" style="max-width:100%">
		<img class="mySlides" src="http://www.w3schools.com/w3css/img_nature_wide.jpg" style="width:100%">
		<img class="mySlides" src="http://www.w3schools.com/w3css/img_fjords_wide.jpg" style="width:100%">
		<img class="mySlides" src="http://www.w3schools.com/w3css/img_mountains_wide.jpg" style="width:100%">
		<div class="w3-center w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
			<div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
			<div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
			<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
			<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
			<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
		</div>
	</div>
	<div class="sadrzaj">
		<?php echo $sadrzaj[0]['sadrzaj']; ?>
	</div>
	
</div>

<script>
	var slideIndex = 1;
	showDivs(slideIndex);
	function plusDivs(n) {
		showDivs(slideIndex += n);
	}
	function currentDiv(n) {
		showDivs(slideIndex = n);
	}
	function showDivs(n) {
		var i;
		var x = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("demo");
			if (n > x.length) {slideIndex = 1}
				if (n < 1) {slideIndex = x.length}
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";
				}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" w3-white", "");
			}
		x[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " w3-white";
	}
</script>