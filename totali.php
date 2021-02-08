<?php include('server.php') ?>

<body>



<?php
//session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["sasia"])) {

	     $productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'sasia'=>$_POST["sasia"], 'qmimi'=>$productByCode[0]["qmimi"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
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
					if($_GET["code"] == $k)
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
<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>


<BODY>

<div id="shopping-cart">
 

<?php
if(isset($_SESSION["cart_item"])){
    $total_sasia = 0;
    $total_qmimi = 0;
?>	
<table class="tbl-cart" cellpadding="5" cellspacing="0.5">
<tbody>
<tr>
<th style="text-align:left;">Emri</th>
<th style="text-align:left;">Kodi</th>
<th style="text-align:right;" width="5%">Sasia</th>
<th style="text-align:right;" width="10%">Unit qmimi</th>
<th style="text-align:right;" width="10%">Çmimi</th>
<th style="text-align:center;" width="5%">Fshie</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_qmimi = $item["sasia"]*$item["qmimi"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["kodi"]; ?></td>
				<td style="text-align:right;"><?php echo $item["sasia"]; ?></td>
				<td  style="text-align:right;"><?php echo " ".$item["qmimi"]; ?></td>
				<td  style="text-align:right;"><?php echo " ". number_format($item_qmimi,2); ?></td>
			<!--	<td style="text-align:center;"><a href="shporta.php?action=remove&code=<?php echo $item["kodi"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>-->
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
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records" style="color:white;">Shporta juaj është e zbrazët</div>
<?php 
}
?>
</div>



</BODY>

</HTML>