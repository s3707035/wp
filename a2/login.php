<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="Login Page" content="Login">
      
    <title>Login</title>
    
    <link id='skeletonlogin' type="text/css" rel="stylesheet" href="https://titan.csit.rmit.edu.au/~s3707035/wp/a2/css/skeletonlogin.css">
    
    <div class="header"> <header>
	<a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a2/index.php">
	
	<img src='../../media/logo%20(copy).png' alt='Sell My Stuff Logo' height=300 />
	<div class="overlay"></div></a>
		
    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Slabo+27px" rel="stylesheet">
    </header></div>
	  
	
      
		<div><h2 class="title">LOGIN</h2></div>
      
	 
	 <main>
     <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php' method='post' onsubmit="return formvalidateFunction()">
    	<div class="email">
    	<label for="email"><b>Email</b></label>
    	<input type="text" id="email" placeholder="Enter Email Address" name="email" value='' style=" height:30px;" required><br></div>
		  
        <div class="password">
      	<label for="Password"><b>Password</b></label>
      	<input type="Password" id="password" placeholder="Enter Password" name="password" value='' style=" height:30px;" required><br></div>
      
        <div><button type="submit" value="submit" class="button"><img src="../../media/signin.png" alt="Submit" style="height:70px"/></button></div></form>
		  
		 
<script>
function emailFunction() {
var email = document.getElementById("email").value;
var pemail = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
	
	if (!pemail.test(email)) {
        alert('Enter a valid e-mail address');
        return false;}
  
		else {return true;}
}
	 	
	
function formvalidateFunction(){
      var countErrors=0;
      if (!emailFunction())
	  {countErrors++;
      return (countErrors==0);}}
</script>
		  
</main>

<footer>
		<div class="footers"> &copy; <script>
        document.write(new Date().getFullYear());
        </script> Valerie Lok, s3707035</div></footer>

   
    