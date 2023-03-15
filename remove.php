<?php

if(!isset($_COOKIE["userid"]))// $_COOKIE is a variable and login is a cookie name 

	header("location:SignIn.php"); 

 include("data.php"); 
 
 
 $orderID = $_GET["orderid"];
 
 $delete = "DELETE FROM onlineclothingsystem.order WHERE order_ID = $orderID";
	
	if ($connect->query($delete) === TRUE) {
							
								 echo '<script>window.location="UserOrderList.php"</script>';
								} else {
									echo "Error updating record: " . $connect->error;
								}
	