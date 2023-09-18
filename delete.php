<html>
<body>
<?php
   ob_start();
   session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

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
$sql = "DELETE FROM korisnik WHERE id=$id";

if ($konekcija->query($sql) === TRUE) {
  echo "<script> window.location.assign('upravljanje-korisnicima.php'); </script>";
} else {
  echo "Pogreška pri brisanju: " . $conn->error;
}

$konekcija->close();
?> 

</body>
</html>
