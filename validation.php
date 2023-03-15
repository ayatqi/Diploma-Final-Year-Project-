<?php

$connect= mysqli_connect("localhost","root","","onlineclothingsystem") or die("connection failed:".mysqli_error());

if(isset($_REQUEST['SignIn']))
{
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$result = mysqli_query($connect,"select* from user where email='$email'and password='$password'");
$count=mysqli_fetch_array($result);
$select = "SELECT * FROM user  WHERE email = '$email' ";
$run = mysqli_query($connect,$select);
$row= mysqli_fetch_array($run);
$id=$row['id'];

    
if($count)
{
	if(isset($_REQUEST["remember"]) && $_REQUEST["remember"]==1)
	setcookie("userid",$id,time()+3600);// second on page time 
else
	setcookie("userid",$id,"1");
	header("location: Landing_Page.php"); 
	
	
}
else
{
    
	header("location:SignIn.php?err=1");
	
}
}
?>



