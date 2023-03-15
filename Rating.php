<!DOCTYPE html>
<?php

	include("data.php");
?>
<html>
<head>
    <title>Rating</title>
    <link rel="stylesheet" href="Rating.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> 
</head>

    <body> 
        
        <div class="MenuBar">
        
            <nav>
                
                <ul class="MenuTabs">
                    <li><p class="logo">ARTC</p></li>
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
	  <div style="margin-left: 2.5%; margin-top: 4%;">
       <h1 style="color: #463F3A;">Give us your Comments and rating </h1>
       </div>
       
	 
<form action="" method="post" style="margin-left: 2.5%; margin-top: 2%;">
               <div class="field">
                  <input type="text" name="name" placeholder="Your Name" required>
               </div>
               <div class="field">
                  <input type="email" name="email" placeholder="Email Address" required>
               </div>
               <div class="field textarea">
                  <textarea cols="30" rows="10" name="comment" placeholder="Your comments and suggestions will  be greatly appreciated.." required></textarea>
               </div>
    
               <div class="field" style="margin-top: 35px;">
                  <input type="number" name="rating" placeholder="Rate our website from 0-5" max="5" min="0" required>
               </div>
    
               <div class="field">
                  <br><button type="submit" name="send" >Send</button>
               </div>
            </form>
      
        <?php

if(isset($_POST['send'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
    $rating = $_POST['rating'];
	
	
	$insert =" INSERT INTO rating(name,email,comment,rating) VALUES ('$name',' $email','$comment','$rating')";
	
	$run=mysqli_query($connect,$insert);
	
	if($run==1){
	echo"<script> alert('Thankyou for your Feedback!');location='rating.php'</script>";
	}
	else{
		echo"<script> alert('Sorry, Please Try Again');location='rating.php'</script>";
		exit();
	}	
}

?>
        
        
        
        <div class="ViewRating" style="margin-left: 3%; ">
        
            <div>
            <h1 style="color: #463F3A;">View Ratings and Comments :- </h1>
            </div>
            
            <?php
            
            $ratings = "select * from rating ";
            $result = $connect->query($ratings);
            
            if(mysqli_num_rows($result) > 0){
                
            while($row = $result->fetch_assoc()){ 
                
                    echo '<div class="ratingRecord">';
                
                    echo '<p style="font-weight: bold;">Email : </p>';
                    echo '<p>'.$row['email'].'</p>';
                  
                    echo '<p style="font-weight: bold;">Comment : </p>';
                    echo '<p>'.$row['comment'].'</p>';
                     
                    echo '<p style="font-weight: bold;">Rating : </p>';
                    echo '<p>'.$row['rating'].'/5</p>';
                    
                    echo '</div>';
        }
                  
                
                
            }else{
                
                ?>
            
                <p style="font-size: 20px; color: #463F3A;">0 results</p>
            
            <?php
            } $connect->close();
            
            
            ?>
        
        
        
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





	
