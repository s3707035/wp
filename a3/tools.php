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
	 			preShow($_POST);
	 			preShow($_SESSION);
	 			$aaarg = preShow($my_bad_array, true);
	 			echo "Why is \n $aaarg \n not working?";
		        printmycode();
				echo "/div>";
 }


?>