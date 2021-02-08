<?php
  include 'action.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Fillimi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
<div class="header">
	<h2>Fillimi i faqes</h2>
</div>
<div class="content">
  	<!-- mesazh njoftimi -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- hyrë në informacionin e përdoruesit -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Mirë se vjen:  <strong><?php echo $_SESSION['username']; ?></strong>
	
    <?php endif ?>

	 <a href="http://localhost/Depoja/index.php? logout='1'" style="color: red;">Vazhdo - Puna e mbar</a> </p>
	 </center>
</div>
		
</body>
</html>