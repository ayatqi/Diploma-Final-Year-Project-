<?php 
$userid=$_COOKIE['userid'];
if(!isset($_COOKIE["userid"]))// $_COOKIE is a variable and login is a cookie name 

	header("location:SignIn.php"); 

?>    <?php   
 session_start();  
 require_once ("data.php");
 
 
 if(isset($_GET["action"]))  
 {  
 if($_GET["action"] == "add")  
 {  
	if (isset($_GET['product_ID']) && $_GET['product_ID']!=""){
				
						
					$code =  $_GET["product_ID"];
						
					$sql ="SELECT * FROM product WHERE product_ID = $code ";
					
					$result = mysqli_query($connect,$sql);
					$row = mysqli_fetch_assoc($result);
					$product_Name = $row['product_Name'];
					$product_ID = $row['product_ID'];
					$product_Price = $row['product_Price'];
					$productQuantity = $_POST["product_Quantity"];
					$productQ = $row['product_Quantity'];
					$productD = $productQ - $productQuantity;
					
					$itemArray = array($code=>array(
									'product_Name'=>$product_Name,
									'product_ID'=>$product_ID,
									'product_Quantity'=>$_POST["product_Quantity"],
									'product_Price'=>$product_Price));

					if(empty($_SESSION["shopping_cart"])) {
						
						if($productD>=0){
							$_SESSION["shopping_cart"] = $itemArray;
							 echo '<script>alert("Item Added")</script>';
						
							 
							 $sql = "UPDATE product SET product_Quantity = $productD WHERE product_ID = $product_ID";

								if ($connect->query($sql) === TRUE) {
								  echo "Record updated successfully";
								} else {
								  echo "Error updating record: " . $connect->error;
								}
							 echo '<script>window.location="cart.php"</script>';  
						}else{
							echo '<script> alert("Not enough stock!");</script>';  
						}
						}else{
							$array_keys = array_keys($_SESSION["shopping_cart"]);
							if(in_array($code,$array_keys)) {
							 echo '<script>alert("Item Already Added")</script>';
							 echo '<script>window.location="cart.php"</script>';  
							} else {
							$_SESSION["shopping_cart"] = array_merge(
							$_SESSION["shopping_cart"],
							$itemArray
							);
							 echo '<script>alert("Item Added")</script>';
							  $sql = "UPDATE product SET product_Quantity = $productD WHERE product_ID = $product_ID";

								if ($connect->query($sql) === TRUE) {
								 // echo "Record updated successfully";
								} else {
								  echo "Error updating record: " . $connect->error;
								}
								echo '<script>window.location="cart.php"</script>';  
							}

							}
					
	}
 }
 }
if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["product_ID"] == $_GET["product_ID"])  
                {  
			
				
                     unset($_SESSION["shopping_cart"][$keys]);  
					 
					$code = $_GET["product_ID"]; 
					$sql ="SELECT * FROM product WHERE product_ID = $code ";
					
					$result = mysqli_query($connect,$sql);
					$row = mysqli_fetch_assoc($result);
					
					$productQuantity = $_GET["productQuantity"];
					$productQ = $row['product_Quantity'];
					$productD = $productQ + $productQuantity;
					
					
					$update = "UPDATE product SET product_Quantity = $productD WHERE product_ID = $code";

								if ($connect->query($update) === TRUE) {
								 // echo "Record updated successfully";
								} else {
								  echo "Error updating record: " . $connect->error;
								}
			
					 
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
					 
					 
					
                }  
           }  
      }  
 }  
 
  if(isset($_POST['checkout'])){
	 
	 $customerName = $_POST['bname'];
	 $customerEmail = $_POST['bemail'];
	 $customerAddress = $_POST['baddress'];
	 $customerPhone = $_POST['bphone'];
	 $paymentType = $_POST['btype'];
	 
	 $userid = $_COOKIE['userid'];
	 
	$query = "SELECT COALESCE(MAX(order_ID), 0) + 1 AS newOrderID FROM onlineclothingsystem.order";
	$result = $connect->query($query);
	
	 if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
			 
			 
			 $num = $row['newOrderID'];
			 
		 }
	 }
			 
			 
			 
			 
	 if(isset($_SESSION["shopping_cart"])){
		$total = 0;
		date_default_timezone_set("Asia/Kuala_Lumpur");
		$date = date('Y-m-d H:i:s');
		
	
	 
	 foreach ($_SESSION["shopping_cart"] as $values){
	 
	 $productID = $values["product_ID"];
	 $productName = $values["product_Name"];
	 $productPrice = $values["product_Price"];
	 $productQuantity = $values["product_Quantity"];
	 $total = $total + ($values["product_Quantity"] * $values["product_Price"]);
	 
	 
	 
	 
	 $queryinsert = "INSERT INTO onlineclothingsystem.order (user_ID,order_ID,product_ID,product_Name,product_Price,product_Quantity,product_Total,customer_Name,customer_Email,customer_Address,customer_Phone,payment_Type ,order_status,modified_date) VALUES ('".$userid."','".$num."','". $productID."','". $productName."','". $productPrice."','". $productQuantity."','". $total."','". $customerName."','". $customerEmail."','". $customerAddress."','". $customerPhone."','". $paymentType."','0','".$date."')";

						if ($connect->query($queryinsert) === TRUE) {
							
								   echo '<script>window.location="orderconfirmation.php?orderid='.$num.'"</script>';
								} else {
									
									$code = $productID; 
									$sql ="SELECT * FROM product WHERE product_ID = $code ";
									
									$result = mysqli_query($connect,$sql);
									$row = mysqli_fetch_assoc($result);
									
									$productQ = $row['product_Quantity'];
									$productD = $productQ + $productQuantity;
									
									
									$update = "UPDATE product SET product_Quantity = $productD WHERE product_ID = $code";

												if ($connect->query($update) === TRUE) {
												 // echo "Record updated successfully";
												} else {
												  echo "Error updating record: " . $connect->error;
												}
													
													
										echo '<script>window.location="processingfailed.php"</script>';
									 echo "Error updating record: " . $connect->error;
									
									
								}
	 
			}
		}
	 
	 
	 
	 
	 unset($_SESSION['shopping_cart']);
	
 }
 
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
  
           <title>Shopping Cart</title>  
		   <link rel="stylesheet" href="view_product.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> 
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
         
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
                    
                    <li style="padding-left: 40px;"><a style=" padding: 0 14px;" href="UserOrderList.php"><i class="far fa-clipboard fa-lg"></i></a></li>
                    <li><a style=" padding: 0 10px;" href="cart.php"><i class="fas fa-shopping-cart fa-lg"></i></a></li>
                    <li><a style=" padding: 0 10px;"href="EditProfile.php"><i  class="far fa-user fa-lg"></i></a></li>
                    <li class="Sign" style="left: 40px;"><a class="InUp" href="logoutcart.php" style="width:52px; font-size: 13px;">Sign Out</a></li>
                    
                </ul>
                
            </nav>
        
            
        </div>
           <div class="cart" style="margin-top: 45px; margin-left: 20px; ">  
                <h3 align="center" style="font-size: 30px; color:#463F3A;">Shopping Cart</h3><br />  
                <div style="clear:both"></div>  
                <h3>Order Details</h3>  
				
			<?php	if(isset($_SESSION["shopping_cart"])){
			$total = 0;
			?>
                <div class="table-responsive">  
                     <table class="table">  
                          <tr>  
                               <td width="10%" >Item Name</td>  
                               <td width="10%">Quantity</td>  
                               <td width="10%">Price</td>  
                               <td width="10%">Total</td>  
                               <td width="5%">Action</td>  
                          </tr>  
                          <?php   
							foreach ($_SESSION["shopping_cart"] as $values){
							
                          ?>  
                          <tr>  
                               <td><?php echo $values["product_Name"]; ?></td>  
                               <td><?php echo $values["product_Quantity"]; ?></td>  
                               <td>RM <?php echo $values["product_Price"]; ?></td>  
                               <td>RM <?php echo number_format($values["product_Quantity"] * $values["product_Price"], 2); ?></td>  
                               <td><a href="cart.php?action=delete&product_ID=<?php echo $values["product_ID"]; ?>&productQuantity=<?php echo $values["product_Quantity"];?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["product_Quantity"] * $values["product_Price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right"><strong>Total</strong></td>  
                               <td align="right"><strong>RM <?php echo number_format($total, 2); ?></strong></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }else{

							echo'<p style="margin:50px;"><strong>Your Cart Is Empty!</strong></p>';
						  }							  
                          ?>  
                     </table>  
                </div>  				
				
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
	$Address=$row['address'];         
?>		
		
          
			<div class="billing-info">
			<form id="bullingform" action="" method="post" onSubmit="return confirm('Are you sure want to confirm the order?');">
								<h3>Billing Address</h3>
								<label for="bname">Full Name</label>
								<input style="width: 99%;" type="text" id="bname" name="bname" placeholder="Please Fill In Your Name" value="<?php echo $FirstName; ?> <?php echo $LastName;?>" required>
                
								<label for="bemail">Email</label>
								<input style="width: 99%;"  type="email" id="bemail" name="bemail" placeholder="Please Fill In Your Email" required pattern="^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$" value="<?php echo $Email;?>">
                
								<label for="baddress">Address</label>
								<input style="width: 99%;"  type="text" id="baddress" name="baddress" placeholder="Please Fill In Your Full Address" required value="<?php echo $Address;?>">
                
								<label for="bphone">Phone</label>
                                <p style="font-size: 14px; color: #5d4436; margin:0;">Format: 1234567890</p>
								<input style="width: 99%;"  type="text" id="bphone" name="bphone" placeholder="Please Fill In Your Phone Number" required pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" value="<?php echo $PhoneNo;?>">
                
									<h3>Payment</h3>
								<label for="btype">Payment Type</label>
								<br>
								<input type="radio" id="btype" name="btype" value="ONLINE PAYMENT" style="margin-bottom:50px;" required checked> <strong>ONLINE PAYMENT</strong>
								<br>
								<label for="acc">Please Do A Transaction To This Account Number</label>
								<br>
								
								<p><strong>Bank Name : CIMB BANK</strong></p>
								<p><strong>Bank Account Number : 123456789</strong></p>
								<br>
								<p><strong>Thank You</strong></p>
								
							
				
				
					
           </div>  
				
		
			<input type="submit" class="button" name="checkout" value="Checkout" style="background-color:#463F3A; color:white; margin-top:30px; margin-bottom:10px;padding:10px; width:150px;">
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
   