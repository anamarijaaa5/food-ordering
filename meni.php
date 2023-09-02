<!doctype html>

<?php
ob_start();
session_start();
?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../css/mdb.min.css">
  <link rel="stylesheet" href="meni_animacija.css">
  <title>
    Online dostava
  </title>
  <link rel="icon" href="slike/fsre.jpg" type="image/x-icon">



  <style>


  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">DOSTAVA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Meni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="informacije.php">Informacije</a>
        </li>


      </ul>

      <!--Modal: Login / Register Form-->

      <!-- display only if role is admin -->
      <?php if (isset($_SESSION['login'])): ?>
        <?php if ($_SESSION['uloga'] == 'Administrator'): ?>
          <div>
            <a style="color:gray; text-decoration: none; margin-right:10px;" href="upravljanje-korisnicima.php">Pregled
              narudžbi</a>
            <a style="color:gray; text-decoration: none; margin-right:10px;" href="upravljanje-korisnicima.php">Upravljanje
              korisnicima</a>
          </div>
        <?php endif; ?>
      <?php endif; ?>

      <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
          <!--Content-->
          <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

              <!-- Nav tabs -->
              <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i
                      class="fas fa-user mr-1"></i>
                    Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                    Register</a>
                </li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <!--Panel 7-->
                <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                  <!--Body-->
                  <div class="modal-body mb-1">
                    <div class="md-form form-sm mb-5">
                      <i class="fas fa-envelope prefix"></i>
                      <form action="login.php" method="GET">
                        <input type="email" id="modalLRInput10" class="form-control form-control-sm validate"
                          name="email1">
                        <label data-error="wrong" data-success="right" for="modalLRInput10">Email</label>
                    </div>

                    <div class="md-form form-sm mb-4">
                      <i class="fas fa-lock prefix"></i>
                      <input type="password" id="modalLRInput11" class="form-control form-control-sm validate"
                        name="lozinka1">
                      <label data-error="wrong" data-success="right" for="modalLRInput11">Lozinka</label>
                    </div>
                    <div class="text-center mt-2">
                      <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
                    </div>
                  </div>
                  <!--Footer-->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info waves-effect ml-auto"
                      data-dismiss="modal">Zatvori</button>
                  </div>


                  </form>

                </div>
                <!--/.Panel 7-->


                <!--Panel 8-->

                <div class="tab-pane fade" id="panel8" role="tabpanel">

                  <!--Body-->
                  <div class="modal-body">
                    <div class="md-form form-sm mb-5">
                      <i class="fas fa-envelope prefix"></i>
                      <form action="register.php" method="GET">
                        <input type="email" id="modalLRInput12" class="form-control form-control-sm validate"
                          name="email">
                        <label data-error="wrong" data-success="right" for="modalLRInput12">Email</label>
                    </div>

                    <div class="md-form form-sm mb-5">
                      <i class="fas fa-lock prefix"></i>
                      <input type="password" id="modalLRInput13" class="form-control form-control-sm validate"
                        name="lozinka">
                      <label data-error="wrong" data-success="right" for="modalLRInput13">Lozinka</label>
                    </div>

                    <div class="md-form form-sm mb-4">
                      <i class="fas fa-lock prefix"></i>
                      <input type="password" id="modalLRInput14" class="form-control form-control-sm validate"
                        name="lozinka2">
                      <label data-error="wrong" data-success="right" for="modalLRInput14">Ponovite lozinku</label>
                    </div>

                    <div class="text-center form-sm mt-2">
                      <button class="btn btn-info">Registriraj se! <i class="fas fa-sign-in ml-1"></i></button>
                    </div>

                  </div>
                  <!--Footer-->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info waves-effect ml-auto"
                      data-dismiss="modal">Zatvori</button>
                    </form>
                  </div>
                </div>
                <!--/.Panel 8-->


              </div>

            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>
      <!--Modal: Login / Register Form-->

      <div class="text-center">
        <!-- Cart icon with quantity -->
        <a href="kosarica.php" class="cart-icon-link mr-4">
          <i class="fas fa-shopping-cart"></i>
          <span class="cart-quantity badge badge-warning">0</span>
        </a>

        <a class="btn btn-default btn-rounded my-3" href="odjava.php">Odjava</a>
      </div>
    </div>
  </nav>

  <div>
    <h1 style="text-align:center; font-size:7vw; background-color: black; color: white;">
      <div class="waviy">
        <span style="--i:1">M</span>
        <span style="--i:2">E</span>
        <span style="--i:3">N</span>
        <span style="--i:4">I</span>
      </div>
    </h1>

    <?php
    $imeServera = "localhost";
    $username = "root";
    $lozinka = "";
    $imeBaze = "bazaprojekt";

    $conn = new mysqli($imeServera, $username, $lozinka, $imeBaze);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Prvo dohvatite jela
    $sqlJela = "SELECT ID, Naziv, ImageURL FROM `stavkejelovnika` WHERE `IDKategorije`=1";
    $resultJela = $conn->query($sqlJela);

    echo "<h2 class='mt-5'>Jela</h2>";
    displayItems($resultJela);

    // Zatim dohvatite pića
    $sqlPica = "SELECT ID, Naziv, ImageURL FROM `stavkejelovnika` WHERE `IDKategorije`=2";
    $resultPica = $conn->query($sqlPica);

    echo "<h2 class='mt-5'>Pića</h2>";
    displayItems($resultPica);

    function displayItems($result)
    {
      if ($result->num_rows > 0) {
        echo "<div class='row'>"; // Start the row
        while ($row = $result->fetch_assoc()) {
          echo "<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12 menu-item my-2'>";
          echo "<div class='card'>";
          echo "<img src='" . $row['ImageURL'] . "' class='card-img-top' alt='Menu Image'>";
          echo "<div class='card-body'>";
          echo "<h3 class='card-title'>" . $row['Naziv'] . "</h3>";
          echo "<button class='btn btn-warning add-to-cart' data-id='" . $row['ID'] . "' data-name='" . $row['Naziv'] . "' data-quantity='1'><i class='fas fa-shopping-cart'></i> Dodaj u košaricu</button>";
          echo "</div>"; // Close card-body
          echo "</div>"; // Close card
          echo "</div>"; // Close column
        }
        echo "</div>"; // Close the row
      } else {
        echo "Nema rezultata";
      }
    }


    $conn->close();
    ?>


    <div id="footer">
      <footer class="page-footer font-small unique-color-dark">

        <div style="background-color: #6351ce;">
          <div class="container">
            <div class="row py-4 d-flex align-items-center">
            </div>
          </div>
        </div>


        <div class="container text-center text-md-left mt-5">

          <div class="row mt-3">

            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

              <h6 class="text-uppercase font-weight-bold">Credits</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>Maja Musa</p>
              <p> Ana-Marija Čolak </p>
              <p> </p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

              <h6 class="text-uppercase font-weight-bold">Kontakt</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px;">

              <p> <i class="fas fa-envelope mr-3"></i>maja.musa@fsre.sum.ba</p>
              <p> <i class="fas fa-envelope mr-3"></i>anamarija.colak@fsre.sum.ba</p>
              <p>

            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

              <h6 class="text-uppercase font-weight-bold">Korisni linkovi</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 120px;">
              <p>
                <a href="https://www.w3schools.com/" target="_blank">w3schools</a>
              </p>
              <p>
                <a href="https://www.udemy.com/" target="_blank">Udemy</a>
              </p>


            </div>




          </div>


        </div>


        <hr>
        <div id="copy">
          <div class="footer-copyright text-center py-3">© 2023 FSRE
            <p> RWA</p>
          </div>
        </div>

      </footer>
    </div>






    <script src="js.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
      integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
      crossorigin="anonymous"></script>
</body>

</html>