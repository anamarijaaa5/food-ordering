<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href =  "slike/fsre.jpg" type = "image/x-icon"> 
    <title>Košarica</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">DOSTAVA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
	<li class="nav-item">
            <a class="nav-link active" href="meni.php">Meni</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="informacije.php">Informacije</a>
        </li>
                                   
               
        </ul>
        
        <!--Modal: Login / Register Form-->

<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
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
                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate" name="email1">
                <label data-error="wrong" data-success="right" for="modalLRInput10">Email</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" name="lozinka1">
                <label data-error="wrong" data-success="right" for="modalLRInput11">Lozinka</label>
              </div>
              <div class="text-center mt-2">
                <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Zatvori</button>
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
                <input type="email" id="modalLRInput12" class="form-control form-control-sm validate" name="email">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Email</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate" name="lozinka">
                <label data-error="wrong" data-success="right" for="modalLRInput13">Lozinka</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput14" class="form-control form-control-sm validate" name="lozinka2">
                <label data-error="wrong" data-success="right" for="modalLRInput14">Ponovite lozinku</label>
              </div>

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info">Registriraj se! <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </div>
            <!--Footer-->
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Zatvori</button>
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
  <a href="kosarica.php" class="cart-icon-link mr-4">
    <i class="fas fa-shopping-cart"></i> 
    <span class="cart-quantity badge badge-warning">0</span>
  </a>
  
  <a class="btn btn-default btn-rounded my-3" href="odjava.php">Odjava</a>
</div>
      </div>
    </nav>

<!-- Container za proizvode -->
<div class="container mt-5">
    <h2 class="mb-4">Košarica (<span id="numOfItemsInCart">0</span>)</h2>
    <ul class="list-group" id="cartList">
        <!-- Stavke iz košarice će biti dodane ovdje -->
    </ul>

    <!-- Button za naručivanje -->
    <div class="mt-4">
        <button class="btn btn-primary" id="orderButton">Naruči</button>
    </div>
</div>

<script src="cart.js"></script>
</body>
</html>
