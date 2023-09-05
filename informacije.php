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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../css/mdb.min.css">
  <link rel="stylesheet" href="meni_animacija.css">
  <link rel="stylesheet" href="tehnologije_animacija.css">
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
          <a class="nav-link " href="meni.php">Meni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Informacije</a>
        </li>


      </ul>

      <!--Modal: Login / Register Form-->

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
      <div class="text-center">
        <!-- show only if user is logged in -->
        <?php if (isset($_SESSION['login'])): ?>
          <a class="btn btn-default btn-rounded my-3" href="odjava.php">Odjava</a>
        <?php else: ?>
          <a class="btn btn-default btn-rounded my-3" href="#" data-toggle="modal" data-target="#modalLRForm">Prijava</a>
        <?php endif; ?>
      </div>
    </div>
  </nav>




  <br><br>


  <div id="onama">
    <h2 style="text-align: center;">O nama</h2>

    <div class="container mt-4">
      <div class="row">
        <div class="col-md-6">
          <div class="card mb-4 shadow-sm">
            <img src="slike/maja.png" class="card-img-top img-fluid" alt="slika">
            <div class="card-body">
              <h5 class="card-title">Maja Musa</h5>
              <p class="card-text">22 god. 3. godina Računarstvo FSRE.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Frontend / Backend</small>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4 shadow-sm">
            <img src="slike/anamarija.png" class="card-img-top img-fluid" alt="slika anamarija">
            <div class="card-body">
              <h5 class="card-title">Ana-Marija Čolak</h5>
              <p class="card-text">22 godine student treće godine računarstva.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Frontend / Backend</small>
            </div>
          </div>
        </div>
      </div>
    </div>





  </div>
  <hr>
  <br><br><br>


  <div id="oprojektu" style="padding:20px">

    <div id="citava_animacija">
      <h3 style="padding: 10px; color: black"> Korištene tehnologije: </h3>
      <div id="stage">
        <div id="shape" class="cube">
          <div class="plane">HTML</div>
          <div class="plane">CSS</div>
          <div class="plane">JS</div>
          <div class="plane">SQL</div>
          <div class="plane">PHP</div>
        </div>
      </div>
    </div>
  </div>

  <script> var shape = document.getElementById('shape');

    shape.addEventListener('click', function () {
      this.classList.toggle('ring');
      this.classList.toggle('cube');
    });
  </script>



  <br>
  <p style="padding:20px">U današnje vrijeme, dostava hrane i pića postala je neizostavan dio uspješnog poslovanja
    restorana. Naš cilj je razviti web aplikaciju koja će korisnicima omogućiti jednostavnu i brzu narudžbu hrane.
    Smatramo da trenutno nedostaje adekvatna aplikacija za naručivanje hrane na našem području, stoga vjerujemo da uz
    pomoć naših profesora i asistenata možemo napraviti korisno rješenje.

    Naša vizija je omogućiti korisnicima da u 2023. godini mogu naručiti hranu u samo tri klika putem mobitela, tableta
    ili računala, bez potrebe da zovu na fiksni telefon kako bi obavili narudžbu. Nastojat ćemo pružiti najbolje
    iskustvo korisnicima kroz jednostavno sučelje i intuitivan proces naručivanja.

  </p>
  <p style="padding:20px">Ovaj predmet je do sada najzanimljiviji predmet na fakultetu budući da ima puno praktičnog
    rada, malo učenja teorije i odmah vidimo plodove svoga rada
    tako da se veselimo izazovu i projektu. Ovaj projekt je za nas iznimno zanimljiv jer kombinira praktični rad,
    minimalnu količinu teorije i omogućuje nam da odmah vidimo rezultate svog rada. Veselimo se izazovu i prilici da se
    uključimo u ovaj projekt te se nadamo da ćemo ga uspješno realizirati!</p>
  <br>



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