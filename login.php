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
    $dbConfig = [
        'host' => 'localhost',
        'user' => 'rwa052023',
        'password' => 'csdigital2023',
        'database' => 'rwa052023',
    ];

    $conn = new mysqli($dbConfig['host'], $dbConfig['user'], $dbConfig['password'], $dbConfig['database']);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $KorisnickoIme = $_GET['email1'] ?? null;
    $Lozinka = $_GET['lozinka1'] ?? null;

    if ($KorisnickoIme && $Lozinka) {
        $stmt = $conn->prepare('SELECT * FROM Korisnik WHERE KorisnickoIme = ? AND Lozinka = ?');
        $stmt->bind_param('ss', $KorisnickoIme, $Lozinka);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['KorisnickoIme'] = $KorisnickoIme;
            $row = $result->fetch_assoc();
            $_SESSION['KorisnikID'] = $row['ID'];

            $stmt->close();
            $stmt = $conn->prepare('SELECT * FROM Korisnik WHERE KorisnickoIme = ? AND Lozinka = ? AND Uloga = ?');
            $role = 'Musterija';
            $stmt->bind_param('sss', $KorisnickoIme, $Lozinka, $role);
            $stmt->execute();
            $result = $stmt->get_result();

            $_SESSION['uloga'] = $result->num_rows === 1 ? 'Musterija' : 'Administrator';
            header('Location: index.php');
        } else {
            echo "<h1>Neuspješna prijava!</h1>";
            echo "<p>Vratite se nazad i pokušajte ponovno.</p>";
            echo "<a href='index.php' class='button'>Go Back to Login</a>";
        }
        
        $stmt->close();
    }

    $conn->close();
    ?>
</div>
</body>
</html>
