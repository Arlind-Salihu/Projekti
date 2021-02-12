<?
include 'server.php';

// LOGIN 
if (isset($_POST['login_user'])) {
  $emri = mysqli_real_escape_string($db, $_POST['emri']);
  $flk = mysqli_real_escape_string($db, $_POST['flk']);
  // $roli = mysqli_real_escape_string($db, $_POST['roli']);

  if (empty($emri)&& empty($flk)) {
  	array_push($errors, "Kërkohet përdoruesi dhe fjalëkalimi");
  }
     if (count($errors) == 0) {
  	$query = mysqli_query($db,"SELECT * FROM perdoruesi WHERE emri='$emri' AND flk='$flk'");
    $dbResult=mysqli_fetch_assoc($query);
    $count=mysqli_num_rows($query);

    if($count==1){
      $_SESSION['perodruesi']=array(
   'emri'=>$row['emri'],
   'flk'=>$row['flk'],
   'roli'=>$row['roli']
   );
    $roli=$_SESSION['perdoruesi']['roli'];
    }
  	if ($count==1 && $roli==0) {
  	  $_SESSION['emri'] = $emri;
  	  $_SESSION['success'] = "Tani jeni identifikuar";
  	  header('location: home.php');
  	}else if($count==1 && $roli==1){
      $_SESSION['emri'] = $emri;
  	  $_SESSION['success'] = "Tani jeni identifikuar";
      header('location: admin/azhuro_perdoruesit.php');
    }else {
  		array_push($errors, "Kombinimi i gabuar i emrit të përdoruesit / fjalëkalimit");
  	}
  }
}
// LOGIN USER

/*if (isset($_POST['login_user'])) {
  $emri = mysqli_real_escape_string($db, $_POST['emri']);
  $flk = mysqli_real_escape_string($db, $_POST['flk']);
  $roli = mysqli_real_escape_string($db, $_POST['roli']);

  if (empty($emri)) {
  	array_push($errors, "Kërkohet përdoruesi");
  }
  if (empty($flk)) {
  	array_push($errors, "Kërkohet fjalëkalimi");
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($errors) == 0) {
    $emri = $_POST['emri'];
    $flk= sha1($_POST['flk']);
    $roli= $_POST['roli'];

    $stmt= "SELECT * FROM perdoruesi WHERE emri =? AND flk = ? AND roli=?";
    $result = mysqli_query($db, $stmt);
    $user = mysqli_fetch_assoc($result);
  
    
  	if ($result == 0) {
  	  $_SESSION['emri'] = $emri['emri'];
      $_SESSION['roli']= $user['roli'];
  	  $_SESSION['success'] = "Tani jeni identifikuar";
  	  header("Location: http://localhost/A_V_projekti/Home.php");
    }
    else if ($result == 1) {
  	$_SESSION['emri'] = $emri['emri'];
    $_SESSION['roli']= $user['roli'];
  	$_SESSION['success'] = "Tani jeni identifikuar";
  	header("Location: http://localhost/A_V_projekti/admin/azhuro_perdoruesit.php");
  	}else {
  		array_push($errors, "Kombinimi i gabuar i emrit të përdoruesit / fjalëkalimit");
  	}
  }
}*/
?>