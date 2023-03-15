<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="MainStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> 
</head>

    <body> 
        
        <div class="MenuBar">
        
            <nav>
                
                <ul class="MenuTabs">
                    <li style="margin-top:25px;"><a style="font-size: 24px;" class="logo" href="Main.php">ARTC</a></li>
                    <li><a href="Main.php">Home</a></li>
                    <li class="Dropdown"><a href="Women_Menu.php">Women</a>
                      
                    <ul class="MenuUnderTabs">
                        
                        <div class="MenuContent" style="background: #F4F3EE; border:none; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.25);">
                        <li><a href="Women_Shirt.php">Shirts</a></li>
                        <li><a href="Women_Pants.php">Pants</a></li>
                        <li><a href="Women_Dress.php">Dresses</a></li>
                        <li><a href="Women_Accessories.php">Accessories</a></li>
                        
                        </div>
                        
                        
                    </ul>
                    
                    </li>
                    <li class="Dropdown"><a href="Men_Menu.php">Men</a>
                      
                    <ul class="MenuUnderTabs">
                        
                        <div class="MenuContent" style="background: #F4F3EE; border:none; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.25);">
                        <li><a href="Men_Shirt.php">Shirts</a></li>
                        <li><a href="Men_Pants.php">Pants</a></li>
                        <li><a href="Men_Accessories.php">Accessories</a></li>
                        </div>
                        
                    </ul>
                    
                    </li>
                    <li class="Dropdown"><a href="Girls_Menu.php">Girls</a>
                      
                    <ul class="MenuUnderTabs">
                        
                        <div class="MenuContent" style="background: #F4F3EE; border:none; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.25);">
                        <li><a href="Girls_Shirt.php">Shirts</a></li>
                        <li><a href="Girls_Pants.php">Pants</a></li>
                        <li><a href="Girls_Dress.php">Dresses</a></li>
                        <li><a href="Girls_Accessories.php">Accessories</a></li>
                        </div>
                    </ul>
                    
                    </li>
                    <li class="Dropdown"><a href="Boys_Menu.php">Boys</a>
                      
                    <ul class="MenuUnderTabs">
                        
                        <div class="MenuContent" style="background: #F4F3EE; border:none; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.25);">
                       <li><a href="Boys_Shirt.php">Shirts</a></li>
                        <li><a href="Boys_Pants.php">Pants</a></li>
                        <li><a href="Boys_Accessories.php">Accessories</a></li>
                        </div>
                    </ul>
                    
                    </li>
        
                    <li><a href="Blog.php">Blog</a></li>
                    <li><a href="Features.php">Features</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li><a href="Rating.php">Rating</a></li>
                    <li class="Sign"><a class="InUp" href="SignIn.php">SignIn / SignUp</a></li>
                    
                </ul>
                
            </nav>
        
            
        </div>
        
        
        <div class="Slider">
            
            <div class="MySlider fade" style="display: block">
                
                <div class="text" style="top: 20%;">
                    <p style="font-size: 40px; text-align: center;color: #C4E9E4; font-family: Lucida Handwriting;">Modern</p>
                    
                    <h1 style=" font-size:50px; color: #fff; letter-spacing: 5px; font-family: Browallia New;">Girl's World.</h1>
                    
                    <button style="background-color: #E0AFA0; font-size: 18px;"> Shop Now</button>
                </div>
                <img src="Images/Girls/Girl4.jpg" alt="" width="100%" height="625px">
            
            </div>
            
            <div class="MySlider fade">
                
                <div class="text" style="top: 20%;">
                    <h1 style="font-size: 48px;color: #fff; letter-spacing: 5px; font-family: Browallia New; border-left: 4px solid #3E503C; padding-left: 15px;">Unlock <br><br> Your Styles </h1>
                    
                    <button style="font-size: 18px; margin-top: 15px; display: inline; background-color: #3E503C; color: #F3ECDB;"> Shop Now</button>
                </div>
                <img src="Images/Women/Woman3.jpg" alt="" width="100%" height="625px">
            
            </div>
            
            <div class="MySlider fade">
                
                <div class="text" style=" left: 50%;">
                    
                    <p style="font-size: 26px; text-align: center; font-family: Lucida Handwriting;">Trend desgin!</p>
                    
                    <h1 style="color: #fff; letter-spacing: 5px; font-family: Verdana, sans-serif;">MEN'S COLLECTION</h1>
                    
                    <button style="font-size: 18px;"> Shop Now</button>
                </div>
                <img  src="Images/Men/Man1.jpg" alt="" width="100%" height="625px">
            
            </div>
            
            <div class="MySlider fade">
                
                <div class="text" style="top: 15%;">
                    <h1 style="font-size: 48px;color: #1A3263; letter-spacing: 5px; font-family: Browallia New; border-left: 2px solid #132F63; padding-left: 15px;">NEW <br><br> COLLECTION <br><br> 2021 </h1>
                    
                    <p style="font-size: 16px; text-align: center; font-family: Luminari; max-width: 400px; ">Like to welcome summer rain, humor may suddenly cleanse and cool the air and you.</p>
                    
                    
                    <button style="font-size: 18px; margin-top: 15px; display: inline; background-color: #FABB5A;"> Shop Now</button>
                    
                </div>
                <img src="Images/Women/Woman1.jpg" alt="" width="100%" height="625px">
            
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
        
        
        <div class="Container">
        
            <div class="Container-text">
                
                <p>Summer Collection</p>
                <h1>Featured Categories</h1>
                <p>Newest Trends from Brand</p>
            
            </div>
        </div>
        
                
        <div  class="Container-images">
                
            <div>
                <div>
                    <img src="Images/Boys/Boy1.jpg" width="100%" height="100%">
                    <button class="imagebtn" style="font-size: 18px;"> Shop Now</button>
                </div>
                <div>
                    <img src="Images/Girls/Girl1.jpg" width="100%" height="100%">
                    <button class="imagebtn" style="font-size: 18px; right: 57%;"> Shop Now</button>
                </div>
                <div>
                    <img src="Images/Men/Man3.jpg" width="100%" height="100%">
                    <button class="imagebtn" style="font-size: 18px; right: 32%;"> Shop Now</button>
                </div>
                <div>
                    <img src="Images/Women/Woman5.jpg" width="100%" height="100%">
                    <button class="imagebtn" style="font-size: 18px; right: 7%;"> Shop Now</button>
                </div>
            </div>
        </div>
        
             <div  class="Container-images">
            
                    <img src="Images/Women/Woman8.jpg" width="100%" height="500px">
              
        </div>
    
           <div class="Container" style="margin-top= 50px;">
        
            <div class="Container-text">
                
                <p>Summer Collection</p>
                <h1>Featured Products</h1>
                <p>Newest Trends from ARTC</p>
            
            </div>
        </div>
        
        
            <div  class="Container-images">
            <div>
                <div>
                    <img src="Images/Girls/Girl2.jpg" width="100%" height="100%">
                    <button class="imagebtn" style="font-size: 18px; right: 57%;"> Shop Now</button>       
                </div>
                <div>
                    <img src="Images/Men/Man2.jpg" width="100%" height="100%">
                    <button class="imagebtn" style="font-size: 18px; right: 32%;"> Shop Now</button>
                    
                </div>
                 <div>
                    <img src="Images/Girls/Girl3.jpg" width="100%" height="100%">
                    <button class="imagebtn" style="font-size: 18px;"> Shop Now</button>
                </div>
                <div>
                    <img src="Images/Women/Woman6.jpg" width="100%" height="100%">
                    <button class="imagebtn" style="font-size: 18px; right: 7%;"> Shop Now</button>
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