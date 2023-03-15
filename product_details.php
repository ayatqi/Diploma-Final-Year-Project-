<?php 

if(!isset($_COOKIE["userid"]))// $_COOKIE is a variable and login is a cookie name 

	header("location:SignIn.php"); 

?>
<?php include ("data.php") 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
	<link rel="stylesheet" href="Contact(User).css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> 
	<link rel="stylesheet" href="fontawesome.css">
    <link rel="stylesheet" href="tooplate-main.css">
    <link rel="stylesheet" href="owl.css">
    <link rel="stylesheet" href="flex-slider.css">
	<link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> 
</head>

    <body style="background-color:#F4F3EE;"> 
        
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
                    <li><a href="cart.php"><i class="fas fa-shopping-cart fa-lg"></i></a></li>
                    <li><a href="EditProfile.php"><i class="far fa-user fa-lg"></i></a></li>
                    <li class="Sign" style="left: 40px;"><a class="InUp" href="logoutproduct_details.php" style="width:82px; font-size: 13px;">Sign Out</a></li>
                    
                </ul>
                
            </nav>
        
            
        </div>
		<?php 
		
		
		$product_ID = $_GET['product_ID'];
		$product = "SELECT * FROM product WHERE product_ID = $product_ID";
		$result = $connect->query($product);
		
		if ($result->num_rows > 0) {
  
				while($row = $result->fetch_assoc()) {
		
		
		?>
		  <div class="single-product">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <?php echo '<h1> '.$row['product_Name'].'</h1>'; ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-slider">
              <div id="slider" class="flexslider" style="background-color:#F4F3EE;">
               
                   <?php echo '<img src="Images/Women/'.$row['product_image'].'" style="width:350px;"/>'; ?>
                 
              </div>
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <?php echo '<h4> '.$row['product_Name'].'</h4>'; ?>
              <?php echo '<h6>RM '.$row['product_Price'].'</h6>'; ?>
              <?php echo '<p>'.$row['product_Detail'].'</p>'; ?>
              <?php echo '<span>'.$row['product_Quantity'].' left on stock</span>'; ?>
             <form method="post" action="cart.php?action=add&product_ID=<?php echo $row["product_ID"]; ?>"> 
				<label for="quantity">Quantity:</label>
				 <select name="product_Quantity" id="product_Quantity">  
				  <option value="1">1</option>  
				  <option value="2">2</option>  
				  <option value="3">3</option>  
				  <option value="4">4</option>  
				  <option value="5">5</option>
				  </select>
				<input name="product_Price" type="hidden" value="<?php $row['product_Price'];?>">
				<input name="product_Name" type="hidden" value="<?php $row['product_Name'];?>">
				
				<?php if($row['product_Quantity']>0){?>
				
                <input type="submit" class="button" name="add_to_cart" value="Add to Cart" style="background-color:#463F3A; margin-top: 20px;">
				
				<?php } ?>
				
				
              </form>
              <div class="down-content">
                <div class="categories">
                  <h6>Category: <span><a href="#">Pants</a>,<a href="#">Women</a>,<a href="#">Lifestyle</a></span></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		
		<?php
				}
		}				
		?>
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