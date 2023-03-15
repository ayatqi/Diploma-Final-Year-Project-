<?php 

if(!isset($_COOKIE["userid"]))// $_COOKIE is a variable and login is a cookie name 

	header("location:SignIn.php"); 

?>
<!DOCTYPE html>
<html>

<head>
    <title>Girls Menu</title>
    <link rel="stylesheet" href="Menu(User).css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> 
</head>
<script src="https://kit.fontawesome.com/cff205d073.js" crossorigin="anonymous"></script>

     <body> 
        
 <div class="MenuBar">
        
            <nav>
                
                <ul class="MenuTabs">
                    <li style="margin-top:25px;"><a style="font-size: 24px;" class="logo" href="Main.php">ARTC</a></li>
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
                    <li class="Sign"><a class="InUp" href="logoutGirls_Menu.php">Sign Out</a></li>
                    
                </ul>
                
            </nav>
        
            
        </div>
        
        
        <div class="Slider">
            
            <div class="MySlider fade" style="display: block">
                
                <div class="text" style="top: 20%;">
                    <p style="font-size: 40px; text-align: center;color: #C4E9E4; font-family: Lucida Handwriting;">Modern</p>
                    
                    <h1 style=" font-size:50px; color: #fff; letter-spacing: 5px; font-family: Browallia New;">Girls World.</h1>
                    
                    <button style="background-color: #E0AFA0; font-size: 18px;"> Shop Now</button>
                </div>
                <img src="Images/Girls/Girl4.jpg" alt="" width="100%" height="625px">
            
            </div>
            
            <div class="MySlider fade">
                
                <div class="text" style="top: 20%;">
                    <h1 style="font-size: 48px;color: #fff; letter-spacing: 5px; font-family: Browallia New; border-left: 4px solid #3E503C; padding-left: 15px;">Unlock <br><br> Your Styles </h1>
                    
                    <button style="font-size: 18px; margin-top: 15px; display: inline; background-color: #3E503C; color: #F3ECDB;"> Shop Now</button>
                </div>
                <img src="Images/Girls/Girl7.jpg" alt="" width="100%" height="625px">
            
            </div>
            
            <div class="MySlider fade">
                
                <div class="text" style=" left: 10%; top:30%;">
                    
                    <p style="font-size: 26px; text-align: center; font-family: Lucida Handwriting;">Trend desgin!</p>
                    
                    <h1 style="color: #fff; letter-spacing: 5px; font-family: Verdana, sans-serif;">GIRLS COLLECTION</h1>
                    
                    <button style="font-size: 18px; color:#fff; background-color: #E0AFA0;"> Shop Now</button>
                </div>
                <img  src="Images/Girls/Girl9.jpg" alt="" width="100%" height="625px">
            
            </div>
            
            <div class="MySlider fade">
                
                <div class="text" style="top: 15%;">
                    <h1 style="font-size: 48px;color: #fff; letter-spacing: 5px; font-family: Browallia New; border-left: 2px solid #463F3A; padding-left: 15px;">NEW <br><br> COLLECTION <br><br> 2021 </h1>
                    
                    <p style="font-size: 16px; text-align: center; font-family: Luminari; max-width: 400px; ">Like to welcome summer rain, humor may suddenly cleanse and cool the air and you.</p>
                    
                    
                    <button style="font-size: 18px; margin-top: 15px; display: inline; background-color: #463F3A;"> Shop Now</button>
                    
                </div>
                <img src="Images/Girls/Girl5.jpg" alt="" width="100%" height="625px">
            
            </div>
            
            <a class="prev-slide" onclick="nextSlide(-1)">&#10094;</a>
            <a class="next-slide" onclick="nextSlide(1)">&#10095;</a>
            
            <div class="radiobox" style="text-alig: center;">
                
                <span class="radio" onclick="CurrentSlide(1)"></span>
                <span class="radio" onclick="CurrentSlide(2)"></span>
                <span class="radio" onclick="CurrentSlide(3)"></span>
                <span class="radio" onclick="CurrentSlide(4)"></span>
                
            </div>
        
        </div>
        
        
        <script type="text/javascript">
            
            const myslide = document.querySelectorAll('.MySlider');
            const radio = document.querySelectorAll('.radio');
            
            let counter = 1;
            slidenext(counter)
            
            let timer = setInterval(autoSlide, 8000);
            
            function autoSlide() {
                
               counter += 1;
                slidenext(counter);
            }
            
            function nextSlide(n) {
                counter += n ; 
                slidenext(counter);
                resetTimer();
            }
            
            function prevSlides(n) {
                counter = n - 1; 
                slidenext(counter);
                resetTimer();
            }
            
            
            function CurrentSlide(n) {
                counter = n;
                slidenext(counter);
                resetTimer();
            }
            
            function resetTime() {
                
                clearInterval(timer);
                timer = setInterval(autoSlide, 8000);
            }
            
            
            function slidenext(n) {
                
                let i;
                for(i=0; i<myslide.length; i++){
                    myslide[i].style.display = "none";
                }
                for(i=0; i<radio.length; i++){
                    radio[i].classList.remove('active');
                }
                if(n > myslide.length){
                    counter = 1;
                }
                if(n < 1){
                    counter = myslide.length;
                }
                myslide[counter  - 1].style.display = "block";
                radio[counter - 1].classList.add('active');
            
            }
        
        </script>
        
        
    
                
        <div  class="Container-images">
                
            <div>
                <div>
                    <img src="Images/Girls/Girl11.jpg" width="100%" height="100%">
                    <a href="Girls_Shirt(User).php"><button class="imagebtn" style="font-size: 18px; right: 77.05%; ">Shirts</button></a>
                </div>
                <div>
                    <img src="Images/Girls/Girl12.jpg" width="100%" height="100%">
                    <a href="Girls_Accessories(User).php"><button class="imagebtn" style="font-size: 18px; right: 52.15%;">Accessories</button></a>
                </div>
                <div>
                    <img src="Images/Girls/Girl8.jpg" width="100%" height="100%">
                    <a href="Girls_Pants(User).php"><button class="imagebtn" style="font-size: 18px; right: 27.3%;">Pants</button></a>
                </div>
                <div>
                    <img src="Images/Girls/Girl10.jpg" width="100%" height="100%">
                    <a href="Girls_Dress(User).php"><button class="imagebtn" style="font-size: 18px; right: 2.55%;">Dresses</button></a>
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