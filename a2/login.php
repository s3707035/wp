<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="Login Page" content="Login">
      
    <title>Login</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='skeletonlogin' type="text/css" rel="stylesheet" href="https://titan.csit.rmit.edu.au/~s3707035/wp/a2/css/skeletonlogin.css">
    
      <div> <header>
		  <a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a2/index.php">
			 <img src='../../media/logo%20(copy).png' alt='Sell My Stuff Logo' height=300 /></a>
         <link href="//fonts.googleapis.com/css?family=Indie+Flower|Short+Stack" rel="stylesheet">
         </header></div>
	  
	
      
      <div><section>LOGIN</section></div>
      
	  
      <main>
      <form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php' method='post' enctype='text/plain' onsubmit="return  formvalidateFunction()">
    <div>
      <label for="email"><b>Email</b></label>
        <input type="text" id="email" placeholder="Enter Email Address" name="email" value='' style=" height:30px;" required>
        <br></div>
          <div>
      <label for="Password"><b>Password</b></label>
      <input type="Password" placeholder="Enter Password" name="password" value='' style=" height:30px;" required><br>
          </div>
      
           <div> 
        <button class="button">Login</button>
          </div>
		  
 <script>
function emailFunction() {
 var at = document.getElementById("email").value.indexOf("@");
	if (at == -1) {
 alert("Not a valid e-mail");
 submitOK = "false";
  if (submitOK == "false") {
 return false;}
 }
else {return true;}
}
	 	 
function formvalidateFunction(){
      var countErrors=0;
     if (!emailFunction())
	 {countErrors++;
     return (countErrors==0);
    }}
		  </script>
		  
		  </form>
          </main>

    
    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
          </script> Valerie Lok, s3707035.</div>
        </footer>

   
    

