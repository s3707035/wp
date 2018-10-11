	<?php session_start(); 
include_once('tools.php'); 

topModule('cart');
menus('product', 'products', 'checkout', 'PRODUCT', 'PRODUCTS', 'CHECKOUT')?>





</nav></div>

<div><h2 class="title">CART</h2></div>
	   <div class="cancel">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
		<button type="submit" class="button" name="cancel" value=""><img src="../../media/cancel.png" alt="Submit" style="height:60px"/></button></form></div>
	
<?php
	


 if (isset($_POST['cancel'])) {
  unset($_SESSION['cart']);
  header("Location: https://titan.csit.rmit.edu.au/~s3707035/wp/a3/products.php");
			 exit();}
	   
	  	  $fp =fopen('product.txt', 'r');
flock($fp, LOCK_SH);
	if (($headings = fgetcsv($fp, 0, "\t")) !== false){
		while ($cells = fgetcsv($fp, 0, "\t") ) {
			for ($x=1; $x<count($cells); $x++)
				$product[$cells[0]][$headings[$x]]=$cells[$x];
			}
		flock($fp, LOCK_UN);
	fclose($fp);
	}
	   
if(empty($_SESSION['cart'])){ 
		   echo "<div><h2 class='empty'>CART IS EMPTY</h2></div>";
	   }
	   

	   
else{
	$CART= $_SESSION['cart'];
    $arraykey= array_keys($CART);
	$grandtotal=0;
   
	foreach($arraykey as $item)
{	 $image_csv=$product[$item]['Img'];
	$itemprice=$product[$item]['Price'];
  $itemqty=$_SESSION['cart'][$item]['qty'];
 	$itemtotal1=$itemprice*$itemqty;
 	$itemtotal=number_format($itemtotal1,2);
 $_SESSION['cart'][$item]['unitprice']=$itemprice;
 $_SESSION['cart'][$item]['total']=$itemtotal;
    $grandtotal+= $itemtotal1;
 	echo "<table class='test'><div>";
 
 echo "<tr><td></td><td class='productss'>{$product[$item]['Title']}</td>
   <td>Quanity: {$_SESSION['cart'][$item]['qty']}</td></tr>";
 	echo "<tr><td> <img src='$image_csv'/> </td><td> {$product[$item]['Description']}</td></tr>";
 	echo "<tr><td></td><td>Type: {$_SESSION['cart'][$item]['oid']}</td>
<td class='price'> Price: $ {$itemtotal}</td>" ;   
  echo "</table></div>";
 }
$grandtotal= number_format($grandtotal,2);
$finaltotal= 'Final Total: $';
echo "<div class='exptest'>$finaltotal$grandtotal</div>";


?>	   
	   

<div class="checkout">
	<button id="checkout" class="button" name="checkout" onclick="checkout()" value=""><img src="../../media/checkout.png" alt="Submit" style="height:100px"/></button></div>
 <?php } ?>
   
	 </body>
	
	<?php bottomModule();	
	 /*	 fdebugmodule(); */?>
 

	
    </html>

	 
