
<?php session_start(); 
include_once('tools.php'); 

topModule('index');
		      
menus('products', 'cart', 'checkout', 'PRODUCTS', 'CART', 'CHECKOUT')?>
		
	
		<a href="#Contactus" style="text-decoration:none">
		<p class="contactus">CONTACT</p></a>
		

		</nav></div>
	
		 
		<header><p class="head">Welcome</p></header>
		  
    <main>
        <table id="maintable">
		<tr>
		<td><p class="welcome">One person’s junk is another’s 		treasure” is our motto here at Sell My Stuff, a 		Melbourne based not-for-profit organization.<br>
			Promoting the reduction of waste by establishing a marketplace for donated goods that would otherwise be discarded are further used by others.<br>
			Whether it be minimalising your life or picking up an item at a great price all profits go towards community outreach programs in the Melbourne city area.</p>
          </td></tr>
			
		<tr>
		<td>
		<a id="Aboutus"><p class="history">About Us</p></a>
		<p class="historyaboutus">Sell My Stuff was started by 
			Sally Klein. Sally, a mother of seven, often discovered that other mothers in her neighborhood were purchasing new items for their children when the same items were being discarded by other families as their own children no longer needed them. She organized a monthly meet-up group where members of the community could meet, trade and donate children’s things. Sally realized that a shop was more efficient and soon opened “Children’s Things” and bought no longer needed items from mother’s and resold them to others. As business continued, she soon expanded to taking anything and everything under the sun.<br><br>

			Currently, her daughter Janice leads Sell My Stuff.com and is embarking on transforming this small community based shop into a well known Melbourne online not-for-profit based organization with the hopes of expanding into the rest of Victoria and the neighbouring states.
			</p></td></tr>
			
			<tr>
			<td>
			<p class="phone">Contact Us</p>
			<p class="phoneus">Unit 0000<br>
				28371 Main Street,
				Melbourne,
				Victoria, <br>
				Australia, 3000.<br><br>
				
			Office Hours:
				<br>Monday-Friday 9am-5pm
				<br>03 9000-0000<br><br>
				<a id="Contactus">Email:<br>
				info@sellmystuff.com.au</a></p>
				</td>
				</tr>
				</table>
				</main>
		
   
	<?php bottomModule();	
	 	 /*fdebugmodule();*/ ?>
   
  </body>
</html>



