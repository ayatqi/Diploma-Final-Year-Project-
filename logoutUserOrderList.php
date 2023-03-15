<?php
setcookie("userid","",time()-3600);//for delete the cookie //destroy the cookie 
header("location:UserOrderList.php");
?>


