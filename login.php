<?php 

session_start();
include 'connect.php';



?>
<!DOCTYPE html>
<html>

<head>
	<title>Regjistrimi</title>
	<link rel="icon" href="foto/logo2.jpg" type="image/x-icon">
	<link rel="stylesheet" href="css/regjistrohu.css">
</head>

<body>
	<div id="all">
		<!-- kodi per te gjith div-in -->
		<div id="main">
			<h2 id="rtitulli">LogIn</h2>
			<!-- div-i Krijo llogarine-->
			<div class="container">
				  <form method="post" action="login.php">

					  <form method="post" action="regjistrimi.php">
					  
					<label for="name">Emri:</label>
					<input type="text" placeholder="Shkruani emrin" name="username" id="t1" autocomplete="off"/>
	
					<label for="psw">Fjalëkalimi:</label>
					<input type="password" placeholder="Shkruani fjalëkalimin" name="password" id="t4" class="tb" autocomplete="new-password" />

				<input type="submit" value="Identifikohuni"name="login_user" class="btn"  />
			
        <p>Keni një llogari ? Nëse nuk keni një llogari, hapeni duke klikuar <a id="linku" href="Regjistrohu.php">KETU!</a></p>
	



				</form>
				</br>
			</div>

			<!-- div-i krijo llogarine perfundon ketu -->
		</div>
		<!-- div-i kryesor perfundon ketu -->
		<div id="flex2">
			<img src="logo2.png" alt="logo" width="400px" height="300px">
		</div>
	</div>
</body>
 Admin
<script>

	function registration() {

		var name = document.getElementById("t1").value;
		var email = document.getElementById("t2").value;
		var uname = document.getElementById("t3").value;
		var pwd = document.getElementById("t4").value;
		var cpwd = document.getElementById("t5").value;



		//email id expression code
		var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
		var letters = /^[A-Za-z]+$/;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if (name == '') {
			alert('Ju lutemi shkruani emrin tuaj');
			document.getElementById("t1").style.color = "black"


		}
		else if (!letters.test(name)) {

			alert('Fusha e emrit kërkonte vetëm karaktere alfabeti');
			document.getElementById("t1").value = placeholder = "";

		}
		else if (email == '') {
			alert('Ju lutemi shkruani email-in tuaj të përdoruesit');
		}
		else if (!filter.test(email)) {
			alert('Email i pavlefshem');

			document.getElementById("t2").value = placeholder = "";
		}
		else if (uname == '') {
			alert('Ju lutemi shkruani emrin e përdoruesit.');

		}
		else if (!letters.test(uname)) {

			alert('Fusha e Perdoruesit kërkonte vetëm karaktere alfabeti');
			document.getElementById("t3").value = placeholder = "";
		}
		else if (!letters.test(uname)) {
			alert('Fusha e emrit të përdoruesit kërkohet të ketë vetëm karaktere alfabeti');
		}
		else if (pwd == '') {
			alert('Ju lutemi shkruani fjalëkalimin');
		}
		else if (pwd == '') {
			alert('E nevojshme te plotesohet ');
		}
		else if (document.getElementById("t4").value.length < 6) {
			alert('Fjalkalimi duhet permbaj së paku: 6 karaktere');
			document.getElementById("t4").value = placeholder = "";
		}

		else if (cpwd == '') {
			alert('Plotso fjalkalimin e perseritur');
		}


		else if (pwd !== cpwd) {

			document.getElementById("t5").value = "";
			document.getElementById("t5").style.backgroundColor = "yellow";

			alert('Fjalkalimi nuk përputhet Ju lutem  perserite');

		}




		else if (pwd === cpwd) {
			window.open("LogIn.php")
			alert('Tani jeni të regjistruar ');
		}


	}





</script>

</html>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = $_POST['username'];
    $password= sha1($_POST['password']);

    $stmt= $conn->prepare("SELECT * FROM users WHERE username =? AND password = ? LIMIT 1");
    $stmt->execute(array($username, $password));
    $checkuser = $stmt->rowCount();
    $user = $stmt->fetch();

    if($checkuser > 0){
        $_SESSION['user']= $user['username'];
        $_SESSION['type']= $user['type'];
        header('location: http://localhost/A_V_projekti/admin/azhuro_perdoruesit.php');
	}
	else if($checkuser == 0){
		$_SESSION['user']= $user['username'];
		$_SESSION['type']= $user['type'];
		
		header('location: home.php');
	}
}
?>