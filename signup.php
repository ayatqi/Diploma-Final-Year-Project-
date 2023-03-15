
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
    
    $result = mysqli_query($connect,"SELECT * from user");
  	  $count=mysqli_num_rows($result);
    
  if($password != $con_pass)
  {
    ?>
      <script>
        alert("Wrong Password. Please type again.");
      </script>
    <?php
  }
  else
  {
      

	   mysqli_query($connect,"INSERT INTO user(username,firstName,lastName, email,phoneNo, password)
  		     VALUES ('$username','$firstName','$lastName', '$email','$phoneNo','$password')");
      
      ?>
        <script>
        alert("Account has been created. Sign-In to access your account!! ;)");
      </script>

<?php
    

      
}
    
}
?>