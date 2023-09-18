<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
      margin-top: 100px;
    }

    h1 {
      color: #ff0000;
      font-size: 24px;
    }

    .button {
      display: inline-block;
      background-color: #333333;
      color: #ffffff;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      margin-top: 20px;
    }
  </style>
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

$imeServera = "localhost";
$username = "rwa052023";
$lozinka = "csdigital2023";
$imeBaze = "rwa052023";
$KorisnickoIme = $_GET["email"];
$Lozinka = $_GET["lozinka"];
$Lozinka2 = $_GET["lozinka2"];
$rowArray = [];

// Uspostava konekcije
$konekcija = mysqli_connect($imeServera, $username, $lozinka, $imeBaze);
// Provjera konekcije
if (!$konekcija) {
  die("Konekcija neuspjela: " . mysqli_connect_error());
}

$result = $konekcija->query("SELECT * FROM korisnik WHERE KorisnickoIme = '$KorisnickoIme'");

if (mysqli_num_rows($result) != 1) {
    if ($Lozinka == $Lozinka2) {
        //Dodavanje unesenih podataka u tablicu
        $sql = "INSERT INTO korisnik (KorisnickoIme, Lozinka, Uloga)
                VALUES ('$KorisnickoIme', '$Lozinka', 'Musterija');";

        if ($konekcija->query($sql) === TRUE) {
            echo "<div class='container'>";
            echo "<h1 style='text-align:center;'>Registracija uspješna!</h1>";
            $redak = "INSERT INTO musterija (IDKorisnika) 
            SELECT ID FROM korisnik WHERE KorisnickoIme='$KorisnickoIme';";
            $konekcija->query($redak);

            $uloga = "UPDATE korisnik SET Uloga ='Musterija' WHERE KorisnickoIme='$KorisnickoIme'";
            $konekcija->query($uloga);
            

            session_start();
            $_SESSION["login"] = true;
            $_SESSION["KorisnickoIme"] = $KorisnickoIme;
            echo "<a href='index.php' class='button'>Go Back to Login</a>";
            echo "</div>";
        } else {
            echo "Greska: " . $sql . "<br>" . $konekcija->error;
        }
    } else {
        echo "<div class='container'>";
        echo "<h1 style='text-align:center;'>Lozinke se ne poklapaju!</h1>";
        echo "<p>Vratite se nazad i pokušajte ponovno.</p>";
        echo "<a href='index.php' class='button'>Go Back to Login</a>";
        echo "</div>";
    }
} else {
    echo "<div class='container'>";
    echo "<h1>Neuspješna prijava!</h1>";
    echo "<p>Vratite se nazad i pokušajte ponovno.</p>";
    echo "<a href='index.php' class='button'>Go Back to Login</a>";
    echo "</div>";
}
$konekcija->close();
?>
</body>
</html>
