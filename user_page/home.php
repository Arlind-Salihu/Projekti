<?php include('server.php') ?>
<?php include('../includes/nav_top.php') ?>

<body>

<?php include('../includes/nav_bar.php') ?>
<link href="../stilicss/styleproduct.css" rel="stylesheet">


	<div id="divfill2">
				<center>
		<fieldset>
		<div>
			<legend id="myLegend" style="color: white"><b>Lëvizja Manuale e Produkteve</b></legend>
				
				<div class="row">
						<div class="column1">
						<?php
						$db_handle->runQuery("SELECT * FROM tblprodukti ORDER BY id ASC");
  //total array size
  $total = sizeof($images)-1;

  //current position in the array      
  $k = 0;                      

  //displays the current image
  if(isset($_GET['pid'])){
      $k = $_GET['pid'];
      echo $images[$k]; 
    }?>
						<?php echo '<br><a href="index.php?pid='.prevNext($k, $total, -1).'">', $button_left, "</a>";
echo '    <a href="index.php?pid='.prevNext($k, $total, 1).'">', $button_right, "</a>";

function prevNext($k, $t, $d) {
    return ($r=($k+$d)%$t)>=0?$r:$r+=$t;	
}
?>
						</div>
				</div>
				
			</center>
		</fieldset>
		</div>

	</div>
	</div>
</br>


	<!--Ketu fillon footer-->
<?php include('../includes/footer.php') ?>
</body>
<script>
document.getElementById("home").style.background = "green";
</script>
</html>