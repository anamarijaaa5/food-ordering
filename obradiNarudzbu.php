<?php
session_start();

// Uspostava konekcije
$imeServera = "localhost";
$username = "rwa052023";
$lozinka = "csdigital2023";
$imeBaze = "rwa052023";

$conn = new mysqli($imeServera, $username, $lozinka, $imeBaze);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['orderDetails'])) {
    $orderDetails = json_decode($_POST['orderDetails']);

    // Uzimanje ID korisnika iz sesijske varijable
    $userId = $_SESSION['KorisnikID'];

    // Kreiranje narudžbe
    $sqlOrder = "INSERT INTO narudzbe (IDkorisnika) VALUES ('$userId')";
    if ($conn->query($sqlOrder) === TRUE) {
        $orderId = $conn->insert_id; // Dohvaćanje ID-ja nove narudžbe

        // Unos stavki narudžbe
        foreach ($orderDetails as $item) {
            $productId = $item->productId;
            $quantity = $item->quantity;
            $sqlItem = "INSERT INTO narudzbastavke (id_narudzbe, id_stavke, quantity) VALUES ('$orderId', '$productId', '$quantity')";
            if (!$conn->query($sqlItem)) {
                echo "Pogreška prilikom unosa stavke: " . $conn->error . "<br>";
            }
        }

        echo "Uspješno poslana narudžba!";
    } else {
        echo "Pogreška: " . $sqlOrder . "<br>" . $conn->error;
    }
}

$conn->close(); // Zatvaranje konekcije
?>
