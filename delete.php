<html>
<body>
<?php
   ob_start();
   session_start(); 

	 if($_SESSION["uloga"] != 'Administrator')
	{
		echo "<script> window.location.assign('noaccess.php'); </script>";
	}
?>

 <?php
$imeServera = "localhost";
$username = "rwa052023";
$lozinka = "csdigital2023";
$imeBaze = "rwa052023";
$id = $_GET["id"];

// Stvaranje konekcije
$konekcija = new mysqli($imeServera, $username, $lozinka, $imeBaze);
// Provjera konekcije
if ($konekcija->connect_error) {
  die("Konekcija neuspjela: " . $konekcija->connect_error);
}

// Brisanje podataka sa zadanim ID-em
$sql = "DELETE FROM Korisnik WHERE id=$id";

if ($konekcija->query($sql) === TRUE) {
  echo "<script> window.location.assign('upravljanje-korisnicima.php'); </script>";
} else {
  echo "Pogreška pri brisanju: " . $conn->error;
}

$konekcija->close();
?> 

</body>
</html>