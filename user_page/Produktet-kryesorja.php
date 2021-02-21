<?php include('server.php') ?>
<?php include('../includes/nav_top.php') ?>
<body>
<?php include('../includes/nav_bar.php') ?>


<?php

require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["sasia"])) {

	     $productBykodi = $db_handle->runQuery("SELECT * FROM tblprodukti WHERE kodi='" . $_GET["kodi"] . "'");
			$itemArray = array($productBykodi[0]["kodi"]=>array('emriProdukti'=>$productBykodi[0]["emriProdukti"], 'kodi'=>$productBykodi[0]["kodi"], 'sasia'=>$_POST["sasia"], 'qmimi'=>$productBykodi[0]["price"], 'image'=>$productBykodi[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productBykodi[0]["kodi"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productBykodi[0]["kodi"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["sasia"])) {
									$_SESSION["cart_item"][$k]["sasia"] = 0;
								}
								$_SESSION["cart_item"][$k]["sasia"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["kodi"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<TITLE>Shporta e thjeshtë PHP</TITLE>
<link href="../stilicss/styleproduct.css" rel="stylesheet">
<link href="../stilicss/style_shporta.css" type="text/css" rel="stylesheet" />
</HEAD>

<style>

</style>


<BODY>




<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>



<br>
</div>
<div>
  <?php
} else {
?>

<?php 
}
?>
</div>
</div>
<div id="product-grid">
<br><br>
	<div class="txt-heading" style="color:white; font-size:30px" >Produktet</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblprodukti ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="shporta.php?action=add&kodi=<?php echo $product_array[$key]["kodi"]; ?>">
			<div class="product-image"><img src="../foto/<?php echo $product_array[$key]["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["emriProdukti"]; ?></div>
			<div class="product-price"><?php echo "".$product_array[$key]["qmimi"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="sasia" value="1" size="2" /><input type="submit" value="Blej produktin" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	?>
</div>

</BODY>
<script>
document.getElementById("prod").style.background = "green";
</script>
</HTML>