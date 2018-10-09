<!DOCTYPE html>
<html lang='en'>
	  <head>
    <meta charset="utf-8">
    <meta name="cart" content="cart">
      
    <title>cart</title>
     <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Slabo+27px" type="text/css"  rel="stylesheet" media="screen">
     <link id='product' type="text/css" rel="stylesheet" href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/css/cart.css">
		
  </head>
   <body>
    <div class="header"> 
	<nav>
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/index.php">
	<img src='../../media/logo%20(copy).png' alt='Sell My Stuff Logo' height=200 />
		<div class="overlay"></div></a>
		   
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/products.php" style="text-decoration:none">
	<p class="products">PRODUCTS</p></a>
	
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/checkout.php" style="text-decoration:none">
	<p class="login">CHECKOUT</p></a>
    
  </nav></div>
	 <div><h2 class="title">CART</h2></div>
	   <div class="cancel">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
		<button type="submit" class="button" name="cancel" value=""><img src="../../media/cancel.png" alt="Submit" style="height:60px"/></button></form></div>
	
	<?php session_start(); 
	  	
if (isset($_POST['add'], $_POST['id'], $_POST['qty'], $_POST['oid'])) {
		$ADD =$_POST['add'];
		$id =$_POST['id'];
		$QTY =$_POST['qty'];
		$OID =$_POST['oid'];
		
	
	$fp =fopen('product.txt', 'r');
	if (($headings = fgetcsv($fp, 0, "\t")) !== false){
		while ($cells = fgetcsv($fp, 0, "\t") ) {
			for ($x=1; $x<count($cells); $x++)
				$product[$cells[0]][$headings[$x]]=$cells[$x];
	
			}
	fclose($fp);
	}
$isvalid= array_key_exists($id,$product); 
	$keys = array_keys($product);
	$nextid= $keys[array_search($id,$keys)+1];
	$nextOID=$product[$nextid]['OID'];
	$currentOID=$product[$id]['OID'];
	
if($OID==$nextOID || $OID==$currentOID && $QTY>=1 && $isvalid==1)
	{$priceforsub = $product[$id]['Price'];
 		$price = $priceforsub*$QTY;
  $_SESSION['cart'][$id]['oid'] = $OID;
  $_SESSION['cart'][$id]['qty'] = $QTY;
			
		}
 $CART=$_SESSION['cart'];
	$arraykey= array_keys($CART);
	$grandtotal=0;
	
	
	foreach($arraykey as $item)
{	 $image_csv=$product[$item]['Img'];
	$itemprice=$product[$item]['Price'];
  $itemqty=$_SESSION['cart'][$item]['qty'];
 	$itemtotal1=$itemprice*$itemqty;
 	$itemtotal=number_format($itemtotal1,2);	
    $grandtotal+= $itemtotal1;
 	echo "<table><div>";
 
 echo "<tr><td></td><td>{$product[$item]['Title']}</td>
   <td>Quanity: {$_SESSION['cart'][$item]['qty']}</td></tr>";
 	echo "<tr><td> <img src='$image_csv'/> </td><td> {$product[$item]['Description']}</td></tr>";
 	echo "<tr><td></td><td>Type: {$_SESSION['cart'][$item]['oid']}</td>
<td> Price: $ {$itemtotal}</td>" ;   
  echo "</table></div>";
 }
$grandtotal= number_format($grandtotal,2);
$finaltotal= 'Final Total: $';
echo "<div style='margin-left: 1000px;'>";
echo $finaltotal.$grandtotal;
echo "</div>";
}
	     
 if (isset($_POST['cancel'])) {
  unset($_SESSION['cart']);
  header("Location: https://titan.csit.rmit.edu.au/~s3707035/wp/a3/products.php");
			 exit();}?>
	   

<div class="checkout">
	<button id="checkout" class="button" name="checkout" value=""><img src="../../media/checkout.png" alt="Submit" style="height:100px"/></button></div>

<? php}  
	
else{
	header("Location: https://titan.csit.rmit.edu.au/~s3707035/wp/a3/products.php"); 
exit();} ?>
   
	 </body>
<footer>
	
      <div class="footers">&copy;<script>
        document.write(new Date().getFullYear());
      </script> Valerie Lok, s3707035 <br><a href='product.txt'>    products spreadsheet</a><br><a href='orders.txt'>orders spreadsheet</a></div>
    </footer>
 
<script type="text/javascript">
    document.getElementById("checkout").onclick = function () {
        location.href = "https://titan.csit.rmit.edu.au/~s3707035/wp/a3/checkout.php";
    };
	
</script>
	
    </html>

	 
