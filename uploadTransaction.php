<?php

if(!isset($_COOKIE["userid"]))// $_COOKIE is a variable and login is a cookie name 

	header("location:SignIn.php"); 
	
	
?>
<?php

 include("data.php"); 

	
	$orderID = $_GET['orderid'];
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$date = date('Y-m-d H:i:s');
	
	
	

	if(isset($_POST["submit"])) {
		
		
	$pic = $_FILES['imagefile']['name'];

	$pic_size = $_FILES['imagefile']['size'];
	$pic_type = $_FILES['imagefile']['type'];
	$pic_temp = $_FILES['imagefile']['tmp_name'];
	$pic_store = "Images/Transaction/".$pic;
	$imageFileType = strtolower(pathinfo($pic_store,PATHINFO_EXTENSION));
	
	
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "pdf" ) {
	echo "<script> alert('Sorry, only JPG, JPEG, PNG & pdf files are allowed.'); </script>";
	
	}else{
	
	move_uploaded_file($pic_temp, $pic_store);
	
	
	
	$query = "UPDATE onlineclothingsystem.order SET transaction = '".$pic."' , order_status = '1' , modified_date ='".$date."' WHERE order_ID = $orderID";
	
				if ($connect->query($query) === TRUE) {
					echo '<script>window.location="processing.php"</script>';
				} else {
					
				echo '<script>window.location="processingfailed.php"</script>';
				  echo "Error updating record: " . $connect->error;
				}
	
	}
	
  } 


?>
<!DOCTYPE html>  
 <html>
 <head>  
  
           <title>Upload Your Transaction Receipt</title>  
		   <link rel="stylesheet" href="view_product.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> 
         
      </head>  
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
                    <li class="Sign" style="left: 40px;"><a class="InUp" href="logoutuploadTransaction.php" style="width:52px; font-size: 13px;">Sign Out</a></li>
                    
                </ul>
                
            </nav>
        
            
        </div>
				
  
			<div class="billing-info" style="margin:auto; align:center;">
			<form id="billingform" action="" method="post" onSubmit="return confirm('Are you sure want to proceed?');" enctype="multipart/form-data">
								<h2 align="center"><strong>Transaction Receipt</strong></h2>
								<label for="imagefile">Please Upload Your Transaction Receipt Here</label>
								<input type="file" name="imagefile" id="imagefile" align="center">		

           </div>  
				
		
			<input type="submit" class="button" name="submit" value="Submit" style="background-color:#463F3A; color:white; margin-top:30px; margin-bottom:10px;padding:10px; width:150px;">
			</form>
		   
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
                        <input type="text" style="height: 11px; width: 250px;">
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
	  

	  
 </html>