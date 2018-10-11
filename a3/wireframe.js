
function testFunction(){
	var y= document.getElementById("numberid");
	var z= y.value;
	var a= document.getElementById("subtots");
	var p= a.value;
	var total= z*p;
        total =total.toFixed(2);
	document.getElementById("subtotal").innerHTML= "$" + total;
}	

function plusFunction() {
    document.getElementById("numberid").stepUp(1);
    var y= document.getElementById("numberid");
	var z= y.value;
	var a= document.getElementById("subtots");
	var p= a.value;
	var total= z*p;
     total =total.toFixed(2);
	document.getElementById("subtotal").innerHTML= "$" + total;}


function minusFunction() {
    document.getElementById("numberid").stepDown(1);
    var y= document.getElementById("numberid");
	var z= y.value;
	var a= document.getElementById("subtots");
	var p= a.value;
	var total= (z*p);
	total =total.toFixed(2);
	document.getElementById("subtotal").innerHTML= "$" + total;}
	

function checkout(){
    document.getElementById("checkout");
        location.href = "https://titan.csit.rmit.edu.au/~s3707035/wp/a3/checkout.php";
    }

function myCC() {
	var a= "<img src='https://titan.csit.rmit.edu.au/~s3707035/media/visa.png'>"
	 
	var card= /^(?:4[0-9]{13}(?:[0-9]{3})?)$/;
	
	var x = document.getElementById("cc").value;
	var i = 0, xLength = x.length;
 	for(i; i < xLength; i++) {
    x = x.replace(" ", "");}
	
	if(card.test(x))
	{document.getElementById("credit").innerHTML = a;}

	else{return true;}
	}
	


