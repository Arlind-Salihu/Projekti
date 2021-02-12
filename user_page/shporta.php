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
			$itemArray = array($productBykodi[0]["kodi"]=>array('name'=>$productBykodi[0]["name"], 'kodi'=>$productBykodi[0]["kodi"], 'sasia'=>$_POST["sasia"], 'qmimi'=>$productBykodi[0]["qmimi"], 'image'=>$productBykodi[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productBykodi[0]["kodi"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productBykodi[0]["kodi"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["sasia"])) {
									$_SESSION["cart_item"][$k]["sasia"] = 0;
								}
								$_SESSION["cart_item"][$k]["sasia"] += $_POST["sasia"];
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
<br><br><br><br>
<div id="shopping-cart">
 <div><b><a href="CheckoutCard.php"><input id="btndetail" type="button" value="Blej produktet nga shporta""btn"></a> </p></div>
  <div class="col-md-4">



<?php
if(isset($_SESSION["cart_item"])){
    $total_sasia = 0;
    $total_qmimi = 0;
?>


<table class="col-md-4"  cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Emri</th>
<th style="text-align:left;">Kodi</th>
<th style="text-align:right;">Sasia</th>
<th style="text-align:right;">Unit qmimi</th>
<th style="text-align:right;">Çmimi</th>

</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_qmimi = $item["sasia"]*$item["qmimi"];
		?>
				<tr>
				<td><img src="../foto/<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["kodi"]; ?></td>
				<td style="text-align:right;"><?php echo $item["sasia"]; ?></td>
				<td  style="text-align:right;"><?php echo " ".$item["qmimi"]; ?></td>
				<td  style="text-align:right;"><?php echo " ". number_format($item_qmimi,2); ?></td>
			<td style="text-align:center;"><a href="shporta.php?action=remove&kodi=<?php echo $item["kodi"]; ?>" class=" fa fa-shopping-cart"> </a></td>
				</tr>
				<?php
				$total_sasia += $item["sasia"];
				$total_qmimi += ($item["qmimi"]*$item["sasia"]);
		}
		?>

<tr>
<td colspan="2" align="right">Totali:</td>
<td align="right"><?php echo $total_sasia; ?></td>
<td align="right" colspan="2"><strong><?php echo " ".number_format($total_qmimi, 2); ?></strong></td>
</tr>
<a id="btnEmpty" type="button"  href="shporta.php?action=empty">Shpraze shportën</a>
</tbody>

</table>
<br>
</div>
<div>
  <?php
} else {
?>
<div class="no-records" style="color:white;">Shporta juaj është e zbrazët</div>
<?php 
}
?>
</div>
</div>
<div id="product-grid">
	<div class="txt-heading" style="color:white;" >Produktet</div>
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
			<div class="product-qmimi"><?php echo "".$product_array[$key]["qmimi"]; ?></div>
			<div class="cart-action"><input type="text" class="product-sasia" name="sasia" value="1" size="2" /><input type="submit" value="Blej produktin" class="btnAddAction" /></div>
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
document.getElementById("blonl").style.background = "green";
</script>
</HTML>