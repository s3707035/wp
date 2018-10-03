<!DOCTYPE html>
<html lang='en'>
	<?php session_start(); ?>
  <head>
    <meta charset="utf-8">
    <meta name="Product" content="Product">
      
    <title>Product</title>
    
   <link id='products' type="text/css" rel="stylesheet" href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/css/product.css"></head>
   <body>
    <div class="header"> 
	<nav>
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/index.php">
	<img src='../../media/logo%20(copy).png' alt='Sell My Stuff Logo' height=200 />
		<div class="overlay"></div></a>
		   
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/products.php" style="text-decoration:none">
	<p class="products">PRODUCTS</p></a>
	
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/login.php" style="text-decoration:none">
	<p class="login">CART</p></a>
    
	<link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Slabo+27px" rel="stylesheet">
    </nav></div>
	
<?php
	 	   	   
$fp =fopen('product.txt', 'r');
	if (($headings = fgetcsv($fp, 0, "\t")) !== false){
		while ($cells = fgetcsv($fp, 0, "\t") ) {
			for ($x=1; $x<count($cells); $x++)
				$product[$cells[0]][$headings[$x]]=$cells[$x];
				
			}
	fclose($fp);
	}
	   
	   $item= $_GET['id'];
	   $isvalid= array_key_exists($item,$product); 

if (!isset($_GET['id']) &&($isvalid!==true))
{
header("Location: https://titan.csit.rmit.edu.au/~s3707035/wp/a3/products.php"); 
exit();}
 
	   
	   
	else{
		$image_csv=$product[$item]['Img'];
		
	}   
	 
         
?>
	   

	
    <main>
    <table id="maintable">
	<tr>
	<td> <p class="first"><?php echo $product[$item]['Title'] ?></p>
		<p class="body"><?php echo $product[$item]['Description'] ?></p>
		 <p class="price">$<?php echo $product[$item]['Price'] ?></p>

		
		<form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php' method='post'>
  
 		<input type="hidden" id="product ID" name="id" value="#98734"><br>
    
  		<select name='option' id="option" required>
  		<option selected='true' disabled>Select One</option>
  		<option value="White">White</option>
  		<option value="Green">Green</option></select><br>

		
		<p class="quanity">Quanity</p>
		<div class="plusminusbutton">
		<button class="minusbutton" type="button" name="minusbutton">
        <img src="../../media/downarrow.png" alt="" height=30px onclick="minusFunction()"/></button>
			
     	<input type="number" id="numberid" placeholder="0" name="qty" value=' ' min="1" max="1000"  required> 

        <button class="plusbutton" type="button" name="plusbutton">
        <img src="../../media/uparrow.png" alt="" height=30px onclick="plusFunction()"/></button>	</div>
    
        <button type="submit" class="buybutton"><img src="../../media/cart.png" alt="Submit" style="height:80px"/></button>
	
<script>
function plusFunction() {
    document.getElementById("numberid").stepUp(1);}

function minusFunction() {
    document.getElementById("numberid").stepDown(1);}
	
</script>
</form>
</td>
	
		<td>
        <div class="overlayglamp"><img src="<?php echo $image_csv;?>"/></div></td>
		</tr>
		</table>
		</main>
	

	
	 
		
<footer>
<div class="footers">
		&copy; <script>
        document.write(new Date().getFullYear());
          </script> Valerie Lok, s3707035</div>
        </footer>
		</body>
     	</html>
   
