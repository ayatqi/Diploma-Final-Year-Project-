        <?php

$connect= mysqli_connect("localhost","root","","onlineclothingsystem") or die("connection failed:".mysqli_error());

if(isset($_REQUEST['SignIn']))
{
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$result = mysqli_query($connect,"select* from user where email='$email'and password='$password'");
$count=mysqli_fetch_array($result);
$select = "SELECT * FROM user  WHERE email = '$email' ";
$run = mysqli_query($connect,$select);
$row= mysqli_fetch_array($run);
$id=$row['id'];


if($password === $row['password']){
    if($count)
{
	if(isset($_REQUEST["remember"]) && $_REQUEST["remember"]==1)
	setcookie("userid",$id,time()+3600);// second on page time 
else
	setcookie("userid",$id,time()+60);
    
	header("location: Landing_Page.php"); 
	
	
}}
    

else
{
    
	echo "<script>alert('Wrong Password or Email.');</script>";
	
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>SignIn</title>
    <link rel="stylesheet" href="SignInStyle.css">
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
                    <li class="Sign" ><a style=" width:105px;" class="InUp" href="SignIn.php">SignIn / SignUp</a></li>
                    
                </ul>
                
            </nav>
        
            
        </div>
        
        
<div class="Conatiner">
    <div class="wrapper" style="height: 370px;">

    
     <div class="form-container" >

         
         <h1>Sign-In</h1>

         <div class="formInner">
   
   
             <form class="signin" action="SignIn.php" method="post" style="height: 270px; ">
                 
                 <div class="field">
                     <input style="width: 340px;" type="email" name="email" placeholder="Email Address" pattern="^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$" required>
                 </div>
                 
                 <div class="field">
                     <input style="width: 340px;"  type="password" name="password" placeholder="Password" required>
                 </div>
                 
                <div style="margin-top : 10px; font-size:12px;"><input type="checkbox" value="1" name="remember">keep me Sign-in:</div>
                 
                 <div class="password-link" >
                 <a href="#">Forgot Password?</a>
                 </div>
                 
                 <div class="field">
                    <input style="width: 355px;"  type="submit" name="SignIn" value="Sign-in">
                     
                 </div>
                 
                 <div class="signup-link" style="display: inline-block; margin-top : 20px; ">
                    Not a member? <a href="SignUpPage.php">Sign-up Now</a>
                 </div>
                 
             </form>
             
  
         </div>
        
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