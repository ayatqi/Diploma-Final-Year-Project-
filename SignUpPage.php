<?php include("data.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>SignUp</title>
    <link rel="stylesheet" href="SignInStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> 
    <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
 </head>
    
    <body>
 
      <div class="MenuBar">
        
            <nav>
                
                 <ul class="MenuTabs">
                    <li style="margin-top:1%;"><p class="logo">ARTC</p></li>
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
    <div class="wrapper" style="height: 600px;">
        
 
    
     <div class="form-container">
         

         <h1>Sign-Up</h1>
         <div class="formInner">

              <form class="signup" action="SignUpPage.php" method="post">
                 
                 <div class="field">
                     <input style="width: 340px;"  type="email" name="email" placeholder="Email Address"  pattern="^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$" required>
                 </div>
                 <div class="field">
                     <input style="width: 340px;"  type="text" name="firstName" placeholder="First Name" required>
                 </div>
                  
                  <div class="field">
                     <input style="width: 340px;"  type="text" name="lastName" placeholder="Last Name" required>
                 </div>
                 
                  <div class="field">
                     <input style="width: 340px;"  type="text" name="username" placeholder="Username" required>
                 </div>
                  
                  <p style="font-size: 12px; color: #5d4436; margin-top:20px; margin-bottom:0;">Format: 1234567890</p>
                  <div class="field" style="margin-top:0;">
                     <input style="width: 359px; height: 42px; padding-left:50px;"  type="tel" name="phoneNo"  id="phone" class="phoneNo" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" required>
                 </div>

                 <div class="field">
                     <input style="width: 340px;"  type="password" name="password" placeholder="Password" required>
                 </div>
                  
                 <div class="field">
                     <input style="width: 340px;"  type="password" name="Confirmpassword" placeholder="Confirm Password" required>
                 </div>
                 
                 
                 <div class="field">
                     <input style="width: 355px;"  type="submit" value="Signup" name="SignUp">
                 </div>
                
                  <div class="signup-link" style="display: inline-block; margin-top : 20px; ">
                    Already member? <a href="SignIn.php">Sign-In</a>
                 </div>
                 
             </form>
         
             <div class="alert alert-info" style="display: none"></div>
             <div class="alert alert-error" style="display: none"></div>
             
         </div>
        
     </div>
        
    </div>
   </div>
        
<?php

if(isset($_POST['SignUp'])){


$connect = mysqli_connect("localhost","root","","onlineclothingsystem");

	$username = $_POST["username"];
	$email = $_POST["email"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phoneNo = $_POST["phoneNo"];
	$password = $_POST["password"];
	$con_pass = $_POST["Confirmpassword"];
     
    
    if($password != $con_pass)
  {
    ?>
      <script>
        alert("Wrong Password. Please type again.");
        location='SignUpPage.php';
      </script>
    <?php
  }
    

        $sql="select * from user where ( email = '$email');";
        $res=mysqli_query($connect,$sql);
    
        $sql2="select * from user where (  username = '$username');";
        $res2=mysqli_query($connect,$sql2);
    
        $sql3="select * from user where (  phoneNo = '$phoneNo');";
        $res3=mysqli_query($connect,$sql3);
    
    
        if (mysqli_num_rows($res) > 0 && mysqli_num_rows($res2) > 0 && mysqli_num_rows($res3) > 0) {
       
	     echo"<script> alert('Email, Username and Phone number already exists');location='SignUpPage.php'</script>";
		
        }
        else if (mysqli_num_rows($res) > 0 && mysqli_num_rows($res2) ) {
       
	     echo"<script> alert('Email and Username  already exists');location='SignUpPage.php'</script>";
		
        }
        else if ( mysqli_num_rows($res2) > 0 && mysqli_num_rows($res3) > 0) {
       
	     echo"<script> alert('Username and Phone number already exists');location='SignUpPage.php'</script>";
		
        }
        else if ( mysqli_num_rows($res) > 0 && mysqli_num_rows($res3) > 0) {
       
	     echo"<script> alert('Email and Phone number already exists');location='SignUpPage.php'</script>";
		
        }
        else if (mysqli_num_rows($res) > 0) {
       
	     echo"<script> alert('Email already exists');location='SignUpPage.php'</script>";
		
        }
    
         else if (mysqli_num_rows($res2) > 0) {
       
	     echo"<script> alert('Username already exists');location='SignUpPage.php'</script>";
		
        }
    
         else if (mysqli_num_rows($res3) > 0) {
       
	     echo"<script> alert('Phone number already exists');location='SignUpPage.php'</script>";
		
        }
        else{
            
	   mysqli_query($connect,"INSERT INTO user(username,firstName,lastName, email,phoneNo, password)
  		     VALUES ('$username','$firstName','$lastName', '$email','$phoneNo','$password')");
      
      ?>
        <script>
        alert("Account has been created. Sign-In to access your account!! ;)");
        location='SignIn.php';
      </script>

<?php
    
}
}
?> 


      
  
    

      

    <script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",});
        
 </script>
        
        <script>
        
                    
         const signinText = document.querySelector(".title-text .signin");
         const signinForm = document.querySelector("form.signin");
         const signinBtn = document.querySelector("label.signin");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
            
         signupBtn.onclick = (()=>{
             
           signinForm.style.marginLeft = "-50%";
           signinText.style.marginLeft = "-50%";
             
         });
            
         signinBtn.onclick = (()=>{
             
           signinForm.style.marginLeft = "0%";
           signinText.style.marginLeft = "0%";
             
         });
            
         signupLink.onclick = (()=>{
             
           signupBtn.click();
           return false;
             
         });
            
         
        
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