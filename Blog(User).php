<?php 

if(!isset($_COOKIE["userid"]))// $_COOKIE is a variable and login is a cookie name 

	header("location:SignIn.php"); 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <link rel="stylesheet" href="Blog(User).css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> 
     <link href="fontawesome-free-5.15.4-web\css/all.css" rel="stylesheet"> 
</head>
    
    
     <body> 
         <div class="MenuBar">
        
            <nav>
                
                <ul class="MenuTabs">
                    <li><p class="logo">ARTC</p></li>
                    <li><a href="Landing_Page.php">Home</a></li>
                    <li class="Dropdown"><a href="Women_Menu(User).php">Women</a>
                      
                    <ul class="MenuUnderTabs">
                        
                        <div class="MenuContent">
                        <li><a href="Women_Shirt(User).php">Shirts</a></li>
                        <li><a href="Women_Pants(User).php">Pants</a></li>
                        <li><a href="Women_Dress(User).php">Dresses</a></li>
                        <li><a href="Women_Accessories(User).php">Accessories</a></li>
                        
                        </div>
                        
                        
                    </ul>
                    
                    </li>
                    <li class="Dropdown"><a href="Men_Menu(User).php">Men</a>
                      
                    <ul class="MenuUnderTabs">
                        
                        <div class="MenuContent">
                        <li><a href="Men_Shirt(User).php">Shirts</a></li>
                        <li><a href="Men_Pants(User).php">Pants</a></li>
                        <li><a href="Men_Accessories(User).php">Accessories</a></li>
                        </div>
                        
                    </ul>
                    
                    </li>
                    <li class="Dropdown"><a href="Girls_Menu(User).php">Girls</a>
                      
                    <ul class="MenuUnderTabs">
                        
                        <div class="MenuContent">
                        <li><a href="Girls_Shirt(User).php">Shirts</a></li>
                        <li><a href="Girls_Pants(User).php">Pants</a></li>
                        <li><a href="Girls_Dress(User).php">Dresses</a></li>
                        <li><a href="Girls_Accessories(User).php">Accessories</a></li>
                        </div>
                    </ul>
                    
                    </li>
                    <li class="Dropdown"><a href="Boys_Menu(User).php">Boys</a>
                      
                    <ul class="MenuUnderTabs">
                        
                        <div class="MenuContent">
                       <li><a href="Boys_Shirt(User).php">Shirts</a></li>
                        <li><a href="Boys_Pants(User).php">Pants</a></li>
                        <li><a href="Boys_Accessories(User).php">Accessories</a></li>
                        </div>
                    </ul>
                    
                    </li>
        
                    <li><a href="Blog(User).php">Blog</a></li>
                    <li><a href="Features(User).php">Features</a></li>
                    <li><a href="Contact(User).php">Contact</a></li>
                    <li><a href="Rating(User).php">Rating</a></li>
                    <li style="padding-left: 40px;"><a href="UserOrderList.php"><i class="far fa-clipboard fa-lg"></i></a></li>
                    <li><a href="cart.php"><i class="fas fa-shopping-cart fa-lg"></i></a></li>
                    <li><a href="EditProfile.php"><i class="far fa-user fa-lg"></i></a></li>
                    <li class="Sign"><a class="InUp" href="logout.php">Sign Out</a></li>
                    
                </ul>
                
            </nav>
        
            
        </div>
        
        

        <div class="Container">
            
            <div class="ContainerText">
                
                <h1>About ARTC Clothing Barnd</h1>
                <p>ARTC is a Malaysian company that ensures it provides casual clothes for all kinds of people.Products include cross-fashion clothing, bags, shoes, etc. In addition to synchronizing with the international, it also cooperates with the brand to design ARTC’S exclusive channel models, which are only sold exclusively in ARTC’S, providing customers with the most complete quality and service.</p>
                
                <p><strong>*</strong> The products sold on the website are 100% genuine products.</p>
                <p><strong>**</strong> They are legally authorized company products and distributors.</p>
                <br>
                
                <h1>We Promise</h1>
                <p>We promise to offer products with fine quality and competitive price. We always upgrade, promote and concentrate on the quality of the products’ ranges. We believe that the best products are expected to represent our customers’ reputation. Therefore, we always emphasize customers’ needs and expectations.</p>
                <br>
                
                <div class="ContainerContent">
                
                <div style="margin-right: 20px;"><h2><i class="fas fa-coins" style="margin-right: 5px;"></i>Affordable Price</h2>
                <p>With free shipping and competitive pricing, we provide our high-quality products for a price and standard unmatched anywhere.</p></div>
                    
                <div  style="margin-right: 20px;"><h2><i class="far fa-thumbs-up" style="margin-right: 5px;"></i>Happy Customers</h2>
                <p>Accuracy, quality and expedience are core to our business and day-to-day operations. We're happy when you're happy.</p></div>
                    
                <div style="margin-right: 20px;"><h2><i class="fas fa-truck" style="margin-right: 5px;"></i>Deliveries</h2>
                <p>As a rule, delivery time are 3 to 5 working days and 7 to 10 working days to West Malaysia and East Malaysia (Sabah, Sarawak and Labuan) respectively after shipping the order</p></div>
               
                </div>
                
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
                <span><i class="fas fa-envelope"></i> &nbsp; info@artc.com</span>
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
</html>



