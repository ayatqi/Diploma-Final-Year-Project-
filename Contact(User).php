<?php 
$userid=$_COOKIE['userid'];
if(!isset($_COOKIE["userid"]))// $_COOKIE is a variable and login is a cookie name 

	header("location:SignIn.php"); 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="Contact(User).css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> 
<link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
 </head>

    <body style="background-color:#F4F3EE;"> 
        
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
                    <li class="Sign"><a class="InUp" href="logoutContact.php">Sign Out</a></li>
                    
                </ul>
                
            </nav>
        
            
        </div>
        
        <div class="Container">
        
            <div class="Container-text">
                
                
                <h1>Contact Us</h1>
                <p>If you have any inquiry!</p>
            
            </div>
			
			
			
	        
<?php
    $connect= mysqli_connect("localhost","root","","onlineclothingsystem") or die("connection failed:".mysqli_error());
              
    $select = "SELECT * FROM user WHERE id = '$userid' ";
    $run = mysqli_query($connect,$select);
    $row= mysqli_fetch_array($run);
    $Email=$row['email'];
    $FirstName=$row['firstName'];
	$LastName=$row['lastName'];    
	$PhoneNo=$row['phoneNo'];
              
?>		
			<div class="container">
				<div class="row">
				<div class="column">
				  <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Tamarind%20sqaure%20malaysia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-org.net">full house 123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embedded google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
				</div>
				<div class="column">
				<form action="Contact.php" method="post">
					
					<label for="fname">Name</label>
					<input type="text" id="fname" name="name" placeholder="Your name.." value="<?php echo $FirstName; ?> <?php echo $LastName;?>" required>

					<label for="phone" style="display:block; margin-bottom:10px;">Contact Number</label>
                    <p style="font-size: 14px; color: #5d4436; margin:0;">Format: 1234567890</p>
					<input style="width: 290px;" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" type="text" id="phone" name="phone" value="<?php echo $PhoneNo;?>"  required>
                    
                    <br><br>
					<label for="email">Email</label>
					<input type="text" id="email" name="email"  required value="<?php echo $Email;?>"  placeholder="Your email address..">
					
					<label for="subject">Subject</label>
					<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

					<input type="submit" value="Submit" name="send">

					</form>

				</div>
			  </div>
			</div>
		
			
		</div>
			
 <?php


    if(isset($_POST['send'])){
        
  	     $name = $_POST["name"];
    $contactNumber = $_POST["phone"];
	$email = $_POST["email"];
    $subject = $_POST["subject"]; 
        
     mysqli_query($connect,"INSERT INTO contact(name,contactNumber,email,subject)
  		     VALUES ('$name','$contactNumber','$email', '$subject')");
  

	?>

		<script type="text/javascript">
			alert(" Your inquiry is successfully sent.");
		</script>

	<?php


}
    

?>
<script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",});
        
 </script>
                  
			
       
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
                        <i style="margin-top:5px;" class="fas fa-envelope fa-2x"></i>
                        <input type="text">
                    </div>
                
                <span><i class="fas fa-phone"></i> &nbsp; +60 18-293 6294</span>
                <span><i class="fas fa-envelope" ></i> &nbsp; info@artc.com</span>
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