<?php session_start(); 
include_once('tools.php'); 

topModule('products');?>
		
		<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/cart.php" style="text-decoration:none">
	<p class="login">CART</p></a>
		
		<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/checkout.php" style="text-decoration:none">
	<p class="products">CHECKOUT</p></a>
	
		
    </nav></div>

		
		
		
		
		
		
		
	<header><p class="head">Sale</p></header>
<form action='processing.php' method='get'> 
		<main>
        <table id="mainproductstable">
		<tr>
		<td>  
			<a href="product.php?id=L123">
			<div class="overlayglamp"></div></a>
			<p class="title">Lamp</p>
			<p class="body">Desklamps barley used, two colours available green or white</p></td>
				
			<td>
			<a href="product.php?id=K133">
            <div class="overlaycup"></div></a>
			<p class="title">Coffee Cup</p>
			<p class="body">Re-useable coffee cup, 350ml volume</p>
			</td>	
				
			<td>
			<a href="product.php?id=G107">
				<div class="overlaycos"></div></a>
			<p class="title">Cos Plant</p>
			<p class="body">Two cos plants roughly 2 years old</p>
			</td>	
			</tr>
			
			<tr>
			<td>		
			<a href="product.php?id=S201">
			<div class='shoe'></div></a>
			<p class="title">Climbing Shoes</p>
			<p class="body">Pair of scarpa "chimera" rockclimbing shoes</p>
			</td>	
		
			<td>
			<a href="product.php?id=P028">
			<div class='bfish'></div></a>
			<p class="title">Goldfish</p>
			<p class="body">Black Moor goldfish, 7cm & 1 year old</p>
            </td>	
				
			<td>
			<a href="product.php?id=P029">
			<div class='ofish'></div></a>
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
      </script> Valerie Lok, s3707035 <br><a href='product.txt'>    products spreadsheet</a><br><a href='orders.txt'>orders spreadsheet</a></div>
    </footer>

		
     </body>
    </html>
   
