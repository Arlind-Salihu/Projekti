<?php
    require '../user_page/server.php';
 
    
// LOGIN USER
if (isset($_POST['login_user'])) {
  $emri = mysqli_real_escape_string($db, $_POST['emri']);
  $flk = mysqli_real_escape_string($db, $_POST['flk']);

  if (empty($emri)) {
  	array_push($errors, "Kërkohet përdoruesi");
  }
  if (empty($flk)) {
  	array_push($errors, "Kërkohet fjalëkalimi");
  }

  if (count($errors) == 0) {
  	$flk = md5($flk);
  	$query = "SELECT * FROM perdoruesi WHERE emri='$emri' AND flk='$flk' AND roli='User'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['emri'] = $emri;
  	  $_SESSION['success'] = "Tani jeni identifikuar si User";
  	  header('location: ../user_page/home.php');
  	}

    $query1 = "SELECT * FROM perdoruesi WHERE emri='$emri' AND flk='$flk' AND roli='Admin'";
  	$results1 = mysqli_query($db, $query1);
  	if (mysqli_num_rows($results1) == 1) {
  	  $_SESSION['emri'] = $emri;
  	  $_SESSION['success'] = "Tani jeni identifikuar si Admin";
  	  header('location: ../admin/azhuro_perdoruesit.php');
  	}
  }
}
?>