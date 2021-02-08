<?php include('includes/nav_top.php') ?>

<body>

<?php include('includes/nav_bar.php') ?>
	<div id="divfill2">
				<center>
		<fieldset>
		<div>
			<legend id="myLegend" style="color: white"><b>Lëvizja Manuale e Produkteve</b></legend>
				
				<div class="row">
						<div class="column1">
							<button class="button_majtas " onclick="plusSlides(-1, 0)">&#10094;</button>
						</div>
							<div class="column2">

								<div class=" wdisplay-container">

									<img class="mySlides" src="foto/headphones.png" alt="headphones" style="width:400px"
										style="height: 20px;">
									<img class="mySlides" src="foto/laptop.png" alt="laptop" style="width:400px"
										style="height: 20px;">
									
									<img class="mySlides" src="foto/applewatch.png" alt="applewatch" style="width:400px"
										style="height: 20px;">
								</div>
							</div>
						<div class="column3">

						<button class="button_djathtas " onclick="plusSlides(1, 0)">&#10095;</button>
						</div>
				</div>
			</center>
		</fieldset>
		</div>			
	</div>
	</div>
</br>


	<!--Ketu fillon footer-->
<?php include('includes/footer.php') ?>
</body>
<script>
document.getElementById("home").style.background = "green";
</script>
</html>