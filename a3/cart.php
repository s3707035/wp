<!DOCTYPE html>
<html lang='en'>
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
	print_r($nextOID);
	print_r($currentOID);

	if($OID==$nextOID || $OID==$currentOID && $QTY>=1 && $isvalid==1)
	{$priceforsub = $product[$id]['Price'];
 		$price = $priceforsub*$QTY;
  	
	   
		
	
  $_SESSION['cart'][$id]['oid'] = $OID;
  $_SESSION['cart'][$id]['qty'] = $QTY;
	

		
		}}
		$image_csv=$product[$id]['Img'];
/*	else{print_r("NOT WORK else statemet");
	header("Location: https://titan.csit.rmit.edu.au/~s3707035/wp/a3/products.php"); 
exit()}*/
	?>
	
  <head>
    <meta charset="utf-8">
    <meta name="Product" content="Product">
      
    <title>cart</title>
    
   <link id='products' type="text/css" rel="stylesheet" href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/css/cart.css"></head>
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
	
   
    <main>
    <table id="maintable">
	<tr>
	<td> <p class="first"><?php echo $product[$id]['Title'] ?></p>
		 <p class="price"><?php echo $OID."<br>";?>QTY:   <?php echo $QTY. "&nbsp; &nbsp; &nbsp;". '$'.$price ?></p>
<div class="overlayglamp"><img src="<?php echo $image_csv;?>"/></div>
		
		<form action='https://titan.csit.rmit.edu.au/~s3707035/wp/a3/cart.php' method='post'>
  
         <button type="submit" class="buybutton"><img src="../../media/cart.png" alt="Submit" style="height:80px"/></button>
	
<script>
function plusFunction() {
    document.getElementById("numberid").stepUp(1);
    var y= document.getElementById("numberid");
	var z= y.value;
	var p= '<?php echo $priceforsub ;?>';
	var total= z*p;
     total =total.toFixed(2);
	document.getElementById("subtotal").innerHTML= "$" + total;}


function minusFunction() {
    document.getElementById("numberid").stepDown(1);
    var y= document.getElementById("numberid");
	var z= y.value;
	var p= '<?php echo $priceforsub ;?>';
	var total= (z*p);
	total =total.toFixed(2);
	document.getElementById("subtotal").innerHTML= "$" + total;}
	

	  
</script>
</form>

        
		</tr>
		</table>
		</main>
	

	
	 
<footer>
      <div class="footers">&copy;<script>
        document.write(new Date().getFullYear());
      </script> Valerie Lok, s3707035 <br><a href='product.txt'>    products spreadsheet</a><br><a href='orders.txt'>orders spreadsheet</a></div>
    </footer>
   
     </body>
    </html>
   
   
