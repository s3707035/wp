<?php session_start(); 
include_once('tools.php'); 
topModule('product');
menus('products', 'cart', 'checkout', 'PRODUCTS', 'CART', 'CHECKOUT')?>
	
</nav></div>
<?php
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
	   
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (isset($_POST['add'], $_POST['id'], $_POST['qty'], $_POST['oid'])) {
		$ADD =$_POST['add'];
	$id =$_POST['id'];
	$QTY =$_POST['qty'];
	$OID =$_POST['oid'];}
	
	$isvalid= array_key_exists($id,$product); 
	$keys = array_keys($product);
	$nextid= $keys[array_search($id,$keys)+1];
	$nextOID=$product[$nextid]['OID'];
	$currentOID=$product[$id]['OID'];
	
if($OID==$nextOID || $OID==$currentOID && $QTY>=1 && $isvalid==1)
	{$priceforsub = $product[$id]['Price'];
 		$price = $priceforsub*$QTY;
	  $id =$_POST['id'];

  $_SESSION['cart'][$id]['pid'] = $id;
  $_SESSION['cart'][$id]['oid'] = $OID;
  $_SESSION['cart'][$id]['qty'] = $QTY;
			}
	
header("Location: https://titan.csit.rmit.edu.au/~s3707035/wp/a3/cart.php");
	exit();}   


	 $item= $_GET['id'];
	   $isvalid= array_key_exists($item,$product); 

if (!isset($_GET['id']) &&($isvalid!==true))
{
header("Location: https://titan.csit.rmit.edu.au/~s3707035/wp/a3/products.php"); 
exit();}
 

	else{
		$image_csv=$product[$item]['Img'];
		$priceforsub=$product[$item]['Price'];
	    $search = $item;
    $keys = array_keys($product);
    $nextid= $keys[array_search($search,$keys)+1];
	}
?>

<main>
    <table id="maintable">
	<tr>
	<td> <p class="first"><?php echo $product[$item]['Title'] ?></p>
		<p class="body"><?php echo $product[$item]['Description'] ?></p>
		 <p class="price">$<?php echo $product[$item]['Price'] ?></p>

		
	   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  	
					
 		<input type="hidden" id="product ID" name="id" value="<?php echo $item ?>"><br>
    
  		<select name='oid' id="option" required>
  		<option selected='true' value="<?php echo $product[$item]['Option'] ?>"><?php echo $product[$item]['Option'] ?></option>
  		<option value="<?php echo $product[$nextid]['Option'] ?>"><?php echo $product[$nextid]['Option'] ?></option></select><br>

		
		<p class="quanity">Quanity</p>
		<div class="plusminusbutton">
		<button class="minusbutton" type="button" name="minusbutton">
        <img src="../../media/downarrow.png" alt="" height=30px onclick="minusFunction()"/></button>
			
     	<input type="hidden" id="subtots" value="<?php echo $priceforsub?>"> 
			
     	<input type="number" id="numberid" placeholder="0" name="qty" value=' ' min="1" max="1000" oninput="testFunction()" required> 

        <button class="plusbutton" type="button" name="plusbutton">
        <img src="../../media/uparrow.png" alt="" height=30px onclick="plusFunction()"/></button></div><a id="subtotal"></a>
    
        <button type="submit" class="buybutton" name="add"  value="1"><img src="../../media/cart.png" alt="Submit" style="height:80px"/></button>
	

</form>
</td>
	
		<td>
        <div class="overlayglamp"><img src="<?php echo $image_csv;?>"/></div></td>
		</tr>
		</table>
		</main>
	

	
	 

	<?php bottomModule();	
	 	 /*fdebugmodule()*/;?>
   
     </body>
    </html>
   
