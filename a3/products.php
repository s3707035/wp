<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="Product" content="Product">
      
    <title>Products</title>
    
   <link id='products' type="text/css" rel="stylesheet" href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/css/skeletonproducts.css"></head>
    
	

<?PHP
	
//$file = fopen("products.txt","r");

//$array_products = []; 
//while (($data = fgetcsv($file,100,"\t")) !== FALSE) {
  //              $array_products[] = $data;}
	
//fclose($file);


//echo "no: ".$array_products [1][0]." Colour ".$array_products [1][1]." Title: ".$array_products [1][2]." Description: ".$array_products [1][3]." Colour: ".$array_products [1][4]." Price: ".$array_products [1][5].".<br>";


		//	<div class="overlayglamp"></div>
		//	<p class="title"><?php echo $array_products [1][2] ?//</p>
		//	<?php echo "<div id='body'"> $array_products [1][3] echo "</div>";
		//php echo "<p id="price">" $$array_products [1][5] ?//</p>;
		

	?>


	<body>
	<div class="header"> <nav>
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/index.php">
	<img src='../../media/logo%20(copy).png' alt='Sell My Stuff Logo' height=200 />
	<div class="overlay"></div></a>
		
    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Slabo+27px" rel="stylesheet">
	</nav></div>
		  
	<header><p class="head">Sale</p></header>
<form action='processing.php' method='get'> 
		<main>
        <table id="mainproductstable">
		<tr>
		<td>  
			<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/product.php">
			<div class="overlayglamp"></div></a>
			<p class="title">Lamp</p>
			<p class="body">Desklamps barley used, two colours available green or white</p></td>
				
			<td>
			<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/tools.php" target="K133">
            <div class="overlaycup"></div></a>
			<p class="title">Coffee Cup</p>
			<p class="body">Re-useable coffee cup, 350ml volume</p>
			</td>	
				
			<td>
            <div class="overlaycos"></div>
			<p class="title">Cos Plant</p>
			<p class="body">Two cos plants roughly 2 years old</p>
			</td>	
			</tr>
			
			<tr>
			<td>		
			<div class='shoe'></div>
			<p class="title">Climbing Shoes</p>
			<p class="body">Pair of scarpa "chimera" rockclimbing shoes</p>
			</td>	
		
			<td>
			<div class='bfish'></div>
			<p class="title">Goldfish</p>
			<p class="body">Black Moor goldfish, 7cm & 1 year old</p>
            </td>	
				
			<td>
            <div class='ofish'></div>
			<p class="title">Goldfish</p>
			<p class="body">Fantail goldfish, 4cm & 1 year old</p>
			</td>	
			</tr>
		    </table>
		    </main>
	</form>


	<footer>
      <div class="footers">&copy;<script>
        document.write(new Date().getFullYear());
      </script> Valerie Lok, s3707035 <br><a href='products.txt'>    products spreadsheet</a><br><a href='orders.txt'>orders spreadsheet</a></div>
    </footer>
   
     </body>
    </html>
   
