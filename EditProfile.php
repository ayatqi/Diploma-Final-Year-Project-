<?php 
$userid=$_COOKIE['userid'];

if(!isset($_COOKIE["userid"])){
    header("location:SignIn.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="EditProfile.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
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
                    <li class="Sign"><a class="InUp" href="logoutEditProfile.php">Sign Out</a></li>
                    
                </ul>
                
            </nav>
        
            
        </div>
        
        <div class="Container" style="height: 700px;">
            
          <div class="ContainerText">
                
              <h1>Edit Profile</h1>
<?php
    $connect= mysqli_connect("localhost","root","","onlineclothingsystem") or die("connection failed:".mysqli_error());
              
    $select = "SELECT * FROM user WHERE id = '$userid' ";
    $run = mysqli_query($connect,$select);
    $row= mysqli_fetch_array($run);
    $email=$row['email'];
    $username=$row['username'];
    $firstName=$row['firstName'];
	$lastName=$row['lastName'];
	$phoneNo=$row['phoneNo'];
	$address=$row['address'];
	$password=$row['password'];      
              
?>
    <form class="ProfileInfo" method="post">
                
                <h2>Personal Information</h2>
               
                <div class="field">
                     <p>Username :</p>
                     <input style="width: 300px; margin-left: 37px;"  type="text" name="username" value="<?php echo $username;?>" required>
                 </div>
                
                 <div class="field">
                     <p>Email :</p>
                     <input style="width: 300px; margin-left: 65px;" type="text" name="email" value="<?php echo $email;?>" pattern="^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$"  required>
                 </div>
                
                 <div class="field">
                     <p>First Name :</p>
                    <input style="width: 300px; margin-left: 30px;" type="text" name="firstName" value="<?php echo $firstName;?>" required>
                 </div>
                  
                  <div class="field">
                     <p>Last Name :</p>
                     <input style="width: 300px; margin-left: 34px;"  type="text" name="lastName" value="<?php echo $lastName;?>"  required>
                 </div>
                 
                    <p style=" margin-left: 195px; font-size: 12px; color: #5d4436; margin-top:20px; margin-bottom:0;">Format: 1234567890</p>    
                  
                  <div class="field" style="margin-top: 0;">
                    <p>Phone Number :</p>
                     <input style="width: 320px; height: 43px; margin-left: 5px;" id="phone" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" type="tel" name="phoneNo" value="<?php echo $phoneNo;?>"  required>
          
                 </div>
                 
                
                  <div class="field">
                     <p>Address :</p>
                     <input style="width: 300px; margin-left: 50px;"  type="text" name="address" value="<?php echo $address;?>"  required>
                 </div>
                
                 <div class="field">
                     <p>Password :</p>
                     <input style="width: 300px; margin-left: 40px;"  type="password" name="password"  value="<?php echo $password;?>"  required>
                 </div>
                
                
              <button type="submit" name="editbtn" class="subBtn">Update</button>
              
            </form>
              
  
            
    <script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",});
        
 </script></div>
            
<?php

if(isset($_POST['editbtn'])){
	
    
	$Username=$_POST['username'];
    $Email=$_POST['email'];
	$FirstName=$_POST['firstName'];
	$LastName=$_POST['lastName'];
	$PhoneNo=$_POST['phoneNo'];
	$Address=$_POST['address'];
	$Password=$_POST['password'];
	
	
        $sql="select * from user where ( email = '$Email' && id !='$userid' );";
        $res=mysqli_query($connect,$sql);
    
        $sql2="select * from user where (  username = '$Username' && id !='$userid');";
        $res2=mysqli_query($connect,$sql2);
    
        $sql3="select * from user where (  phoneNo = '$PhoneNo' && id !='$userid');";
        $res3=mysqli_query($connect,$sql3);
    
    
        if (mysqli_num_rows($res) > 0 && mysqli_num_rows($res2) > 0 && mysqli_num_rows($res3) > 0) {
       
	     echo"<script> alert('Email, Username and Phone number already exists');location='EditProfile.php'</script>";
		
        }
        else if (mysqli_num_rows($res) > 0 && mysqli_num_rows($res2) ) {
       
	     echo"<script> alert('Email and Username  already exists');location='EditProfile.php'</script>";
		
        }
        else if (mysqli_num_rows($res2) > 0 && mysqli_num_rows($res3) > 0) {
       
	     echo"<script> alert('Username and Phone number already exists');location='EditProfile.php'</script>";
		
        }
        else if (mysqli_num_rows($res) > 0 && mysqli_num_rows($res3) > 0) {
       
	     echo"<script> alert('Email and Phone number already exists');location='EditProfile.php'</script>";
		
        }
        else if (mysqli_num_rows($res) > 0) {
       
	     echo"<script> alert('Email already exists');location='EditProfile.php'</script>";
		
        }
    
         else if (mysqli_num_rows($res2) > 0) {
       
	     echo"<script> alert('Username already exists');location='EditProfile.php'</script>";
		
        }
    
         else if (mysqli_num_rows($res3) > 0) {
       
	     echo"<script> alert('Phone number already exists');location='EditProfile.php'</script>";
		
        }
        else{
            
        $update =" UPDATE user SET username='$Username', email = '$Email',firstName='$FirstName' , lastName='$LastName',  phoneNo='$PhoneNo' , address='$Address' , password='$Password'  WHERE id='$userid' ";
        
        $run = mysqli_query($connect,$update);
            
	   echo"<script> alert('New Data Has Been Stored');location='EditProfile.php'</script>";
	}
}

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