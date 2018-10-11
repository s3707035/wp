<?php session_start(); 
include_once('tools.php'); ?>
<!DOCTYPE html>

<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="Checkout" content="checkout">
  
    
    
    <link id='skeletonlogin' type="text/css" rel="stylesheet" href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/css/skeletonlogin.css">
	  
    <header>
    <div class="header"> 
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a3/index.php">
	
	<img src='../../media/logo%20(copy).png' alt='Sell My Stuff Logo' height=300 />
	<div class="overlay"></div></a>
		
    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Slabo+27px" rel="stylesheet">
 </div> </header>
	   <div><h2 class="title">CHECKOUT</h2></div>
	  <body>
<script>
	function myCC() {
	var a= "<img src='../../media/visa.png'>"
	 
	var card= /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
	
	var x = document.getElementById("cc").value;
	var i = 0, xLength = x.length;
 	for(i; i < xLength; i++) {
    x = x.replace(" ", "");}
	
	if(card.test(x))
	{document.getElementById("credit").innerHTML = a;}

	else{return true;}
	}

		 </script>
	  
 <?php

$firstnameErr = $surnameErr = $emailErr = $addressErr = $phoneErr = $ccErr = $expErr= "";
$firstname = $surname = $email = $address = $phone = $cc = $exp= "";
$Cerror=0;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
  if (empty($_POST["firstname"])) {
    $firstnameErr = "first name is required";
    $Cerror++; }
	else {
    $firstname = test($_POST["firstname"]);
    
    if (!preg_match("/^[a-zA-Z .,'-]*$/",$firstname)) {
      $firstnameErr = "Please enter a valid firstname"; 
    $Cerror++;}
  }
  if (empty($_POST["surname"])) {
    $surnameErr = "surname is required";
  $Cerror++;} else {
    $surname = test($_POST["surname"]);
    
	  if (!preg_match("/^[a-zA-Z .,'-]*$/",$surname)) {
      $surnameErr = "Please enter a valid surname"; 
    $Cerror++;}
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  $Cerror++;} else {
    $email = test($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    $Cerror++;}
  }
   
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  $Cerror++;} else {
    $address = test($_POST["address"]);
    
    if (!preg_match("~^[-a-zA-Z0-9\s,\-\/.']*$~",$address)) {
      $addressErr = "Please enter a valid address"; 
    $Cerror++;}}
	  
	if (empty($_POST["phone"])) {
    $phoneErr = "Phone number is required";
  $Cerror++;} else {
    $phone = test($_POST["phone"]);
	
  if (preg_match("/^([+614]{4})([0-9]{8})$/",$phone) || preg_match("/^([(04)]{4})([0-9]{8})$/",$phone) ||
	  preg_match("/^([04]{2})([0-9]{8})$/",$phone)) 
  {}
		else{
     $phoneErr = "Not a valid number, please start with +614 or 04";} 
	    $Cerror++;}
  
	
  
	if (empty($_POST["cc"])) {
    $ccErr = "Credit card number is required";
  $Cerror++;} else {
    $cc = test($_POST["cc"]);
	$nscc = preg_replace('/\s+/','',$cc);
		
	if (!preg_match("/^([0-9]{12,16})$/", $nscc)) 
{$ccErr = "Please enter a valid credit card";
$Cerror++;} 
	    }


  	if (empty($_POST["exp"])) {
    $expErr = "Credit card expiry date is required";
  $Cerror++;} 
 	else{$newDate = strtotime("now");
	$ncd = date("Y-m-d",strtotime("+28 days",$newDate));

	$expDate = ($_POST["exp"]);
	$expDatefirst=($expDate."-01");
	$expDatefirstdone= str_replace('-', '', $expDatefirst);
	$newncd= str_replace('-', '', $ncd);

if ($expDatefirstdone < $newncd) {
    $expErr = "Expiry date must be 28 days or longer";
$Cerror++;
} else {}}
	
}
		  
		 
function test($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(($Cerror<=1) && $_SERVER["REQUEST_METHOD"] == "POST")
{   $date=date("d-m-Y");
	$fname=$_POST["firstname"];
	$sname=$_POST["surname"];
	$emails=$_POST["email"];
	$phones=$_POST["phone"];
	$addy=$_POST["address"];
$_SESSION['buyer']['date'] = $date;
$_SESSION['buyer']['firstname'] = $fname;
$_SESSION['buyer']['surname'] = $sname;
$_SESSION['buyer']['email'] = $emails;
$_SESSION['buyer']['phone'] = $phones;
$_SESSION['buyer']['address'] = $addy;

	
header("Location: https://titan.csit.rmit.edu.au/~s3707035/wp/a3/receipt.php"); 
exit();
}


?>



	 <main>
		  <table >
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
    	<div class="email">
			<tr><td></td><td><label for="text"><b>First Name</b></label>
				<input type="text" id="first name" placeholder="First Name" name="firstname" value="<?php echo $firstname;?>" style=" height:30px;" required></td><td><span class="error"> <?php echo $firstnameErr;?></span></td></tr><br>
		 
		 
		
    	<tr><td></td><td><label for="text"><b>Surname</b></label>
    	<input type="text" id="surname" placeholder="Surname" name="surname" value="<?php echo $surname;?>" style=" height:30px;" required></td><td><span class="error"> <?php echo $surnameErr;?></span></td></tr><br>
			
	
    	<tr><td></td><td><label for="email"><b>Email</b></label>
    	<input type="email" id="email" placeholder="Email Address" name="email" value="<?php echo $email;?>" style=" height:30px;" required></td><td><span class="error"> <?php echo $emailErr;?></span></td></tr><br>
				 
			<div class='break'></div>
    	<tr><td></td><td><label for="email"><b>Address</b></label>
			<textarea name="address" id="Address" placeholder="Enter Address" name="address" value="<?php echo $address;?>" style=" height:40px;" required></textarea></td><td><span class="error"> <?php echo $addressErr;?></span></td></tr><br>
	
      	<tr><td></td><td><label for="phone"><b>Phone Number</b></label>
      	<input type="text" id="phone" placeholder="Enter Phone Number" name="phone" value="<?php echo $phone;?>" style=" height:30px;" required></td><td><span class="error"> <?php echo $phoneErr;?></span></td></tr><br>
		
			
      	<tr><td></td><td><label for="cc"><b>Credit Card</b></label>
		<input type="text" id="cc" placeholder="Enter Credit Card" name="cc" oninput="myCC()" value="<?php echo $cc;?>" style=" height:30px;" required></td><td><a id="credit"></a><span class="error"> <?php echo $ccErr;?></span></td></tr><br>
		 
		 
		
		 <tr><td></td><td><label for="exp"><b>Exp. Date</b></label>
		 <input type="month" min="2018-09" max="2025-01" id="exp" value="<?php echo $exp;?>" name="exp" style=" height:30px;" required></td><td><span class="error"> <?php echo $expErr;?></span></td></tr><br></div>
		
			 
			 <tr><td></td><td><div class='other'><button type="submit" value="submit" class="button"><img src="../../media/buynow.png" alt="Submit" style="height:70px"/></button></td><td></td></tr><br></div>
		 
		 </table>
		 </form>

	
</main>
	
<?php bottomModule();	
	 	 /*fdebugmodule();*/ ?>
   
       </body>
    </html>
   