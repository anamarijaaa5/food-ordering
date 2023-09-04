<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
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
  <div class="container">
    <?php
    $imeServera = "studenti.sum.ba";
    $username = "rwa052023";
    $lozinka = "csdigital2023";
    $imeBaze = "rwa052023";
    $KorisnickoIme=$_GET["email1"];
    $Lozinka=$_GET["lozinka1"];

    // Uspostava konekcije
    $konekcija = mysqli_connect($imeServera, $username, $lozinka, $imeBaze);
    // Provjera konekcije
    if (!$konekcija) {
      die("Konekcija neuspjela: " . mysqli_connect_error());
    }

    $result = $konekcija->query("SELECT * FROM Korisnik WHERE KorisnickoIme = '$KorisnickoIme' AND Lozinka = '$Lozinka'");

    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION["login"] = true;
        $_SESSION["KorisnickoIme"] = $KorisnickoIme;
        $row = mysqli_fetch_assoc($result);	
        $_SESSION["KorisnikID"] = $row["ID"];

        $musterija = $konekcija->query("SELECT * FROM Korisnik WHERE KorisnickoIme = '$KorisnickoIme' AND Lozinka = '$Lozinka' AND Uloga='Musterija'");
        if (mysqli_num_rows($musterija) == 1) {
            $_SESSION["uloga"] = 'Musterija';
            echo "<script> window.location.assign('index.php'); </script>";
        } else {
            $_SESSION["uloga"] = 'Administrator';
            echo "<script> window.location.assign('index.php'); </script>";
        }
    } else {
        echo "<h1>Neuspješna prijava!</h1>";
        echo "<p> Vratite se nazad i pokušajte ponovno.</p>";
        echo "<a href='index.php' class='button'>Go Back to Login</a>";
    }

    $konekcija->close();
    ?>
  </div>
</body>
</html>
