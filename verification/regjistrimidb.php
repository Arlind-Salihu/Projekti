<?php
 include '../user_page/server.php';

// Regjistro përdoruesin
if (isset($_POST['reg_user'])) {
  // marrin të gjitha vlerat e hyrjes nga formulari
  $emri = mysqli_real_escape_string($db, $_POST['emri']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $flk_1= mysqli_real_escape_string($db, $_POST['flk_1']);
  $flk_2 = mysqli_real_escape_string($db, $_POST['flk_2']);

  // Validimi i formularit: sigurohuni që forma të jetë e mbushur si duhet ...
   // duke shtuar (array_push ()) gabimin përkatës në vargun $ gabime
  if (empty($emri)) { array_push($errors, "Kërkohet përdoruesi"); }
  if (empty($email)) { array_push($errors, "Kërkohet email"); }
  if (empty($flk_1)) { array_push($errors, "Kërkohet fjalëkalimi/gabim"); }
  if ($flk_1 != $flk_2) {
	array_push($errors, "Të dy fjalëkalimet nuk përputhen");
  }

 // së pari kontrolloni bazën e të dhënave për tu siguruar
   // një përdorues nuk ekziston tashmë me të njëjtin emër përdoruesi dhe / ose email
  $user_check_query = "SELECT * FROM perdoruesi WHERE emri='$emri' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // nëse përdoruesi ekziston
    if ($user['emri'] === $emri) {
      array_push($errors, "Emri i  tashmë ekziston");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Emaili ekziston");
    }
  }

// Në fund, regjistroni përdoruesin nëse nuk ka gabime në formë
  if (count($errors) == 0) {
  	$flk = md5($flk_2);// kriptoni fjalëkalimin para se ta ruani në bazën e të dhënave

  	$query = "INSERT INTO perdoruesi (emri, email, flk) 
  			  VALUES('$emri', '$email', '$flk')";
  	mysqli_query($db, $query);
  	$_SESSION['emri'] = $emri;
  	$_SESSION['success'] = "Tani jeni identifikuar";

  }
}
?>