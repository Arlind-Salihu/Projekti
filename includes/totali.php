<HEAD>
<TITLE>Shporta e thjeshtë PHP</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />

</HEAD>
<BODY>
<div id="shopping-cart">
 <?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1"style="width:100%">
<tbody>
<tr>
<th style="text-align:left;"width="3%">Emri</th>
<th style="text-align:left;"width="2%">Kodi</th>
<th style="text-align:right;" width="2%">Sasia</th>
<th style="text-align:right;" width="5%">Unit Price</th>
<th style="text-align:right;" width="5%">Çmimi</th>

</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo " ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo " ". number_format($item_price,2); ?></td>
<!--				<td style="text-align:center;"><a href="shporta.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>-->
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Totali:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo " ".number_format($total_price, 2); ?></strong></td>
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


</BODY>

</HTML>