s<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Product</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/skeleton.css">
    <script src='../wireframe.js'></script>
  </head>
    
<section id='Product' class='id'>
  <body>
<header>
        
        <div><img src='../../media/logo.png' alt='Sell My Stuff' height=200 />Product</div>
        </header>

      
    <nav>
      <div>Put website navigation links here</div>
    </nav>

    
 
    
    <main>
        
              <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
      </article>
        
<form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php' method='post'>
  
 <input type="hidden" id="product ID" name="id" value="#98734">    
    <br>
    
  <select name='option'required>
  <option selected='true' disabled>Select One</option>
  <option value="Small">Small</option>
  <option value="Large">Large</option>
  </select>
    
  <br>
  Quantity
  <input type="number" placeholder="0" name="qty" value=' ' min="1" max="1000"  required>  
  <br>
           
  <button type="submit">Submit</button>
  
</form>
        

    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Put your name(s), student number(s) and group name here.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
      
    

  </body>
     </section>
</html>
   
