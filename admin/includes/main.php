<div id="main">
  <h2 style=" text-align: center; color: white;">Identifikohuni</h2>
<div class="container">
   <form method="post" action="login.php">
    <?php include('errors.php'); ?>
      <!-- <label for="name">Emri:</label>
        <input type="text" placeholder="Shkruani emrin" id="t1" onfocus="this.value=''" required />-->
<label for="name">Emri:</label>
					<input type="text" placeholder="Shkruani emrin" name="emriPrd" id="t1" onfocus="this.value=''" value="<?php echo $emri;?>" required />
       <label for="e-mail">E-mail:</label>
					<input type="text" placeholder="Shkruani E-mail" name="email" id="t2" class="tb" value="<?php echo $email; ?>" required  />
        <label for="psw">Fjalëkalimi:</label>
				<input type="password" placeholder="Shkruani fjalëkalimin" name="password" id="t4" required class="tb" />
				
			<!--	<label for="psw">Fjalëkalimi:</label>
					<input type="password" placeholder="Shkruani fjalëkalimin" name="password" id="t2" required class="tb" />-->
<br><br>
        <input type="submit" value="Identifikohuni" name="login_user" class="btn"  />
        <p>Keni një llogari ? Nëse nuk keni një llogari, hapeni duke klikuar <a id="linku" href="Regjistrohu.php"> KETU!</a></p>
		
    </form>
</div>
<div id="flex2">
  <img src="foto/logo2.jpg" alt="logo" width="400px" height="300px">
</div>
</div>