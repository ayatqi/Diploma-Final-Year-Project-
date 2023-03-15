<?php

if(!isset($_COOKIE["userid"]))// $_COOKIE is a variable and login is a cookie name 

	header("location:SignIn.php"); 
	
	
?>
<?php

 include("data.php"); 
 
 
	$userID = $_COOKIE["userid"];
	
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$date = date('Y-m-d H:i:s');
	
	
	$delete = "DELETE FROM onlineclothingsystem.order WHERE order_status = 0 AND modified_date < ADDTIME(now(), '-48:00:00')";
	
	if ($connect->query($delete) === TRUE) {
							
								  // echo 'Delete Done';
								} else {
									echo "Error updating record: " . $connect->error;
								}
	
	
	
?>
<!DOCTYPE html>  
 <html>
 <head>  
  
           <title>Order Lists</title>  
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
                    <li class="Sign" style="left: 40px;"><a class="InUp" href="logoutcart.php" style="width:62px; font-size: 13px;">Sign Out</a></li>
                    
                </ul>
                
            </nav>
        
            
        </div>
				
	<h2 align="center" style="margin-bottom: 50px;"><strong>ORDER LIST</strong></h2>
	<h4 align="center" style="color:red;"><strong>Order with unpaid will be delete after 48 hours</strong></h4>

                <div class="table-responsive table-borderless">
                    <table class="table" align="center">
                        <thead style="background: #dddcdc;">
                            <tr>
                                
                                <th>Order ID</th>
								<th>Created</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th></th>
                                <th></th>
								<th></th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
						<?php
						
					$order = "SELECT order_ID , MAX(product_Total) AS product_Total , modified_date , order_status  FROM onlineclothingsystem.order WHERE user_ID = $userID GROUP BY order_ID ORDER BY modified_date desc";
					$result = $connect->query($order);

					if ($result->num_rows > 0) {
  
						while($row = $result->fetch_assoc()) {
						
						
                        echo '<tr class="cell-1">';
                             
                        echo'<td>'.$row["order_ID"].'</td>';
                        echo'<td>'.$row["modified_date"].'</td>';
						
						if($row["order_status"]==0){
							
                            echo'<td><span class="badge badge-success" style="background:#303022; color:white;">Unpaid</span></td>';
							
						}else if($row["order_status"]==1){
							
							 echo'<td><span class="badge badge-success" style="background:#2bc4b5;color:white;">Paid</span></td>';
							 
						}else if($row["order_status"]==2){
							
							 echo'<td><span class="badge badge-success" style="background:red;color:white;">Rejected</span></td>';
							 
						}else if($row["order_status"]==3){
							
							 echo'<td><span class="badge badge-success" style="background:green;color:white;">Accepted</span></td>';
							 
						}else if($row["order_status"]==4){
							
							 echo'<td><span class="badge badge-success" style="background:#1a5ec4;color:white;">On Delivery</span></td>';
							 
						}else if($row["order_status"]==5){
							
							 echo'<td><span class="badge badge-success" style="background:#1ac458;color:white;">Completed</span></td>';
							 
						}
						
                        echo'<td> RM '.$row["product_Total"].'</td>';
						echo'<td><a href="orderview.php?orderid='.$row['order_ID'].'">View</a></td>';
						
						if($row["order_status"]==0){
							
							echo'<td><a href="orderconfirmation.php?orderid='.$row['order_ID'].'" style="color:#383526;">Pay</a></td>';
							echo'<td><a href="remove.php?orderid='.$row['order_ID'].'" style="color:red;">Remove</a></td>';
						}
                        echo'</tr>';
						
			}}else{
				
				echo'<h5 align="center" style="color:blue;"><strong>You Dont Have Any Order !</strong></h4>';
			}
                            ?>
                        </tbody>
                    </table>
                </div>

		   
		   <div class="bottom-nav" style="margin-top: 20px;">
            
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