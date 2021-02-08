<?php
  include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Depoja</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Depoja</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="http://localhost/registration/regjistrimi/home.php">Kthehu ne fillim</a>
        </li>
      </ul>
    </div>
   
	   <li class="nav-item">
          <a class="btn btn-primary" href="index.php">Mbrapa</a>
        </li>
	  
  </nav>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 mt-2 bg-info p-4 rounded">
        <h2 class="bg-light p-2 rounded text-center text-dark">ID : <?= $vid; ?></h2>
        <div class="text-center">
       
		 <img src="<?= $row['image']; ?>" class="cart-item-image" width="300" height="300" >
        </div>
        <h4 class="text-light">Emri : <?= $vname; ?></h4>
        <h4 class="text-light">Kodi : <?= $vcode; ?></h4>
        <h4 class="text-light">Qmimi : <?= $vprice; ?></h4>
		<h4 class="text-light">Sasia : <?= $sasia; ?></h4>
		
       
	   
      </div>
    </div>
  </div>
  
 
</body>

</html>