	<?php session_start(); 
include_once('tools.php'); 

topModule('receipt');?>
</div></nav>

<? php
	
if(empty($_SESSION['buyer']))
{header("Location: https://titan.csit.rmit.edu.au/~s3707035/wp/a3/cart.php");
	exit();} 
	 
else{ ?>
	 
    <div class="invoice">
		     <div class="invoice-details">
            Order No: <?php echo (mt_rand(0, 100));?> 
            <br />
           <?php echo (date("d-m-Y"));?>
        </div>
          <div class="company-address">
             Unit 0000
            <br>
            28371 Main Street 
			<br>
			Melbourne, Victoria
            <br>
			Australia, 3000.
				<br>
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
					<th width=100>&nbsp;&nbsp;&nbsp;&nbsp;Quanity</th>
                    <th width=80>&nbsp;&nbsp;Unit price</th>
                    <th width=80>Total price</th>
                </tr>
 
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

	 $BUYER= $_SESSION['buyer'];
	 $CARTS= $_SESSION['cart'];
	 
	 $fd = fopen('orders.txt', 'a');
	 flock($fd, LOCK_EX);
 fputcsv($fd, $BUYER, "\t");
   $arraykey= array_keys($CARTS);
	$Data = "\t\t\t\t\t\t";
	fwrite($fd, $Data);
foreach($arraykey as $item){
	$helpme = ($_SESSION['cart'][$item]);
     fputcsv($fd, $helpme, "\t");
	 $Data = "\t\t\t\t\t\t";
fwrite($fd, $Data);
}
	  $new = "\n";
	 fwrite($fd, $new);
	 flock($fd, LOCK_UN);
	 fclose($fd);
	
	
	
	
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
	 				echo("<td class='text-left'>{$_SESSION['cart'][$item]['oid']}</td>");
                    echo("<td class='text-center'>{$_SESSION['cart'][$item]['qty']}</td>");
	                echo("<td class='text-righty'>{$unitp}</td>");
                    echo("<td class='text-right'>{$totalp}</td>");
                    echo("</tr>");
            }
             echo "</table>";
   
$grandtotal= number_format($grandtotal,2);
	 	$finaltots="Total: $".$grandtotal;
          echo "<br>";
	 echo "<br>";
            echo "<div class='tots'>{$finaltots}</div>" ?>
            					
       
	 

	<?php bottomModule();	
		 /*fdebugmodule();*/ ?>
	 </body>
</html>
