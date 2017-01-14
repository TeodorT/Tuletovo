<?php //pocetak bloka za konekciju na bazu
	$servername = "localhost"; //gde se baza hostuje, ovo je obicno localhost (127.0.0.1 <- isto sto i localhost) ali moze biti bilo kakav link, IP adresa.... bilo gde se baza nalazi
	$username = "root"; //korisnik baze (mysql (phpmyadmin) korisnik)
	$password = "toor"; //sifra
	$dbname = "ekologija"; //ime baze koja se koristi

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); //kao i u c# sa "new" instanciras mysqli objekat $servername, $username, $password, $dbname su parametri koje prosledjujes konstruktoru, opet, isto kao c#

// Check connection
if ($conn->connect_error) {//ako konekcija ne uspe. U c# se koristi tacka "." za pristupanje metodama i promenljivima ... , u php-u imas onu strelicu :D "->"
    die("Connection failed: " . $conn->connect_error);//ispise Connection failed i gresku koja se dogodila (probaj da zamenis sifru ili usera, pa ces videti o cemu pricam)
}

$sql = "SELECT sadrzaj FROM sadrzaj"; //u varijablu $sql stavljas string koji je ustvari upit za mysql bazu
$result = $conn->query($sql);//izvrsavas upit nad bazom, tako sto preko instance ($conn) mysqli objekta (linija 8) pozivas metodu query(), kojoj prosledjujes upit ($sql), koji si pre toga definisao 

$sadrzaj = array(); //samo instanciras varijablu, kao prazan niz
	
if ($result->num_rows > 0) { //$result varijabla sad sadrzi sve sto je upit vratio (ln16) i koristis metodu num_rows, koja vraca broj redova, koji se vratio iz baze, ako je broj redova veci od 0 (ako se bilo sta vratilo iz baze) izvrsi sledece
    // output data of each row
    while($row = $result->fetch_assoc()) { //dok u $result ima redova, u $row se zapisuje jedan red kao asociativni niz, i izvrsi sa njim sledece
        array_push($sadrzaj, array(//array push je metoda, koja na kraj niza dodaje vrdnosti... prvi parametar je niz u koji upisujemo (ln18), drugi parametar je sta upisujemo u taj niz
			'sadrzaj' => $row["sadrzaj"]//standardni "key, value" (kluc, vrednost) zapis u niz, da mozes posle lakse da nadjes sadrzaj :D $row je promenljiva u koju smo ubacili jedan red, $red['sadrzaj'] znaci da uzimas niz $red i uzimas key 'sadrzaj' i on ti vrati vrednost koja je tu bila taj $row['sadrzaj'] dolazi direktno iz baze 
		)); 
    }//ponavljaj, dok ima redova, u ovom slucaju ce se while izvrsiti samo jednom, samo jedan sadrzaj imas u bazi 
} else { //ako je num_rows == 0 (ln22)
    echo "0 results";//ispise "0 results" 
}
$conn->close(); //pozivas metodu za zatvaranje konekcije
?> 

<?php //var_dump($sadrzaj); //probaj da skines komentar ispred var_dump, da vidis sta radi ta funkcija?>

<?php include('header.php') //inkludujes header.php fajl, da ne moras iste stvari da ponavljas?> 
	<div class="content">  <!-- element div, sa atributom class koji ima vrednost content -->
		<form action="update-content.php" method="post"><!-- element form sa akcijom update-content.php i metodom post ''''''skoci na kraj-->
			<label for="">Sadrzaj</label><!-- label element -->
			<textarea class="edit-content" name="sadrzaj" id="sadrzaj" cols="30" rows="10"><?php echo $sadrzaj[0]['sadrzaj']; ?></textarea><!-- element textarea sa klasom content, atribut name je sadrzaj(po ovom imenu submitujes na dalju preradu, pogledaj update-content.php)
			sto se tice php taga, ispisujes prvi zapis u nizu $sadrzaj to znaci 0 a u top prvom nizu u prvom nizu (konfuzno a? :D) ispisuje sve sto je pod key sadrzaj (ln24)
			 -->
			
			<input type="submit" value="Ažuriraj sadržaj"><!-- submit dugme, koje kad pritisnes, submituje formu na navedenu akciju (update-content.php) -->
		</form>
	</div>
<?php include('footer.php') ?><!-- isto kao header (ln35)-->



<?php /*

u action atribut navodis gde ce forma da se podnese (submituje)

post znaci da ce se podaci sa forme submitovati post metodom, tako da nisu vidljive u url stranice, postoji jos nekoliko metoda, naprimer get, koja kad se koristi, parametri su vidljivi u url stranice