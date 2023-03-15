<?php 

if(!isset($_COOKIE["userid"]))// $_COOKIE is a variable and login is a cookie name 

	header("location:SignIn.php"); 
	
	

?>
<!DOCTYPE html>
<html>
<style>
	.wrapper {
	  width: 100px;
	  margin: 0em auto 0;
	}

	.checkmark {
	  stroke: #070808;
	  stroke-dashoffset: 745.74853515625;
	  stroke-dasharray: 745.74853515625;
	  animation: dash 2s ease-out forwards infinite;
	}

	@keyframes dash {
	  0% {
		stroke-dashoffset: 745.74853515625;
	  }
	  100% {
		stroke-dashoffset: 0;
	  }
	}
</style>
<head>
    <title>Failed To Process Order</title>
    <link rel="stylesheet" href="MainStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> 
</head>
<script src="https://kit.fontawesome.com/cff205d073.js" crossorigin="anonymous"></script>

     <body> 
     <div class="MenuBar">
        
            <nav>
                
                <ul class="MenuTabs">
                    <li style="margin-top:25px;"><a style="font-size: 24px;" class="logo" href="Main.php">ARTC</a></li>
                    <li><a style=" padding: 0 10px;" href="Landing_Page.php">Home</a></li>
                    <li class="Dropdown"><a style=" padding: 0 10px;" href="Women_Menu(User).php">Women</a>
                      
                    <ul class="MenuUnderTabs">
                        
                        <div class="MenuContent">
                        <li><a href="Women_Shirt(User).php">Shirts</a></li>
                        <li><a href="Women_Pants(User).php">Pants</a></li>
                        <li><a href="Women_Dress(User).php">Dresses</a></li>
                        <li><a href="Women_Accessories(User).php">Accessories</a></li>
                        
                        </div>
                        
                        
                    </ul>
                    
                    </li>
                    <li class="Dropdown"><a style=" padding: 0 10px;" href="Men_Menu(User).php">Men</a>
                      
                    <ul class="MenuUnderTabs">
                        
                        <div class="MenuContent">
                        <li><a href="Men_Shirt(User).php">Shirts</a></li>
                        <li><a href="Men_Pants(User).php">Pants</a></li>
                        <li><a href="Men_Accessories(User).php">Accessories</a></li>
                        </div>
                        
                    </ul>
                    
                    </li>
                    <li class="Dropdown"><a style=" padding: 0 10px;" href="Girls_Menu(User).php">Girls</a>
                      
                    <ul class="MenuUnderTabs">
                        
                        <div class="MenuContent">
                        <li><a href="Girls_Shirt(User).php">Shirts</a></li>
                        <li><a href="Girls_Pants(User).php">Pants</a></li>
                        <li><a href="Girls_Dress(User).php">Dresses</a></li>
                        <li><a href="Girls_Accessories(User).php">Accessories</a></li>
                        </div>
                    </ul>
                    
                    </li>
                    <li class="Dropdown"><a style=" padding: 0 10px;"href="Boys_Menu(User).php">Boys</a>
                      
                    <ul class="MenuUnderTabs">
                        
                        <div class="MenuContent">
                       <li><a href="Boys_Shirt(User).php">Shirts</a></li>
                        <li><a href="Boys_Pants(User).php">Pants</a></li>
                        <li><a href="Boys_Accessories(User).php">Accessories</a></li>
                        </div>
                    </ul>
                    
                    </li>
        
                    <li><a style=" padding: 0 10px;"href="Blog(User).php">Blog</a></li>
                    <li><a style=" padding: 0 10px;"href="Features(User).php">Features</a></li>
                    <li><a style=" padding: 0 10px;"href="Contact(User).php">Contact</a></li>
                    <li><a style=" padding: 0 10px;"href="Rating(User).php">Rating</a></li>
                    
                    <li style="padding-left: 40px;"><a href="UserOrderList.php"><i class="far fa-clipboard fa-lg"></i></a></li>
                    
                    <li><a style=" padding: 0 10px;" href="cart.php"><i class="fas fa-shopping-cart fa-lg"></i></a></li>
                    <li><a style=" padding: 0 10px;"href="EditProfile.php"><i  class="far fa-user fa-lg"></i></a></li>
                    <li class="Sign" style="left: 40px;"><a class="InUp" href="logoutfailed.php" style="width:52px; font-size: 13px;">Sign Out</a></li>
                    
                </ul>
                
            </nav>
        
            
        </div>
        
        
        <div class="Container" style="margin-bottom: 500px;">
		
			<div class="Container-text">
		 
        
           	<div class="wrapper">
			
			<svg xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://web.resource.org/cc/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:svg="http://www.w3.org/2000/svg" id="svg2" viewBox="0 0 84.853 84.853" version="1.0">
			<g id="layer1" transform="translate(-153.29 -132.79)" class="checkmark" >
			<g id="g2762" transform="matrix(.70711 -.70711 .70711 .70711 -66.575 189.71)" fill="red">
			<rect id="rect1872" y="165.22" width="100" x="145.71" height="20"/>
			<rect id="rect1874" transform="rotate(90)" height="20" width="100" y="-205.71" x="125.22"/>
			</g>
			</g>
			</svg>
				</div>
				
				<p> Your Order Has Been Failed To Process ! </p>
				<p> Sorry ... Please Make Another Order </p>
				<p> Redirecting You To Home Page... </p>
				
			</div>
        </div>
     
        <div class="bottom-nav">
            
            <div class="bottom-content">
                
                <div class="bottom-section-Blog" style="margin-right: 80px; margin-left: 20px;">
                    <h1 class="header">BLOG</h1>
                    <ul class="bottom-list">
                        <li><a href="#">"Location"</a></li>
                        <li><a href="#">"Phone"</a></li>
                        <li><a href="#">"Email"</a></li>
                    </ul>
                </div>     
                
                <div class="bottom-section-Myacc" style="margin-right: 80px;">
                     <h1 class="header">MY ACCOUNT </h1>
                    <ul class="bottom-list">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">My Cart</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">User Info</a></li>
                    </ul>
                </div>     
                
                <div class="bottom-section-Info" style="margin-right: 80px;">
                 <h1 class="header">INFORMATION</h1>
                    <ul class="bottom-list">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">New Products</a></li>
                    </ul>
                </div>     
                
                <div class="bottom-section-Sup" style="margin-right: 90px;">
                                
                    <h1 class="header">SUPPORT</h1>
                    <ul class="bottom-list">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>     
                
                <div class="bottom-section-News" style="margin-right: 70px;">
                 <h1 class="header" style="text-align: left;">NEWSLETTER</h1>
          
                 <p>SUBSCRIBE TO OUR NEWSLETTER</p>
                    <div class="input-icon">
                        <i class="fas fa-envelope fa-2x"></i>
                        <input type="text">
                    </div>
                
                <span><i class="fas fa-phone"></i> &nbsp; +60 18-293 6294</span>
                <span><i class="fas fa-envelope"></i> &nbsp; info@logo.com</span>
                <div class="socials">
                    
                    <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#"><i class="fab fa-youtube fa-lg"></i></a>
                </div>
                </div>     
            </div>
        
        </div>
       
        
    </body>
<script>
         setTimeout(function(){
            window.location.href = 'Landing_Page.php';
         }, 4000);
</script>


</html>