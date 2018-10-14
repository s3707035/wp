<?php
function topModule($pagetitle){
$outputT = <<<"TOP"
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="$pagetitle" content="$pagetitle">
      
    <title>$pagetitle</title>
    
  
	  <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Slabo+27px" rel="stylesheet">
	</head>
	
    <body>
	<div class="header"> <nav>
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/index.php">
	<img src='../../media/logo%20(copy).png' alt='Sell My Stuff Logo' height=200 />
	<div class="overlay"></div></a>
	 <link id='products' type="text/css" rel="stylesheet" href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/css/$pagetitle.css">
	<script src='wireframe.js'></script>

		
TOP;
	echo $outputT;
		}


  function bottomModule() {
    $output = <<<"BOTTOM"
 <footer>
      <div class="footers">&copy;<script>
        document.write(new Date().getFullYear());
      </script> Valerie Lok, s3707035 <br><a href='product.txt'>    products spreadsheet</a><br><a href='orders.txt'>orders spreadsheet</a></div>
    </footer>
BOTTOM;
      echo $output;
  }

function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else
    echo $ret;}


function printmycode(){
$lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'>\n";
  foreach ($lines as $lineNo => $lineOfCode)
     printf("%3u: %1s \n", $lineNo, rtrim(htmlentities($lineOfCode)));
  echo "</pre>";}


 function fdebugmodule(){
	  echo "<div class='footerspace'>";
	 preShow($_GET);			
	 preShow($_POST);
	 			preShow($_SESSION);
	 			
		        printmycode();
				echo "</div>";
 }




function menus($c1, $c2, $c3, $c1a, $c2a, $c3a){
	$menus = <<<"menus"
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/$c1.php" style="text-decoration:none">
	<p class="products">$c1a</p></a>
	
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/$c2.php" style="text-decoration:none">
	<p class="products">$c2a</p></a>
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/$c3.php" style="text-decoration:none">
	<p class="products">$c3a</p></a>
        
menus;
	echo $menus;
	
}


?>