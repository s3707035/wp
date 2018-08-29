<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="Product" content="Product">
      
    <title>Product</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='products' type="text/css" rel="stylesheet" href="https://titan.csit.rmit.edu.au/~s3707035/wp/a2/css/product.css">
	    </head>
    
	 
		 
		  
	
	
	<body>
       <div class="header"> <header>
		  <a href="https://titan.csit.rmit.edu.au/~s3707035/wp/a2/index.php">
			 <img src='../../media/logo%20(copy).png' alt='Sell My Stuff Logo' height=200 />
			  <div class="overlay"></div>
		  </a>
		   
         <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Slabo+27px" rel="stylesheet">

         </header></div>

     
 
    
    <main>
        <table id="maintable">
			<tr>
			<td> dslfjdslkjflsdajf
				sdallkfjasd;lfkjs;adl
				sadfljasdlj</td>
				
			<td>
             <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
				</article></td>
			</tr>
			<tr>
			<td>
<form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php' method='post'>
  
 <input type="hidden" id="product ID" name="id" value="#98734">    
    <br>
    
  <select name='option'required>
  <option selected='true' disabled>Select One</option>
  <option value="Small">Small</option>
  <option value="Large">Large</option>
  </select>

	<br>
	<div class="quantity">
		Quanity
      <button class="plusbutton" type="button" name="plusbutton">
        <img src="../../media/uparrow.png" alt="" height=30px onclick="plusFunction()"/>
      </button>
     <input type="number" id="numberid" placeholder="0" name="qty" value=' ' min="1" max="1000"  required> 
      <button class="minusbutton" type="button" name="minusbutton">
        <img src="../../media/downarrow.png" alt="" height=30px onclick="minusFunction()"/>
      </button>
    </div>	
         
<button type="submit" class="button"><img src="../../media/buynow.png" alt="Submit" style="height:50px"/>
			   </button>

<script>
function plusFunction() {
    document.getElementById("numberid").stepUp(1);}

function minusFunction() {
    document.getElementById("numberid").stepDown(1);}
	
	</script>
</form>
				
</td>
				
			
</tr>

  
       </table>
		
    </main>

<footer class="footer">
		<div><font size="0">&copy; <script>
        document.write(new Date().getFullYear());
          </script> Valerie Lok, s3707035</font></div>
        </footer>

    

  </body>
     
</html>
   
