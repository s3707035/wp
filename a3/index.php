<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 3</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/css/home.css">
    <script src='../wireframe.js'></script>
    <style>
      <?php
        // This PHP code inserts CSS to style the "current page" link in the nav area
        $here = $_SERVER['SCRIPT_NAME']; 
        $bits = explode('/',$here); 
        $filename = $bits[count($bits)-1]; 
        echo "nav a[href$='$filename']";
      ?>
      
    </style>
  </head>

  <body>
	<div class="header"> <nav>

		<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/index.php">
	 	<img src='../../media/logo%20(copy).png' alt='Sell My Stuff Logo' height=200 />
		<div class="overlay"></div></a>
		      
		<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/product.php" style="text-decoration:none">
		<p class="product">PRODUCT</p></a>
		
		<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/products.php" style="text-decoration:none">
		<p class="product">PRODUCTS</p></a>
		
		<a href="#Aboutus" style="text-decoration:none">
		<p class="aboutus">ABOUT</p></a>
		
		<a href="#Contactus" style="text-decoration:none">
		<p class="contactus">CONTACT</p></a>
		
		<link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Slabo+27px" rel="stylesheet">
		</nav></div>
	
		 
		<header><p class="head">Welcome</p></header>
		  
    <main>
        <table id="maintable">
		<tr>
		<td><p class="welcome">One person’s junk is another’s 		treasure” is our motto here at Sell My Stuff, a 		Melbourne based not-for-profit organization.<br>
			Promoting the reduction of waste by establishing a marketplace for donated goods that would otherwise be discarded are further used by others.<br>
			Whether it be minimalising your life or picking up an item at a great price all profits go towards community outreach programs in the Melbourne city area.</p>
          </td></tr>
			
		<tr>
		<td>
		<a id="Aboutus"><p class="history">About Us</p></a>
		<p class="historyaboutus">Sell My Stuff was started by 
			Sally Klein. Sally, a mother of seven, often discovered that other mothers in her neighborhood were purchasing new items for their children when the same items were being discarded by other families as their own children no longer needed them. She organized a monthly meet-up group where members of the community could meet, trade and donate children’s things. Sally realized that a shop was more efficient and soon opened “Children’s Things” and bought no longer needed items from mother’s and resold them to others. As business continued, she soon expanded to taking anything and everything under the sun.<br><br>

			Currently, her daughter Janice leads Sell My Stuff.com and is embarking on transforming this small community based shop into a well known Melbourne online not-for-profit based organization with the hopes of expanding into the rest of Victoria and the neighbouring states.
			</p></td></tr>
			
			<tr>
			<td>
			<p class="phone">Contact Us</p>
			<p class="phoneus">Unit 0000<br>
				28371 Main Street,
				Melbourne,
				Victoria, <br>
				Australia, 3000.<br><br>
				
			Office Hours:
				<br>Monday-Friday 9am-5pm
				<br>03 9000-0000<br><br>
				<a id="Contactus">Email:<br>
				info@sellmystuff.com.au</a></p>
				</td>
				</tr>
				</table>
				</main>
		
    <footer>
      <div class="footers">&copy;<script>
        document.write(new Date().getFullYear());
      </script> Valerie Lok, s3707035 <br><a href='products.txt'>products spreadsheet</a>/<a href='orders.txt'>orders spreadsheet</a></div>
    </footer>
   
  </body>
</html>



