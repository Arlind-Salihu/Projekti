<?php include ('../user_page/server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Regjistrimi</title>
	<link rel="icon" href="foto/logo2.jpg" type="image/x-icon">
	<link rel="stylesheet" href="../stilicss/regjistrohu.css">
</head>

<body>
	<div id="all">
		<!-- kodi per te gjith div-in -->
		<div id="main">
			<h2 id="rtitulli">Krijoni llogarinë tuaj</h2>
			<!-- div-i Krijo llogarine-->
			<div class="container">
				  <form method="post" action="regjistrohu.php">
					<?php include('../user_page/errors.php'); ?>
					  <form method="post" action="regjistrohu.php">
					
					<label for="name">Emri:</label>
					<input type="text" placeholder="Shkruani emrin" name="emri" id="t1" onfocus="this.value=''" value="<?php echo $emri;?>" required />

					<label for="usrname">Emri i përdoruesit:</label>
					<input type="text" placeholder="Shkruani emrin e përdoruesit" name="perdoruesi" id="t3" required  />

					<label for="e-mail">E-mail:</label>
					<input type="text" placeholder="Shkruani E-mail" name="email" id="t2" class="tb" value="<?php echo $email; ?>" required  />

					
					<label for="psw">Fjalëkalimi:</label>
					<input type="password" placeholder="Shkruani fjalëkalimin" name="flk_1" id="t4" class="tb" required  />

					<label for="c-psw"> Përserite Fjalëkalimi:</label>
					<input type="password" placeholder="Perseriteni fjalëkalimin" name="flk_2" id="t5" class="tb" required  />
                    <!--<button type="submit" class="btn" name="reg_user">Regjistrohu</button>-->
					
					<input type="submit" name="reg_user"value="Krijo llogarinë" class="btn" onclick="registration()"/>
					<p>Keni një llogari ? Nëse keni një llogari, identifikohuni duke klikuar <a id="linku" href="login.php">KETU!</a></p>




				</form>
				</br>
			</div>

			<!-- div-i krijo llogarine perfundon ketu -->
		</div>
		<!-- div-i kryesor perfundon ketu -->
		<div id="flex2">
			<img src="../foto/logo2.jpg" alt="logo" width="400px" height="300px">
		</div>
	</div>
</body>

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
