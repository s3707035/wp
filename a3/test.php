<!DOCTYPE html>
<html lang='en'>
	  <head>
    <meta charset="utf-8">
    <meta name="Product" content="Product">
      
    <title>cart</title>
    
  </head>
   <body>
    <div class="header"> 
	<nav>
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/index.php">
	<img src='../../media/logo%20(copy).png' alt='Sell My Stuff Logo' height=200 />
		<div class="overlay"></div></a>
		   
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/products.php" style="text-decoration:none">
	<p class="products">PRODUCTS</p></a>
	
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/login.php" style="text-decoration:none">
	<p class="login">CHECKOUT</p></a>
    
	<link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Slabo+27px" rel="stylesheet">
    </nav></div>
	
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
	$item_count=0;
	$max_per_row=1;
	
	foreach($arraykey as $item)
{	 $image_csv=$product[$item]['Img'];
	$itemprice=$product[$item]['Price'];
  $itemqty=$_SESSION['cart'][$item]['qty'];
 	$itemtotal=$itemprice*$itemqty;
 	$itemtotal=number_format($itemtotal,2);	
    $grandtotal+= $itemtotal;
 	$grandtotal= number_format($grandtotal,2);
 

echo "<table>";
echo "<tr>";
    if ($item_count == $max_per_row)
    {	
        echo "<br>";
		echo "<br>";
	 	echo "<br>";
	     $item_count = 0;
    }
    echo "<td>{$product[$item]['Title']}</td></tr>";
 	echo "<tr><td> '<img src='$image_csv'/>' </td><td>{$product[$item]['Description']}</td></tr>";
 	echo "<tr><td></td><td>{$_SESSION['cart'][$item]['oid']} QTY: {$_SESSION['cart'][$item]['qty']}</td>
<td> Price: {$itemtotal}</td>" ;   
 	echo "</tr>";
  	echo "</table>";

 $item_count++;
}

 echo "TOTAL:".$grandtotal;
 
}  
	
else{
	} ?>
   
	 
<footer>
	
      <div class="footers">&copy;<script>
        document.write(new Date().getFullYear());
      </script> Valerie Lok, s3707035 <br><a href='product.txt'>    products spreadsheet</a><br><a href='orders.txt'>orders spreadsheet</a></div>
    </footer>
   
     </body>
    </html>