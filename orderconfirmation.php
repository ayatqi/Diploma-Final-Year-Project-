<?php

if(!isset($_COOKIE["userid"]))// $_COOKIE is a variable and login is a cookie name 

	header("location:SignIn.php"); 	
	
?>
<?php

 include("data.php"); 

if(isset($_POST['proceed'])){
	
	$orderID = $_POST['orderid'];
	echo '<script>window.location="uploadTransaction.php?orderid='.$orderID.'"</script>';
	
	
}	
	
	$orderID = $_GET['orderid'];

	$query = "SELECT order_ID , customer_Name , customer_Email, customer_Address, customer_Phone, payment_Type ,modified_date
				,GROUP_CONCAT(product_ID) AS product_ID, GROUP_CONCAT(product_Name) as product_Name 
				, GROUP_CONCAT(product_Quantity) as product_Quantity , GROUP_CONCAT(product_Price) as product_Price 
				FROM onlineclothingsystem.order WHERE order_ID = $orderID";
	$result = $connect->query($query);
	
	 if ($result->num_rows > 0) {
		 foreach($result as $row){
			 

?>
<!DOCTYPE html>  
 <html>
 <head>  
  
           <title>Order Confirmation</title>  
		   <link rel="stylesheet" href="view_product.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> 
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
                    <li class="Sign"><a class="InUp" href="logoutOrderconfirmation.php">Sign Out</a></li>
                    
                </ul>
                
            </nav>
        
            
        </div>
				
  
			<div class="billing-info" style="margin:auto; align:center;">
			<form id="billingform" action="" method="post" onSubmit="return confirm('Are you sure want to proceed the order?');">
								<h2 align="center"><strong>ORDER SUMMARY</strong></h2>
								<h3><strong>Billing Details</strong></h3>
								<h4>Full Name : <?php echo $row['customer_Name'];?> </h4>
								<h4>Email : <?php echo $row['customer_Email'];?></h4>
								<h4>Address : <?php echo $row['customer_Address'];?></h4>
								<h4>Phone : <?php echo $row['customer_Phone'];?></h4>
								
								<h3><strong>Order Details</strong></h3>
								<h4>Order Time: </h4>
								<p style="color:#0e49eb;"><strong>&nbsp&nbsp<?php echo $row['modified_date'];?></strong></p>
								
								
								<h4>Product Quantity &nbsp&nbsp&nbsp Product Name &nbsp&nbsp&nbsp Product Price </h4>
							
								<?php 
								
								$product_ID = explode(',', $row['product_ID']);
								$product_name = explode(',', $row['product_Name']);
								$product_quantity = explode(',', $row['product_Quantity']);
								$product_price = explode(',', $row['product_Price']);
								$total = 0;
								foreach ($product_ID as $index => $pID){
									
									echo '<p style="color:#0e49eb;"><strong>&nbsp&nbsp'.$product_quantity[$index]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
									echo $product_name[$index]." &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRM";
									echo $product_price[$index]. '</strong></p><br />';
									
									
									$total = $total + ($product_quantity[$index]*$product_price[$index]);
									
								
									
								}
			
									
								
								
									?>
						
								
								<h4 style="color:#0e49eb;"><strong>&nbsp&nbsp<?php echo 'Total : RM '; echo number_format($total, 2);?><strong></h4>
								
								
								<h3><strong>Payment</strong></h3>
								<h4>Payment Type: </h4>
								<p style="color:#0e49eb;"><strong>&nbsp&nbsp<?php echo $row['payment_Type'];?></strong></p>
								<h4 style="color:red;"><strong>Please Do A Transaction To This Account Number</strong></h4>
								<p style="color:#0e49eb;"><strong>Bank Name : CIMB BANK</strong></p>
								<p style="color:#0e49eb;"><strong>Bank Account Number : 123456789</strong></p>
								
							
								
								
								
							
				
				<?php 
		 }
	 }
				
				?>
					
           </div>  
				
			<input type="hidden" name="orderid" value="<?php echo $orderID;?>" id="orderid">
			<input type="submit" class="button" name="proceed" value="Proceed" style="background-color:#463F3A; color:white; margin-top:30px; margin-bottom:10px;padding:10px; width:150px;">
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