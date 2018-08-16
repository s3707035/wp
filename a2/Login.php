<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="Login Page" content="Login">
      
    <title>Login</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="../css/skeleton.css">
    <script src='../wireframe.js'></script>
  </head>

<body>
<h1>Login Form</h1>

<div>
  
    <img src='../../media/RMIT-Logo.png' alt='RMIT University logo'>
    </div>
<form action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php' method='post' enctype='text/plain '>
    <div>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email Address" name="Email Address" value='' required>
        <br>
      <label for="Password"><b>Password</b></label>
      <input type="Password" placeholder="Enter Password" name="Password" value='' required><br>
      <button type="submit">Login</button>
       </div>
</form>
      
<script>
  
    
    
    
    <footer>
      <div>s&copy;<script>
        document.write(new Date().getFullYear());
      </script> Put your name(s), student number(s) and group name here.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div></footer>

   
  

