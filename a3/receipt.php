<!DOCTYPE html>
	<?php session_start(); ?>
<html lang='en'>
	  
    <meta charset="utf-8">
  
      <head>
    <title>receipt</title>
     <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Slabo+27px" type="text/css"  rel="stylesheet" media="screen">
     <link id='product' type="text/css" rel="stylesheet" href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/css/receipt.css">
		
  </head>
 <body>
    <div class="header"> 
	<nav>
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/index.php">
		<img src='../../media/logo%20(copy).png' alt='Sell My Stuff Logo' height=200 /></a></nav></div>
	
<? php
	
if(empty($_SESSION['buyer']))
{header("Location: https://titan.csit.rmit.edu.au/~s3707035/wp/a3/cart.php");
	exit();} 
	 
else{ ?>
	 
    <div class="invoice">
		     <div class="invoice-details">
            Invoice No: <?php echo (mt_rand(0, 100));?> 
            <br />
           <?php echo (date("d-m-Y"));?>
        </div>
         
        <div class="customer-address">
            To:
            <br />
            <?php echo ($_SESSION['buyer']['firstname']).' '.($_SESSION['buyer']['surname']);?>
            <br />
            <?php echo ($_SESSION['buyer']['address']);?>
            <br />
        </div>
         
        <div class="clear-fix"></div>
            <table>
                <tr>
                    <th width=200>Description</th>
                    <th width=100>Type</th>
					<th width=80>Quanity</th>
                    <th width=80>Unit price</th>
                    <th width=80>Total price</th>
                </tr>
 
  <?php
     $fp =fopen('product.txt', 'r');
	if (($headings = fgetcsv($fp, 0, "\t")) !== false){
		while ($cells = fgetcsv($fp, 0, "\t") ) {
			for ($x=1; $x<count($cells); $x++)
				$product[$cells[0]][$headings[$x]]=$cells[$x];
	
			}
	fclose($fp);
	}       
	 
	 $total = 0;
    $CART= $_SESSION['cart'];
    $arraykey= array_keys($CART);
	$grandtotal=0;
   
	foreach($arraykey as $item)
{$itemprice=$product[$item]['Price'];
  $itemqty=$_SESSION['cart'][$item]['qty'];
 	$itemtotal1=$itemprice*$itemqty;
 	$itemtotal=number_format($itemtotal1,2);	
    $grandtotal+= $itemtotal1;
 $unitp="$".$product[$item]['Price'];
 $totalp="$".$itemtotal;

 					echo("<tr>");
                    echo("<td>{$product[$item]['Title']}</td>");
	 				echo("<td class='text-center'>{$_SESSION['cart'][$item]['oid']}</td>");
                    echo("<td class='text-center'>{$_SESSION['cart'][$item]['qty']}</td>");
	                echo("<td class='text-right'>{$unitp}</td>");
                    echo("<td class='text-right'>{$totalp}</td>");
                    echo("</tr>");
            }
             echo "</table>";
   
$grandtotal= number_format($grandtotal,2);
	 	$finaltots="Total: $".$grandtotal;
          echo "<br>";
            echo "<div class='tots'>{$finaltots}</div>" ?>
            					
       </body>
 
   
	    <div class="company-address">
            Sell My Stuff
            <br>
            Unit 0000
            <br>
            28371 Main Street 
			<br>
			Melbourne, Victoria
            <br>
			Australia, 3000.
				<br>
				</div>
	 
	 
	 <footer>     
      <div class="footers">&copy;<script>
        document.write(new Date().getFullYear());
      </script> Valerie Lok, s3707035 <br><a href='product.txt'>    products spreadsheet</a><br><a href='orders.txt'>orders spreadsheet</a></div>
    </footer>
				

</html>
